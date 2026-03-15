@extends('layouts.app')

@section('title', 'Auto interieur reinigen in Zaandam | Dieptereiniging auto interieur | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto interieur laten reinigen in Zaandam? Auto Poets Centrale Zaanstad helpt met dieptereiniging, bekleding, vloeren, hemel, kofferbak, ramen en verzorgde interieurafwerking.')
@section('meta_keywords', 'auto interieur reinigen zaandam, interieurreiniging auto, bekleding reinigen auto, auto schoonmaken binnenkant, dieptereiniging auto interieur, detailing interieur')
@section('canonical', url('/interieur-reinigen-auto'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Interieur • Reinigen • Zaandam</div>
      <h1 class="page-hero__title">Auto interieur reinigen in Zaandam</h1>
      <p class="page-hero__lead">
        Wil je het interieur van jouw auto professioneel laten reinigen? Auto Poets Centrale Zaanstad
        helpt met dieptereiniging, bekleding, vloeren, ramen, instappen, kofferbak en een
        nette, frisse afwerking van het complete interieur.
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
        Een schoon auto-interieur zorgt voor meer comfort, een verzorgde uitstraling en een betere indruk
        bij dagelijks gebruik, verkoop of aflevering. Door intensief gebruik ontstaan er vaak
        vlekken, stof, zand, vegen, doffe kunststofdelen en een minder frisse uitstraling in de cabine.
      </p>
      <p class="p">
        Met een professionele interieurbehandeling helpen wij om het interieur weer netjes, fris
        en representatief te maken. Daarbij kijken wij niet alleen naar het grove schoonmaakwerk,
        maar juist ook naar detailwerk, afwerking en de algehele beleving van de auto van binnen.
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
            Een schoon en fris interieur maakt dagelijks rijden prettiger en laat de auto direct
            verzorgder en netter aanvoelen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Bekleding en vloeren</div>
          <p class="card__text">
            Extra aandacht voor stoelen, matten, vloerbekleding, instappen en zichtbare gebruikssporen
            in het interieur.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Verkoopklaar resultaat</div>
          <p class="card__text">
            Een schoon interieur helpt direct bij de presentatie van de auto richting koper,
            inruil of aflevering.
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
        <h2 class="h2">Van gebruikt interieur naar nette uitstraling</h2>
        <p class="p">
          Interieurreiniging vraagt om precisie. Het gaat niet alleen om stofzuigen,
          maar om de afwerking van contactpunten, kunststofdelen, ramen, naden,
          ventilatieroosters, instappen en algemene frisheid van de cabine.
        </p>
        <p class="p">
          Daarom kiezen klanten voor een aanpak waarbij het interieur echt netjes wordt afgewerkt
          en weer een verzorgde totaalindruk krijgt.
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
        die past bij gebruik, vervuiling en de gewenste uitstraling van de auto.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Stoelen en bekleding</div>
          <p class="card__text">
            Meer aandacht voor zichtbare vervuiling, gebruikssporen, stoffige bekleding
            en de algemene nette uitstraling van het interieur.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Dashboard en details</div>
          <p class="card__text">
            Contactpunten, kunststof delen, stuur, middenconsole, ventilatieroosters
            en detailwerk worden netjes meegenomen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Ramen en afwerking</div>
          <p class="card__text">
            Schone ramen en een verzorgde afwerking maken het verschil in de totale beleving
            van het interieur.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="dieptereiniging">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Dieptereiniging van het interieur</h2>
      <p class="p section-intro">
        Bij auto’s die intensief gebruikt zijn, kan een dieptereiniging veel verschil maken.
        Denk aan vervuilde stoelen, vlekken in de bekleding, stofophoping, zand in naden,
        een minder frisse geur of een kofferbak die intensief is gebruikt.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Hemel en zijpanelen</div>
          <p class="card__text">
            Waar nodig nemen wij ook hemel, stijlen en zijpanelen mee voor een completer en netter resultaat.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Kofferbak en matten</div>
          <p class="card__text">
            Ook de kofferbakruimte en vloermatten kunnen netjes worden meegenomen in de behandeling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Frissere totaalindruk</div>
          <p class="card__text">
            Het doel is een interieur dat niet alleen schoon oogt, maar ook frisser, rustiger
            en verzorgder aanvoelt.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="voor-wie-interessant">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Voor wie is interieurreiniging interessant?</h2>
      <p class="p section-intro">
        Een interieurbehandeling is interessant voor zowel particuliere als zakelijke rijders,
        maar ook voor voertuigen die verkocht, ingeruild of afgeleverd moeten worden.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Particulieren</div>
          <p class="card__text">
            Voor mensen die weer in een frisse, nette en verzorgde auto willen rijden.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Zakelijke rijders</div>
          <p class="card__text">
            Voor auto’s die representatief moeten blijven richting klanten, relaties of dagelijks gebruik.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Verkoop en aflevering</div>
          <p class="card__text">
            Voor voertuigen die beter gepresenteerd moeten worden bij verkoop, inruil of aflevering.
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
  <a class="btn btn--dark" href="/auto-laten-poetsen-zaandam">Auto poetsen Zaandam</a>
  <a class="btn btn--dark" href="/auto-laten-poetsen-haarlem">Auto poetsen Haarlem</a>
  <a class="btn btn--dark" href="/auto-laten-poetsen-alkmaar">Auto poetsen Alkmaar</a>
  <a class="btn btn--dark" href="/auto-laten-poetsen-zwanenburg">Auto poetsen Zwanenburg</a>
  <a class="btn btn--dark" href="/interieur-reinigen-auto">Interieur reinigen</a>
  <a class="btn btn--dark" href="/lakcorrectie-auto">Lakcorrectie auto</a>
  <a class="btn btn--dark" href="/koplampen-polijsten">Koplampen polijsten</a>
  <a class="btn btn--dark" href="/auto-showroom-klaarmaken">Showroomklaar maken</a>
</div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection