@extends('layouts.app')

@section('title', 'Betaling niet afgerond | Auto Poets Centrale Zaanstad')
@section('meta_description', 'De aanbetaling voor uw afspraak is nog niet afgerond of nog niet bevestigd.')

@section('content')

<section class="page-hero">
    <div class="container">
        <div class="page-hero__inner reveal">
            <div class="page-hero__kicker">Afspraak • Betaling • Niet afgerond</div>
            <h1 class="page-hero__title">Betaling niet afgerond</h1>
            <p class="page-hero__lead">
                De aanbetaling is nog niet gelukt of nog niet bevestigd. Geen zorgen: u kunt het eenvoudig opnieuw proberen of contact met ons opnemen.
            </p>
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="container">

        @php
            $appointment = \App\Models\Appointment::where('payment_status', '!=', 'paid')
                ->latest('id')
                ->first();
        @endphp

        <div class="grid-3" style="align-items:start;">

            <div class="card reveal" style="grid-column:span 2;">
                <div class="card__body">
                    <div class="card__title">Status van uw reservering</div>

                    <div style="display:grid; gap:14px; grid-template-columns:1fr 1fr; margin-top:18px;">

                        <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                            <div class="card__body">
                                <div class="card__title" style="font-size:18px;">Huidige status</div>
                                <p class="card__text" style="margin-bottom:0;">
                                    <b>Betaling nog niet bevestigd</b>
                                </p>
                            </div>
                        </div>

                        <div class="card" style="background:#faf8f4; border:1px solid #ebe3d6;">
                            <div class="card__body">
                                <div class="card__title" style="font-size:18px;">Aanbetaling</div>
                                <p class="card__text" style="margin-bottom:0;">
                                    <b>€50,00</b>
                                </p>
                            </div>
                        </div>

                        @if($appointment)
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
                                    <div class="card__title" style="font-size:18px;">Afspraakstatus</div>
                                    <p class="card__text" style="margin-bottom:0;">
                                        <b>{{ $appointment->appointment_status ?: 'pending_payment' }}</b>
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
                        @endif

                    </div>

                    <div class="card" style="margin-top:18px; background:#fff8e6; border:1px solid rgba(199,155,22,.22);">
                        <div class="card__body">
                            <div class="card__title" style="font-size:18px;">Wat betekent dit?</div>
                            <p class="card__text" style="margin-bottom:10px;">
                                Uw afspraak is nog niet definitief bevestigd, omdat de aanbetaling nog niet succesvol is verwerkt.
                            </p>
                            <p class="card__text" style="margin-bottom:0;">
                                In sommige gevallen duurt het heel kort voordat een betaling volledig is bijgewerkt. Komt u direct vanaf de betaalpagina terug?
                                Dan kan het zijn dat de bevestiging nog onderweg is.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card reveal">
                <div class="card__body">
                    <div class="card__title">Wat kunt u nu doen?</div>

                    <p class="card__text" style="margin-top:12px;">
                        <b>Optie 1:</b><br>
                        Probeer de betaling opnieuw via het afspraakformulier.
                    </p>

                    <p class="card__text">
                        <b>Optie 2:</b><br>
                        Neem contact met ons op als u twijfelt of uw reservering wel goed is doorgekomen.
                    </p>

                    <p class="card__text">
                        <b>Contact:</b><br>
                        <a href="tel:+31649777080">06 - 49777080</a><br>
                        <a href="mailto:info@apczaanstad.nl">info@apczaanstad.nl</a>
                    </p>

                    <div class="action-row action-row--center" style="margin-top:14px;">
                        <a href="{{ route('contact') }}" class="btn btn--primary">Terug naar contact</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection