@extends('layouts.app')

@section('title', 'Auto interieur reinigen in Zaandam | Dieptereiniging auto interieur | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto interieur laten reinigen in Zaandam? Auto Poets Centrale Zaanstad helpt met dieptereiniging, bekleding, vloeren, ramen, instappen en verzorgde interieurafwerking.')
@section('meta_keywords', 'auto interieur reinigen zaandam, interieurreiniging auto, bekleding reinigen auto, auto schoonmaken binnenkant, auto detailing interieur')
@section('canonical', url('/interieur-reinigen-auto'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Interieur • Reinigen • Zaandam</div>
      <h1 class="page-hero__title">Auto interieur reinigen in Zaandam</h1>
      <p class="page-hero__lead">
        Wil je het interieur van jouw auto professioneel laten reinigen? Auto Poets Centrale Zaanstad
        helpt met het netjes, fris en verzorgd maken van auto interieurs voor particulieren,
        zakelijke rijders en dealers.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="interieur-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professionele interieurreiniging voor auto’s</h2>
      <p class="p section-intro">
        Een schoon interieur zorgt voor meer comfort, een verzorgde uitstraling en een betere indruk
        bij dagelijks gebruik of verkoop. Wij reinigen met aandacht voor bekleding, vloeren,
        instappen, ramen en detailwerk in het interieur.
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
          <div class="card__title">Frisse cabine</div>
          <p class="card__text">
            Een net en fris interieur maakt dagelijks rijden prettiger en verzorgder.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Bekleding en vloeren</div>
          <p class="card__text">
            Extra aandacht voor stoelen, matten, vloerbekleding en zichtbare gebruikssporen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Verkoopklaar resultaat</div>
          <p class="card__text">
            Een schoon interieur helpt direct bij de presentatie van de auto richting koper of inruil.
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
        <h2 class="h2">Van gebruikte cabine naar nette uitstraling</h2>
        <p class="p">
          Interieurreiniging vraagt om precisie. Het gaat niet alleen om snel stofzuigen,
          maar om de afwerking van contactpunten, ramen, naden, instappen en algemene frisheid.
        </p>
        <p class="p">
          Daarom kiezen klanten voor een aanpak waarbij het interieur echt netjes wordt afgewerkt.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Nette afwerking</div>
          <div class="usp usp--light"><b>✓</b>Voor dagelijks gebruik of verkoop</div>
          <div class="usp usp--light"><b>✓</b>Ook voor zakelijke auto’s</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto interieur reinigen in Zaandam door Auto Poets Centrale Zaanstad"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="wat-doen-wij">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Wat kan er worden aangepakt?</h2>
      <p class="p section-intro">
        Afhankelijk van de staat van het voertuig helpen wij met een nette interieurbehandeling
        die past bij gebruik, vervuiling en gewenste uitstraling.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Stoelen en bekleding</div>
          <p class="card__text">
            Meer aandacht voor zichtbare vervuiling en de algemene nette uitstraling van het interieur.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Dashboard en details</div>
          <p class="card__text">
            Contactpunten, kunststof delen, ventilatieroosters en detailwerk worden netjes meegenomen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Ramen en afwerking</div>
          <p class="card__text">
            Schone ramen en verzorgde afwerking maken het verschil in totaalbeleving.
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
          <h2 class="h2" style="margin-bottom:0;">Auto interieur laten reinigen?</h2>
          <p class="p section-intro">
            Wil je jouw auto van binnen weer netjes, fris en representatief maken?
            Neem contact met ons op of bekijk direct de beschikbare pakketten.
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
