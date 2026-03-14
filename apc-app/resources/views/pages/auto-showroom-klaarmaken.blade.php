@extends('layouts.app')

@section('title', 'Auto showroomklaar maken in Zaandam | Verkoopklaar & presentatie | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto showroomklaar laten maken in Zaandam? Auto Poets Centrale Zaanstad helpt met nette presentatie, interieurreiniging, exterieurverzorging en verkoopklare afwerking.')
@section('meta_keywords', 'auto showroomklaar maken, auto verkoopklaar maken, auto poetsen voor verkoop, detailing zaandam, auto presentatie')
@section('canonical', url('/auto-showroomklaar-maken'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Showroomklaar • Verkoopklaar • Zaandam</div>
      <h1 class="page-hero__title">Auto showroomklaar maken in Zaandam</h1>
      <p class="page-hero__lead">
        Wil je jouw auto showroomklaar of verkoopklaar laten maken? Auto Poets Centrale Zaanstad
        helpt met een verzorgde presentatie van binnen en buiten, zodat jouw voertuig netter,
        frisser en representatiever voor de dag komt.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="showroomklaar-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel showroomklaar maken</h2>
      <p class="p section-intro">
        Een auto die netjes gepresenteerd wordt, verkoopt vaak prettiger en maakt direct een sterkere indruk.
        Daarom helpen wij met het showroomklaar maken van voertuigen voor verkoop, aflevering, inruil en presentatie.
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
          <div class="card__title">Netter van binnen</div>
          <p class="card__text">
            Een schoon interieur geeft direct een frissere en verzorgdere indruk aan potentiële kopers.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Strakker van buiten</div>
          <p class="card__text">
            Een nette buitenzijde met verzorgde afwerking maakt de presentatie veel sterker.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Sterkere eerste indruk</div>
          <p class="card__text">
            Bij verkoop, inruil of aflevering telt uitstraling direct mee in de beleving van de auto.
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
        <h2 class="h2">Nette afwerking voor presentatie en verkoop</h2>
        <p class="p">
          Showroomklaar maken draait om totaalindruk. Het gaat niet alleen om schoon,
          maar om verzorgd, representatief en overtuigend gepresenteerd.
        </p>
        <p class="p">
          Daarom kijken wij naar interieur, exterieur, details en afwerking als één geheel.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Voor verkoop en aflevering</div>
          <div class="usp usp--light"><b>✓</b>Nette totaalpresentatie</div>
          <div class="usp usp--light"><b>✓</b>Ook voor dealers en zakelijke klanten</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto showroomklaar maken in Zaandam door Auto Poets Centrale Zaanstad"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="wat-wordt-aangepakt">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Wat wordt er vaak aangepakt?</h2>
      <p class="p section-intro">
        Afhankelijk van het voertuig en het doel helpen wij met reiniging, afwerking en presentatie
        zodat de auto beter voor de dag komt.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieurverzorging</div>
          <p class="card__text">
            Stoelen, vloeren, dashboard, ramen en contactpunten worden netjes meegenomen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieurafwerking</div>
          <p class="card__text">
            Handwas, velgen, lakbeeld en algemene buitenzijde voor een frissere uitstraling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Presentatie voor verkoop</div>
          <p class="card__text">
            Ideaal wanneer de auto online, in de showroom of bij aflevering netjes moet ogen.
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
          <h2 class="h2" style="margin-bottom:0;">Auto verkoopklaar laten maken?</h2>
          <p class="p section-intro">
            Wil je jouw auto netjes presenteren voor verkoop, inruil of aflevering?
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
