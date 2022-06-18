@extends('layout.main')

@section('page')
  <div class="home-btn d-none d-sm-block">
    <a href="https://alaminpuloerang.sch.id" class="text-dark"><i class="fas fa-home h2"></i></a>
    <a href="/administrator" class="text-dark ms-2"><i class="fas fa-power-off h2"></i></a>
  </div>

  @if ($time->waktu == 1)
    @include('pages.open-page.index')
  @else
    @include('pages.close-page.index')
  @endif
  
@endsection