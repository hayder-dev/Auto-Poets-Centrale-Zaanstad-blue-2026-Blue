<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak bevestigd</title>
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
                                Uw afspraak is bevestigd
                            </h1>
                            <p style="margin:10px 0 0; font-size:14px; line-height:1.6; color:#d9d9d9;">
                                Bedankt voor uw aanbetaling. Uw reservering staat nu definitief ingepland.
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
                                                    <h2 style="margin:0 0 14px; font-size:18px; color:#111111;">Afspraak</h2>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Referentie:</strong> {{ $appointment->reference }}</p>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Datum:</strong> {{ optional($appointment->afspraak_datum)->format('d-m-Y') }}</p>
                                                    <p style="margin:0; font-size:14px; line-height:1.6;"><strong>Tijdslot:</strong> {{ $appointment->afspraak_tijd ?: '-' }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <td valign="top" style="width:50%; padding-left:10px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4; border:1px solid #ebe3d6; border-radius:16px;">
                                            <tr>
                                                <td style="padding:20px;">
                                                    <h2 style="margin:0 0 14px; font-size:18px; color:#111111;">Voertuig</h2>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Kenteken:</strong> {{ $appointment->kenteken ?: '-' }}</p>
                                                    <p style="margin:0 0 8px; font-size:14px; line-height:1.6;"><strong>Voertuig:</strong> {{ $appointment->rdw_label ?: '-' }}</p>
                                                    <p style="margin:0; font-size:14px; line-height:1.6;"><strong>Pakket:</strong> {{ $appointment->pakket ?: 'Nog niet geselecteerd' }}</p>
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
                                        <h2 style="margin:0 0 12px; font-size:18px; color:#111111;">Belangrijke informatie</h2>
                                        <p style="margin:0 0 10px; font-size:14px; line-height:1.8; color:#222222;">
                                            Graag de auto tussen <strong>08:00 en 09:00</strong> afleveren op onze locatie:
                                        </p>
                                        <p style="margin:0; font-size:14px; line-height:1.8; color:#222222;">
                                            Zijtocht 1<br>
                                            1507 CD Zaandam
                                        </p>
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
                                        <strong style="color:#ffffff;">APCZ bevestiging</strong><br>
                                        Heeft u vragen over uw afspraak? Neem gerust contact met ons op via
                                        <a href="mailto:info@apczaanstad.nl" style="color:#f7c948; text-decoration:none;">info@apczaanstad.nl</a>
                                        of <a href="tel:+31649777080" style="color:#f7c948; text-decoration:none;">06 - 49777080</a>.
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