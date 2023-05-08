@extends('layouts.default')
@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('Img/dashboard.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
    </div>
  </div>
</div>
<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Tata Cara Penggunaan</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12 wrap-about">
        <div class="text-center">
          <img src="{{ asset('Img/Flowchart.png') }}" class="img-fluid" alt="...">
        </div>
      </div>
    </div>
  </div>
</section>



@section('scripts')

@endsection
@endsection