@extends('layouts.app')

@section('title', 'Auto laten poetsen in Zwanenburg | Autopoetsbedrijf omgeving Zwanenburg | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto laten poetsen in Zwanenburg? Auto Poets Centrale Zaanstad helpt klanten uit Zwanenburg met auto detailing, interieurreiniging, exterieurverzorging en showroomklaar maken.')
@section('meta_keywords', 'auto laten poetsen zwanenburg, autopoetsbedrijf zwanenburg, auto detailing zwanenburg, auto reinigen zwanenburg, showroomklaar maken zwanenburg')
@section('canonical', url('/auto-laten-poetsen-zwanenburg'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Zwanenburg • Auto poetsen • Detailing</div>
      <h1 class="page-hero__title">Auto laten poetsen in Zwanenburg</h1>
      <p class="page-hero__lead">
        Wil je jouw auto professioneel laten poetsen in Zwanenburg? Auto Poets Centrale Zaanstad helpt
        particulieren, zakelijke rijders en dealers met auto detailing, interieurreiniging,
        exterieurverzorging en showroomklaar maken voor een verzorgde en representatieve uitstraling.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="zwanenburg-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel autopoetsbedrijf voor klanten uit Zwanenburg</h2>
      <p class="p section-intro">
        Een auto laten poetsen gaat om meer dan alleen schoon. Het gaat om verzorging,
        uitstraling en een nette afwerking die past bij dagelijks gebruik, zakelijke inzet
        of verkoop. Wij helpen klanten uit Zwanenburg die hun auto professioneel verzorgd willen houden.
      </p>
      <p class="p">
        Wij werken voor klanten uit <strong>Zwanenburg</strong>, <strong>Halfweg</strong>,
        <strong>Haarlem</strong>, <strong>Amsterdam</strong>, <strong>Badhoevedorp</strong>,
        <strong>Osdorp</strong>, <strong>Sloten</strong> en <strong>Zaanstad</strong>.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="grid-3 reveal">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Verzorgd voor elke dag</div>
          <p class="card__text">
            Voor auto’s die schoon, fris en representatief moeten blijven in dagelijks gebruik.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Detailing met aandacht</div>
          <p class="card__text">
            Meer focus op afwerking, lak, interieurdetails en totale verzorging van het voertuig.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Presentatie voor verkoop</div>
          <p class="card__text">
            Ideaal als je de auto netter wilt laten presenteren voor verkoop, inruil of aflevering.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section section--yellow">
  <div class="container">
    <div class="split reveal">
      <div class="stack">
        <span class="badge">Waarom Auto Poets Centrale Zaanstad?</span>
        <h2 class="h2">Een nette auto begint bij goede afwerking</h2>
        <p class="p">
          Wij letten niet alleen op het grove werk, maar juist ook op de details die het verschil maken:
          glas, instappen, bekleding, lakbeeld en algemene verzorging van het voertuig.
        </p>
        <p class="p">
          Daardoor kiezen klanten uit Zwanenburg voor een aanpak die professioneel,
          verzorgd en betrouwbaar aanvoelt.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Nette afwerking</div>
          <div class="usp usp--light"><b>✓</b>Voor particulier en zakelijk</div>
          <div class="usp usp--light"><b>✓</b>Ook interessant voor verkoopklaar maken</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto laten poetsen voor klanten uit Zwanenburg door Auto Poets Centrale Zaanstad"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="wat-doen-wij">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Wat wij doen</h2>
      <p class="p section-intro">
        Wij helpen met interieurreiniging, exterieurverzorging, polijsten, lakverbetering
        en showroomklaar maken, afhankelijk van het voertuig en het gewenste resultaat.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur reinigen</div>
          <p class="card__text">
            Voor meer frisheid, netheid en verzorgde afwerking van binnen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur verzorgen</div>
          <p class="card__text">
            Voor een frissere uitstraling van buiten en een netter totaalbeeld.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Showroomklaar maken</div>
          <p class="card__text">
            Voor auto’s die sterker gepresenteerd moeten worden richting koper of klant.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="card reveal">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Auto laten poetsen vanuit Zwanenburg?</h2>
          <p class="p section-intro">
            Wil je jouw auto professioneel laten verzorgen en kom je uit Zwanenburg of omgeving?
            Neem contact met ons op of bekijk direct onze pakketten.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="card reveal">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Meer autoverzorging in de regio</h2>
          <p class="p section-intro">
            Wij helpen klanten uit Zaandam, Haarlem, Alkmaar, Zwanenburg en omgeving met
            auto poetsen, detailing, polijsten, interieurreiniging, lakcorrectie,
            koplampen polijsten en showroomklaar maken.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px; flex-wrap:wrap; gap:10px;">
            <a class="btn btn--dark" href="{{ url('/auto-laten-poetsen-zaandam') }}">Auto poetsen Zaandam</a>
            <a class="btn btn--dark" href="{{ url('/auto-laten-poetsen-haarlem') }}">Auto poetsen Haarlem</a>
            <a class="btn btn--dark" href="{{ url('/auto-laten-poetsen-alkmaar') }}">Auto poetsen Alkmaar</a>
            <a class="btn btn--dark" href="{{ url('/auto-laten-poetsen-zwanenburg') }}">Auto poetsen Zwanenburg</a>
            <a class="btn btn--dark" href="{{ url('/auto-detailing-zaandam') }}">Auto detailing Zaandam</a>
            <a class="btn btn--dark" href="{{ url('/auto-polijsten-zaandam') }}">Auto polijsten Zaandam</a>
            <a class="btn btn--dark" href="{{ url('/interieur-reinigen-auto') }}">Interieur reinigen</a>
            <a class="btn btn--dark" href="{{ url('/lakcorrectie-auto') }}">Lakcorrectie auto</a>
            <a class="btn btn--dark" href="{{ url('/koplampen-polijsten') }}">Koplampen polijsten</a>
            <a class="btn btn--dark" href="{{ url('/auto-showroom-klaarmaken') }}">Showroomklaar maken</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
