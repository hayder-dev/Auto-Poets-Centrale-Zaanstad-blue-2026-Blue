<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = Validator::make($request->all(), [
            'naam'          => ['required', 'string', 'max:120'],
            'email'         => ['required', 'email', 'max:180'],
            'telefoon'      => ['nullable', 'string', 'max:40'],
            'kenteken'      => ['nullable', 'string', 'max:20'],
            'pakket'        => ['nullable', 'string', 'max:60'],
            'extras'        => ['nullable', 'string', 'max:250'],
            'bericht'       => ['required', 'string', 'max:3000'],
            'merk'          => ['nullable', 'string', 'max:80'],
            'model'         => ['nullable', 'string', 'max:120'],
            'voertuigsoort' => ['nullable', 'string', 'max:80'],
            'rdw_label'     => ['nullable', 'string', 'max:220'],
            'honeypot'      => ['nullable', 'string', 'max:200'],
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

        $to = 'boekingen@apczaanstad.nl';

        $subject = 'Nieuwe aanvraag APCZ'
            . (!empty($data['kenteken']) ? ' — ' . $data['kenteken'] : '')
            . (!empty($data['pakket']) ? ' — ' . $data['pakket'] : '');

        $mailData = [
            'naam'          => $data['naam'],
            'email'         => $data['email'],
            'telefoon'      => !empty($data['telefoon']) ? (string) $data['telefoon'] : '-',
            'kenteken'      => !empty($data['kenteken']) ? (string) $data['kenteken'] : '-',
            'pakket'        => !empty($data['pakket']) ? (string) $data['pakket'] : 'Nog geen pakket gekozen',
            'extras'        => !empty($data['extras']) ? $this->formatExtras((string) $data['extras']) : 'Geen extra’s geselecteerd',
            'bericht'       => trim((string) $data['bericht']),
            'merk'          => !empty($data['merk']) ? (string) $data['merk'] : '-',
            'model'         => !empty($data['model']) ? (string) $data['model'] : '-',
            'voertuigsoort' => !empty($data['voertuigsoort']) ? (string) $data['voertuigsoort'] : '-',
            'rdw_label'     => !empty($data['rdw_label']) ? (string) $data['rdw_label'] : '-',
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

        return back()->with('success', 'Top! We hebben je bericht ontvangen. We reageren zo snel mogelijk.');
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