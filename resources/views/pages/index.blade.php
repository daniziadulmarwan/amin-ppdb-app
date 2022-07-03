@extends('layout.main')

@section('page')
  <section class="section hero-section bg-ico-hero" id="home" style="height: 900px;">
    <div class="bg-overlay bg-primary"></div>
  </section>

  <div style="margin-top: -900px;">
    <div class="home-btn d-none d-sm-block">
      <a href="https://alaminpuloerang.sch.id" class="text-dark"><i class="fas fa-home h2"></i></a>
      <a href="/administrator" class="text-dark ms-2"><i class="fas fa-power-off h2"></i></a>
    </div>
    @if ($time->waktu == 1)
      @include('pages.open-page.index')
    @else
      @include('pages.close-page.index')
    @endif
  </div>
  
@endsection