<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AppointmentPaymentController extends Controller
{
    public function start(Appointment $appointment)
    {
        if ($appointment->payment_status === 'paid') {
            return redirect()->route('afspraak.bevestigd');
        }

        $response = Http::withToken(config('services.mollie.key'))
            ->acceptJson()
            ->post('https://api.mollie.com/v2/payments', [
                'amount' => [
                    'currency' => $appointment->currency,
                    'value' => number_format((float) $appointment->deposit_amount, 2, '.', ''),
                ],
                'description' => 'Auto poetsen aanbetaling ' . $appointment->reference,
                'redirectUrl' => route('mollie.return', $appointment),
                'webhookUrl' => config('services.mollie.webhook_url'),
                'metadata' => [
                    'appointment_id' => $appointment->id,
                    'reference' => $appointment->reference,
                ],
            ]);

        if ($response->failed()) {
            return redirect()->route('contact')->withErrors([
                'payment' => 'Betaling kon niet worden gestart. Probeer opnieuw.',
            ]);
        }

        $payment = $response->json();

        $appointment->update([
            'payment_id' => $payment['id'] ?? null,
            'payment_status' => $payment['status'] ?? 'open',
        ]);

        $checkoutUrl = data_get($payment, '_links.checkout.href');

        if (!$checkoutUrl) {
            return redirect()->route('contact')->withErrors([
                'payment' => 'Checkout URL ontbreekt in Mollie response.',
            ]);
        }

        return redirect()->away($checkoutUrl);
    }

    public function handleWebhook(Request $request)
    {
        $paymentId = $request->input('id');

        if (!$paymentId) {
            return response('No payment id', 400);
        }

        $response = Http::withToken(config('services.mollie.key'))
            ->acceptJson()
            ->get("https://api.mollie.com/v2/payments/{$paymentId}");

        if ($response->failed()) {
            return response('Unable to fetch payment', 400);
        }

        $payment = $response->json();
        $appointmentId = data_get($payment, 'metadata.appointment_id');

        if (!$appointmentId) {
            return response('No appointment metadata', 400);
        }

        $appointment = Appointment::find($appointmentId);

        if (!$appointment) {
            return response('Appointment not found', 404);
        }

        $this->syncAppointmentPaymentStatus($appointment, $payment);

        return response('OK', 200);
    }

    public function return(Appointment $appointment)
    {
        if (!$appointment->payment_id) {
            return redirect()->route('afspraak.mislukt');
        }

        $response = Http::withToken(config('services.mollie.key'))
            ->acceptJson()
            ->get("https://api.mollie.com/v2/payments/{$appointment->payment_id}");

        if ($response->ok()) {
            $payment = $response->json();
            $this->syncAppointmentPaymentStatus($appointment, $payment);
        } else {
            $appointment->refresh();
        }

        if ($appointment->payment_status === 'paid') {
            return redirect()->route('afspraak.bevestigd');
        }

        return redirect()->route('afspraak.mislukt');
    }

    private function syncAppointmentPaymentStatus(Appointment $appointment, array $payment): void
    {
        $oldStatus = $appointment->payment_status;
        $status = $payment['status'] ?? 'open';

        $appointment->payment_status = $status;

        if ($status === 'paid') {
            $appointment->appointment_status = 'confirmed';

            if (!$appointment->paid_at) {
                $appointment->paid_at = now();
            }
        } elseif (in_array($status, ['failed', 'canceled', 'expired'])) {
            $appointment->appointment_status = 'cancelled';
        } else {
            $appointment->appointment_status = 'pending_payment';
        }

        $appointment->save();

        if ($oldStatus !== 'paid' && $status === 'paid') {
            Mail::send('emails.afspraak-bevestigd', [
                'appointment' => $appointment,
            ], function ($message) use ($appointment) {
                $message->to($appointment->email, $appointment->naam)
                    ->subject('Uw afspraak is bevestigd');
            });
        }
    }
}