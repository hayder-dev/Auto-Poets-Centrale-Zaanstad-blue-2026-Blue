@extends('layouts.app')

@section('title', 'Auto polijsten in Zaandam | Lakcorrectie & glansherstel | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto laten polijsten in Zaandam? Auto Poets Centrale Zaanstad helpt met lakverbetering, glansherstel, lichte krasverwijdering en professionele detailing in Zaandam en omgeving.')
@section('meta_keywords', 'auto polijsten zaandam, lakcorrectie zaandam, auto detailing zaandam, krasjes verwijderen auto, glansherstel auto')
@section('canonical', url('/auto-polijsten-zaandam'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Zaandam • Polijsten • Lakverbetering</div>
      <h1 class="page-hero__title">Auto polijsten in Zaandam</h1>
      <p class="page-hero__lead">
        Wil je jouw auto professioneel laten polijsten in Zaandam? Auto Poets Centrale Zaanstad
        helpt met glansherstel, lakverbetering, lichte krasverwijdering en een strakkere afwerking
        voor auto’s van particulieren, zakelijke rijders en dealers.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="polijsten-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel auto polijsten in Zaandam</h2>
      <p class="p section-intro">
        Na verloop van tijd krijgt bijna iedere auto te maken met waskrasjes, doffe lak,
        lichte swirls en minder diepte in de glans. Met een professionele polijstbehandeling
        brengen wij de lak weer zichtbaar frisser en strakker terug.
      </p>
      <p class="p">
        Wij werken voor klanten uit <strong>Zaandam</strong>, <strong>Zaanstad</strong>,
        <strong>Wormerveer</strong>, <strong>Assendelft</strong>, <strong>Koog aan de Zaan</strong>,
        <strong>Krommenie</strong>, <strong>Purmerend</strong> en <strong>Amsterdam</strong>.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="grid-3 reveal">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Glansherstel</div>
          <p class="card__text">
            Ideaal voor lak die dof oogt of zijn diepe glans is verloren door dagelijks gebruik.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Lichte krasjes verminderen</div>
          <p class="card__text">
            Polijsten helpt om fijne waskrasjes, swirls en lichte imperfecties optisch sterk te verminderen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Nettere presentatie</div>
          <p class="card__text">
            Een strakkere lak zorgt direct voor een verzorgdere uitstraling bij verkoop, inruil of dagelijks gebruik.
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
        <h2 class="h2">Meer diepte, meer glans, nettere lak</h2>
        <p class="p">
          Polijsten draait niet alleen om glans, maar ook om rust in het lakbeeld. Wij kijken naar
          de staat van de auto, de lak, het gewenste resultaat en een veilige aanpak per voertuig.
        </p>
        <p class="p">
          Daardoor kiezen klanten voor een behandeling die zichtbaar verschil maakt zonder onnodig
          agressief te werk te gaan.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Veilige werkwijze</div>
          <div class="usp usp--light"><b>✓</b>Meer glans en diepte</div>
          <div class="usp usp--light"><b>✓</b>Voor particulier, dealer en zakelijk</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto polijsten in Zaandam door Auto Poets Centrale Zaanstad"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="wat-doen-wij">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Wanneer is polijsten interessant?</h2>
      <p class="p section-intro">
        Auto polijsten is interessant wanneer je lak dof is geworden, fijne krasjes zichtbaar zijn
        of wanneer je de auto netter wilt presenteren voor verkoop, aflevering of eigen gebruik.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Doffe lak opfrissen</div>
          <p class="card__text">
            Geschikt voor auto’s die minder glans hebben gekregen door weer, wassen en gebruik.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor verkoop of inruil</div>
          <p class="card__text">
            Een nette glanzende auto maakt een sterkere eerste indruk en presenteert beter.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Als onderdeel van detailing</div>
          <p class="card__text">
            Polijsten wordt vaak gecombineerd met interieurreiniging en exterieurverzorging voor totaalresultaat.
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
          <h2 class="h2" style="margin-bottom:0;">Auto laten polijsten in Zaandam?</h2>
          <p class="p section-intro">
            Wil je jouw auto weer meer glans geven en het lakbeeld verbeteren?
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

@endsection
