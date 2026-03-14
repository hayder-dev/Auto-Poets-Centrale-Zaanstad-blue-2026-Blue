@extends('layouts.app')

@section('title', 'Auto laten poetsen in Alkmaar | Autopoetsbedrijf omgeving Alkmaar | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto laten poetsen in Alkmaar? Auto Poets Centrale Zaanstad helpt klanten uit Alkmaar met auto detailing, interieurreiniging, exterieurverzorging en showroomklaar maken.')
@section('meta_keywords', 'auto laten poetsen alkmaar, autopoetsbedrijf alkmaar, auto detailing alkmaar, auto reinigen alkmaar, showroomklaar maken alkmaar')
@section('canonical', url('/auto-laten-poetsen-alkmaar'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Alkmaar • Auto poetsen • Detailing</div>
      <h1 class="page-hero__title">Auto laten poetsen in Alkmaar</h1>
      <p class="page-hero__lead">
        Wil je jouw auto professioneel laten poetsen in Alkmaar? Auto Poets Centrale Zaanstad helpt
        particulieren, zakelijke rijders en dealers met auto detailing, interieurreiniging,
        exterieurverzorging en showroomklaar maken voor een nette en verzorgde presentatie.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="alkmaar-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel autopoetsbedrijf voor klanten uit Alkmaar</h2>
      <p class="p section-intro">
        Een auto laten poetsen is een investering in uitstraling, onderhoud en waarde.
        Wij helpen klanten uit Alkmaar die hun auto professioneel willen laten verzorgen
        met aandacht voor detail, nette afwerking en een representatief eindresultaat.
      </p>
      <p class="p">
        Wij werken voor klanten uit <strong>Alkmaar</strong>, <strong>Heiloo</strong>,
        <strong>Castricum</strong>, <strong>Heerhugowaard</strong>, <strong>Bergen</strong>,
        <strong>Uitgeest</strong>, <strong>Beverwijk</strong> en <strong>Zaanstad</strong>.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="grid-3 reveal">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Netjes voor dagelijks gebruik</div>
          <p class="card__text">
            Voor auto’s die fris, schoon en verzorgd moeten blijven voor werk of privé.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Detailing met meer aandacht</div>
          <p class="card__text">
            Voor klanten die meer willen dan standaard reinigen en waarde hechten aan afwerking.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Klaar voor verkoop of inruil</div>
          <p class="card__text">
            Een verzorgde auto zorgt voor een sterkere indruk bij verkoop, inruil of aflevering.
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
        <h2 class="h2">Kwaliteit, rust en een nette oplevering</h2>
        <p class="p">
          Wij werken niet gehaast, maar doelgericht. Dat betekent aandacht voor het interieur,
          de lak, de details en de totale uitstraling van de auto.
        </p>
        <p class="p">
          Daardoor kiezen klanten uit Alkmaar voor een aanpak die professioneel aanvoelt
          en zichtbaar verschil maakt in presentatie en beleving.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Professionele aanpak</div>
          <div class="usp usp--light"><b>✓</b>Voor particulier, dealer en zakelijk</div>
          <div class="usp usp--light"><b>✓</b>Strakke en verzorgde afwerking</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto laten poetsen voor klanten uit Alkmaar door Auto Poets Centrale Zaanstad"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="wat-doen-wij">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Waarmee kunnen wij helpen?</h2>
      <p class="p section-intro">
        Afhankelijk van de auto en jouw wensen helpen wij met interieurreiniging,
        exterieurverzorging, polijsten, lakverbetering en showroomafwerking.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur verzorgen</div>
          <p class="card__text">
            Meer frisheid, netheid en verzorgde afwerking van de cabine.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur reinigen</div>
          <p class="card__text">
            Handwas, velgenreiniging en een nette buitenzijde voor betere presentatie.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Showroomklaar maken</div>
          <p class="card__text">
            Geschikt voor auto’s die representatief moeten worden aangeboden of afgeleverd.
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
          <h2 class="h2" style="margin-bottom:0;">Auto laten poetsen vanuit Alkmaar?</h2>
          <p class="p section-intro">
            Wil je jouw auto netjes laten verzorgen en kom je uit Alkmaar of omgeving?
            Neem contact op met Auto Poets Centrale Zaanstad of bekijk direct onze pakketten.
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
