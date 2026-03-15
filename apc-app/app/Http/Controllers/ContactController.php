<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = Validator::make($request->all(), [
            'aanvraag_type'       => ['required', 'in:offerte,afspraak'],
            'naam'                => ['required', 'string', 'max:120'],
            'email'               => ['required', 'email', 'max:180'],
            'telefoon'            => ['nullable', 'string', 'max:40'],
            'kenteken'            => ['nullable', 'string', 'max:20'],
            'pakket'              => ['nullable', 'string', 'max:60'],
            'extras'              => ['nullable', 'string', 'max:250'],
            'bericht'             => ['required', 'string', 'max:3000'],
            'merk'                => ['nullable', 'string', 'max:80'],
            'model'               => ['nullable', 'string', 'max:120'],
            'voertuigsoort'       => ['nullable', 'string', 'max:80'],
            'rdw_label'           => ['nullable', 'string', 'max:220'],
            'afspraak_datum'      => ['nullable', 'date'],
            'afspraak_tijd'       => ['nullable', 'string', 'max:20'],
            'vervuiling'          => ['nullable', 'string', 'max:60'],
            'akkoord_voorwaarden' => ['nullable', 'accepted'],
            'honeypot'            => ['nullable', 'string', 'max:200'],
        ])->validate();

        if (!empty($request->input('honeypot'))) {
            return back()->with('success', 'Bedankt! Je aanvraag is ontvangen.');
        }

        if (!empty($data['kenteken'])) {
            $data['kenteken'] = strtoupper(preg_replace('/[^A-Z0-9]/', '', (string) $data['kenteken']));
        }

        if (!empty($data['extras'])) {
            $data['extras'] = implode(',', array_filter(array_map('trim', explode(',', (string) $data['extras']))));
        }

        $isAfspraak = ($data['aanvraag_type'] ?? 'offerte') === 'afspraak';

        if ($isAfspraak) {
            Validator::make($request->all(), [
                'afspraak_datum'      => ['required', 'date'],
                'afspraak_tijd'       => ['required', 'string', 'max:20'],
                'akkoord_voorwaarden' => ['required', 'accepted'],
            ])->validate();
        }

        $to = 'boekingen@apczaanstad.nl';

        $subjectPrefix = $isAfspraak
            ? 'Nieuwe afspraakaanvraag APCZ'
            : 'Nieuwe offerteaanvraag APCZ';

        $subject = $subjectPrefix
            . (!empty($data['kenteken']) ? ' — ' . $data['kenteken'] : '')
            . (!empty($data['pakket']) ? ' — ' . $data['pakket'] : '');

        $mailData = [
            'aanvraag_type'   => $data['aanvraag_type'],
            'naam'            => $data['naam'],
            'email'           => $data['email'],
            'telefoon'        => !empty($data['telefoon']) ? (string) $data['telefoon'] : '-',
            'kenteken'        => !empty($data['kenteken']) ? (string) $data['kenteken'] : '-',
            'pakket'          => !empty($data['pakket']) ? (string) $data['pakket'] : 'Nog geen pakket gekozen',
            'extras'          => !empty($data['extras']) ? $this->formatExtras((string) $data['extras']) : 'Geen extra’s geselecteerd',
            'bericht'         => trim((string) $data['bericht']),
            'merk'            => !empty($data['merk']) ? (string) $data['merk'] : '-',
            'model'           => !empty($data['model']) ? (string) $data['model'] : '-',
            'voertuigsoort'   => !empty($data['voertuigsoort']) ? (string) $data['voertuigsoort'] : '-',
            'rdw_label'       => !empty($data['rdw_label']) ? (string) $data['rdw_label'] : '-',
            'afspraak_datum'  => !empty($data['afspraak_datum']) ? (string) $data['afspraak_datum'] : '-',
            'afspraak_tijd'   => !empty($data['afspraak_tijd']) ? (string) $data['afspraak_tijd'] : '-',
            'vervuiling'      => !empty($data['vervuiling']) ? (string) $data['vervuiling'] : '-',
            'aanbetaling'     => $isAfspraak ? '€50,00' : '-',
        ];

        Mail::send(
            'emails.contact-aanvraag',
            $mailData,
            function ($message) use ($to, $subject, $data) {
                $message->to($to)
                    ->subject($subject)
                    ->replyTo($data['email'], $data['naam']);
            }
        );

        if ($isAfspraak) {
            $appointment = Appointment::create([
                'reference'          => 'APCZ-' . strtoupper(Str::random(8)),
                'aanvraag_type'      => $data['aanvraag_type'],
                'naam'               => $data['naam'],
                'email'              => $data['email'],
                'telefoon'           => $data['telefoon'] ?? null,
                'kenteken'           => $data['kenteken'] ?? null,
                'merk'               => $data['merk'] ?? null,
                'model'              => $data['model'] ?? null,
                'voertuigsoort'      => $data['voertuigsoort'] ?? null,
                'rdw_label'          => $data['rdw_label'] ?? null,
                'pakket'             => $data['pakket'] ?? null,
                'extras'             => $data['extras'] ?? null,
                'bericht'            => trim((string) $data['bericht']),
                'vervuiling'         => $data['vervuiling'] ?? null,
                'afspraak_datum'     => $data['afspraak_datum'] ?? null,
                'afspraak_tijd'      => $data['afspraak_tijd'] ?? null,
                'deposit_amount'     => 50.00,
                'currency'           => 'EUR',
                'payment_status'     => 'open',
                'appointment_status' => 'pending_payment',
            ]);

            return redirect()->route('mollie.start', $appointment);
        }

        return back()->with('success', 'Top! We hebben je offerteaanvraag ontvangen. We reageren zo snel mogelijk.');
    }

    private function formatExtras(string $extras): string
    {
        $items = array_filter(array_map('trim', explode(',', $extras)));

        $map = [
            'koplampen'       => 'Koplampen polijsten',
            'geurbehandeling' => 'Geurbehandeling',
            'hondenharen'     => 'Hondenharen verwijderen',
            'hemel'           => 'Hemel reinigen',
            'motorruimte'     => 'Motorruimte reinigen (op eigen risico)',
            'coating'         => 'Speciale coatings (prijs op aanvraag)',
        ];

        $pretty = [];
        foreach ($items as $key) {
            $k = strtolower($key);
            $pretty[] = $map[$k] ?? $key;
        }

        return implode(', ', $pretty);
    }
}