@extends('layouts.app')

@section('title', $albumTitle . ' projecten in Zaandam | APCZ')
@section('meta_description', $albumTitle . ' projecten in Zaandam en Zaanstad bekijken? Bekijk echte resultaten van Auto Poets Centrale Zaanstad op het gebied van ' . strtolower($albumTitle) . ', auto detailing, showroomklaar maken en professionele autoverzorging.')
@section('canonical', url()->current())

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Projecten • Album • Resultaten</div>
      <h1 class="page-hero__title">{{ $albumTitle }} projecten in Zaandam</h1>
      <p class="page-hero__lead">
        {{ $albumDescription }}
        Nieuwe foto’s voegen wij doorlopend toe. Staat jouw type klus er nog niet tussen,
        neem dan gerust contact met ons op.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <div style="width:120px; height:4px; margin:0 auto 6px; border-radius:999px; background:linear-gradient(90deg,#f4c400,#ffe27a,#fff4cb);"></div>
          <p class="p section-intro">
            In dit album zie je voorbeelden van eerder uitgevoerde werkzaamheden binnen
            <b>{{ $albumTitle }}</b>. Zo krijg je een beter beeld van de behandeling,
            de afwerking en het resultaat dat wij nastreven.
          </p>
        </div>
      </div>
    </div>

    @if(!empty($images) && count($images) > 0)
      <div class="grid-3 reveal" style="margin-top:22px;">
        @foreach($images as $src)
          <div class="card">
            <div class="card__media">
              <img src="{{ $src }}" alt="{{ $albumTitle }} projectfoto van Auto Poets Centrale Zaanstad" loading="lazy">
            </div>
          </div>
        @endforeach
      </div>

      <div class="card reveal" style="margin-top:24px;">
        <div class="card__body">
          <div class="center stack">
            <h2 class="h2" style="margin-bottom:0;">Ook een vergelijkbaar project?</h2>
            <p class="p section-intro">
              Wil je jouw voertuig op vergelijkbare wijze laten behandelen, opfrissen of verkoopklaar laten maken?
              Neem gerust contact met ons op, dan kijken we samen naar de juiste aanpak.
            </p>
            <div class="action-row action-row--center" style="margin-top:8px;">
              <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
              <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="card reveal" style="margin-top:22px;">
        <div class="card__body">
          <div class="center stack">
            <h2 class="h2" style="margin-bottom:0;">Nog geen foto’s zichtbaar</h2>
            <p class="p section-intro">
              Voor dit album zijn op dit moment nog geen projectfoto’s beschikbaar.
            </p>
            <div class="action-row action-row--center" style="margin-top:8px;">
              <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
            </div>
          </div>
        </div>
      </div>
    @endif

  </div>
</section>

@endsection