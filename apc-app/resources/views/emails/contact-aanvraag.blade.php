<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe Aanvraag Auto Poetsen</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f1ec; font-family:Arial, Helvetica, sans-serif; color:#1a1a1a;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4f1ec; margin:0; padding:24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:760px; background:#ffffff; border-radius:18px; overflow:hidden; border:1px solid #e7dfd2;">

                    <tr>
                        <td style="background:#111111; padding:28px 32px;">
                            <div style="font-size:12px; letter-spacing:1.2px; text-transform:uppercase; color:#f7c948; font-weight:700;">
                                Auto Poets Centrale Zaanstad
                            </div>
                            <h1 style="margin:10px 0 0; font-size:28px; line-height:1.2; color:#ffffff;">
                                Nieuwe aanvraag via de website
                            </h1>
                            <p style="margin:10px 0 0; font-size:14px; line-height:1.6; color:#d9d9d9;">
                                Er is een nieuwe offerte- of afspraakaanvraag binnengekomen via het contactformulier.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:28px 32px 10px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:separate; border-spacing:0 14px;">
                                <tr>
                                    <td valign="top" style="width:50%; padding-right:10px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4; border:1px solid #ebe3d6; border-radius:16px;">
                                            <tr>
                                                <td style="padding:20px;">
                                                    <h2 style="margin:0 0 14px; font-size:18px; color:#111111;">Contactgegevens</h2>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Naam:</strong> {{ $naam }}</p>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;">
                                                        <strong>E-mail:</strong>
                                                        <a href="mailto:{{ $email }}" style="color:#c79b16; text-decoration:none; font-weight:700;">{{ $email }}</a>
                                                    </p>
                                                    <p style="margin:0; font-size:14px; line-height:1.6;">
                                                        <strong>Telefoon:</strong>
                                                        @if($telefoon !== '-')
                                                            <a href="tel:{{ preg_replace('/\s+/', '', $telefoon) }}" style="color:#111111; text-decoration:none;">{{ $telefoon }}</a>
                                                        @else
                                                            -
                                                        @endif
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <td valign="top" style="width:50%; padding-left:10px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4; border:1px solid #ebe3d6; border-radius:16px;">
                                            <tr>
                                                <td style="padding:20px;">
                                                    <h2 style="margin:0 0 14px; font-size:18px; color:#111111;">Voertuig</h2>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Kenteken:</strong> {{ $kenteken }}</p>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Merk:</strong> {{ $merk }}</p>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Model:</strong> {{ $model }}</p>
                                                    <p style="margin:0; font-size:14px; line-height:1.6;"><strong>Voertuigsoort:</strong> {{ $voertuigsoort }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top" style="width:50%; padding-right:10px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4; border:1px solid #ebe3d6; border-radius:16px;">
                                            <tr>
                                                <td style="padding:20px;">
                                                    <h2 style="margin:0 0 14px; font-size:18px; color:#111111;">RDW gegevens</h2>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Label:</strong> {{ $rdw_label }}</p>
                                                    <p style="margin:0; font-size:14px; line-height:1.6;">
                                                        <strong>Samenvatting:</strong>
                                                        {{ $kenteken }} — {{ $rdw_label }}@if($voertuigsoort !== '-') ({{ $voertuigsoort }})@endif
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <td valign="top" style="width:50%; padding-left:10px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4; border:1px solid #ebe3d6; border-radius:16px;">
                                            <tr>
                                                <td style="padding:20px;">
                                                    <h2 style="margin:0 0 14px; font-size:18px; color:#111111;">Gekozen pakket</h2>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Pakket:</strong> {{ $pakket }}</p>
                                                    <p style="margin:0; font-size:14px; line-height:1.6;"><strong>Extra’s:</strong> {{ $extras }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px 32px 0;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4; border:1px solid #ebe3d6; border-radius:16px;">
                                <tr>
                                    <td style="padding:22px;">
                                        <h2 style="margin:0 0 12px; font-size:18px; color:#111111;">Bericht van klant</h2>
                                        <div style="font-size:14px; line-height:1.8; color:#222222; white-space:pre-line;">{{ trim($bericht) !== '' ? $bericht : 'Geen extra bericht toegevoegd.' }}</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:24px 32px 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#111111; border-radius:14px;">
                                <tr>
                                    <td style="padding:16px 20px; font-size:13px; line-height:1.7; color:#d7d7d7;">
                                        <strong style="color:#ffffff;">Auto poetsen aanvraag</strong><br>
                                        Deze aanvraag is automatisch verzonden via het contactformulier op de website van Auto Poets Centrale Zaanstad.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>