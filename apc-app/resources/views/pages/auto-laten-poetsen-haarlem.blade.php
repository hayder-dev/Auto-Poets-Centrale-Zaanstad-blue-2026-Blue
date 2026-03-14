@extends('layouts.app')

@section('title', 'Auto laten poetsen in Haarlem | Autopoetsbedrijf omgeving Haarlem | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto laten poetsen in Haarlem? Auto Poets Centrale Zaanstad helpt klanten uit Haarlem met auto detailing, interieurreiniging, exterieurverzorging en showroomklaar maken.')
@section('meta_keywords', 'auto laten poetsen haarlem, autopoetsbedrijf haarlem, auto detailing haarlem, auto reinigen haarlem, showroomklaar maken haarlem')
@section('canonical', url('/auto-laten-poetsen-haarlem'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Haarlem • Auto poetsen • Detailing</div>
      <h1 class="page-hero__title">Auto laten poetsen in Haarlem</h1>
      <p class="page-hero__lead">
        Wil je jouw auto professioneel laten poetsen in Haarlem? Auto Poets Centrale Zaanstad helpt
        particulieren, zakelijke rijders en dealers met auto detailing, interieurreiniging,
        exterieurverzorging en showroomklaar maken voor een nette en verzorgde uitstraling.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="haarlem-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel autopoetsbedrijf voor klanten uit Haarlem</h2>
      <p class="p section-intro">
        Een auto laten poetsen draait om meer dan alleen schoonmaken. Het gaat om verzorging,
        uitstraling, onderhoud en een nette afwerking die past bij het voertuig. Wij helpen
        klanten uit Haarlem die hun auto representatief, fris en professioneel verzorgd willen houden.
      </p>
      <p class="p">
        Wij werken voor klanten uit <strong>Haarlem</strong>, <strong>Heemstede</strong>,
        <strong>Bloemendaal</strong>, <strong>Santpoort</strong>, <strong>Zwanenburg</strong>,
        <strong>Halfweg</strong>, <strong>Amsterdam</strong> en natuurlijk <strong>Zaanstad</strong>.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="grid-3 reveal">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Auto poetsen voor dagelijks gebruik</div>
          <p class="card__text">
            Voor auto’s die netjes, fris en representatief moeten blijven bij dagelijks gebruik.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Auto detailing voor liefhebbers</div>
          <p class="card__text">
            Meer aandacht voor afwerking, details, lakbeeld en totale verzorging van de auto.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Showroomklaar maken</div>
          <p class="card__text">
            Ideaal voor verkoop, inruil, aflevering of een sterkere presentatie van het voertuig.
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
        <span class="badge">Waarom APCZ?</span>
        <h2 class="h2">Nette afwerking met aandacht voor detail</h2>
        <p class="p">
          Wij geloven in rustig werken en een nette oplevering. Daarom kijken wij niet alleen
          naar het grove schoonmaakwerk, maar ook naar details zoals glas, instappen,
          bekleding, kieren en algemene afwerking.
        </p>
        <p class="p">
          Klanten uit Haarlem kiezen voor een aanpak die gericht is op kwaliteit,
          duidelijke afspraken en een verzorgde totaalindruk.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Professionele middelen</div>
          <div class="usp usp--light"><b>✓</b>Voor particulier en zakelijk</div>
          <div class="usp usp--light"><b>✓</b>Nette en verzorgde oplevering</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto laten poetsen voor klanten uit Haarlem door Auto Poets Centrale Zaanstad"
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
        Afhankelijk van de staat van de auto en jouw wensen helpen wij met interieurreiniging,
        exterieurverzorging, polijsten, lakverbetering en verkoopklaar maken.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur reinigen</div>
          <p class="card__text">
            Stoelen, vloeren, dashboard, ramen en nette afwerking van het interieur.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur verzorgen</div>
          <p class="card__text">
            Handwas, velgenreiniging, finishing en een frisse uitstraling van buiten.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Verkoopklaar maken</div>
          <p class="card__text">
            Ideaal voor auto’s die beter gepresenteerd moeten worden voor verkoop of aflevering.
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
          <h2 class="h2" style="margin-bottom:0;">Auto laten poetsen vanuit Haarlem?</h2>
          <p class="p section-intro">
            Wil je jouw auto professioneel laten verzorgen en woon of werk je in Haarlem?
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
