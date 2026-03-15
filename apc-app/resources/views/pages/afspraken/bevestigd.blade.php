@extends('layouts.app')

@section('title', 'Afspraak bevestigd | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Uw afspraak en aanbetaling zijn succesvol bevestigd bij Auto Poets Centrale Zaanstad.')

@section('content')

<section class="page-hero">
    <div class="container">
        <div class="page-hero__inner reveal">
            <div class="page-hero__kicker">Afspraak • Bevestigd • APCZ</div>
            <h1 class="page-hero__title">Uw afspraak is bevestigd</h1>
            <p class="page-hero__lead">
                Bedankt voor uw aanbetaling. Uw afspraak staat nu definitief ingepland bij Auto Poets Centrale Zaanstad.
            </p>
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="container">

        @php
            $appointment = \App\Models\Appointment::where('payment_status', 'paid')
                ->latest('id')
                ->first();
        @endphp

        <div class="grid-3" style="align-items:start;">

            <div class="card reveal" style="grid-column:span 2;">
                <div class="card__body">

                    <div class="card__title">Afspraakoverzicht</div>

                    @if($appointment)
                        <div style="display:grid; gap:14px; grid-template-columns:1fr 1fr; margin-top:18px;">

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Referentie</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ $appointment->reference }}</b>
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Status</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>Betaald en bevestigd</b>
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Datum</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ optional($appointment->afspraak_datum)->format('d-m-Y') }}</b>
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Tijdslot</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ $appointment->afspraak_tijd ?: '-' }}</b>
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Kenteken</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ $appointment->kenteken ?: '-' }}</b>
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Pakket</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ $appointment->pakket ?: 'Nog niet geselecteerd' }}</b>
                                    </p>
                                </div>
                            </div>

                            <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6; grid-column:span 2;">
                                <div class="card__body">
                                    <div class="card__title" style="font-size:18px;">Voertuig</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ $appointment->rdw_label ?: ($appointment->merk . ' ' . $appointment->model) }}</b>
                                        @if($appointment->voertuigsoort)
                                            <br><span style="opacity:.8;">{{ $appointment->voertuigsoort }}</span>
                                        @endif
                                    </p>
                                </div>
                            </div>

                        </div>
                    @else
                        <p class="card__text" style="margin-top:18px; margin-bottom:0;">
                            Uw betaling is ontvangen of wordt verwerkt. De afspraakgegevens zijn op dit moment nog niet beschikbaar.
                        </p>
                    @endif

                </div>
            </div>

            <div class="card reveal">
                <div class="card__body">
                    <div class="card__title">Belangrijke informatie</div>

                    <p class="card__text" style="margin-top:12px;">
                        <b>Afleveren voertuig:</b><br>
                        Graag de auto tussen <b>08:00 en 09:00</b> afleveren op onze locatie in Zaandam.
                    </p>

                    <p class="card__text">
                        <b>Locatie:</b><br>
                        Zijtocht 1<br>
                        1507 CD Zaandam
                    </p>

                    <p class="card__text">
                        <b>Contact:</b><br>
                        <a href="tel:+31649777080">06 - 49777080</a><br>
                        <a href="mailto:info@apczaanstad.nl">info@apczaanstad.nl</a>
                    </p>

                    <div class="action-row action-row--center" style="margin-top:14px;">
                        <a class="btn btn--primary"
                           href="https://maps.app.goo.gl/bHN1YVBX2cVYKtmQ9"
                           target="_blank" rel="noopener">
                            Open route
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="card reveal" style="margin-top:24px;">
            <div class="card__body">
                <div class="center stack">
                    <h2 class="h2" style="margin-bottom:0;">Bedankt voor uw reservering</h2>
                    <p class="p section-intro">
                        Uw afspraak is succesvol bevestigd. Mocht er iets wijzigen of wilt u nog aanvullende informatie doorgeven,
                        neem dan gerust contact met ons op.
                    </p>

                    <div class="action-row action-row--center" style="margin-top:8px;">
                        <a href="{{ route('home') }}" class="btn btn--dark">Terug naar home</a>
                        <a href="{{ route('contact') }}" class="btn btn--primary">Contact opnemen</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection