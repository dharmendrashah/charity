{{--start--}}
@extends('layouts.app')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h2 class="mb-3 bread">Services</h2>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

     <section class="services-section py-5 py-md-0">
    <div class="container">
      <div class="row no-gutters d-flex">
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 text-center services d-block">
            <div class="icon"><span class="flaticon-charity"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Help &amp; Support</h3>
              <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 text-center services active d-block">
            <div class="icon"><span class="flaticon-adoption"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Adoption</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 text-center services d-block">
            <div class="icon"><span class="flaticon-volunteer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Volunteering</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 text-center services d-block">
            <div class="icon"><span class="flaticon-open-book"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Education</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('parcels.donation')

      <section class="ftco-section ftco-vol img" style="background-image: url(images/bg_3.jpg);">
          <div class="overlay"></div>
          <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <h2 class="mb-0"><a href="#">Become a Volunteer</a></h2>
        </div>
      </div>
      </div>
      </section>

      <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center intro">
          <div class="col-md-8 text-center">
              <h1 class="heading">Sponsorship <span>Scheme,</span> <span>Individual</span> and Corporate Entities Undertake</h1>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          </div>
      </div>
          </div>
      </section>
@endsection
{{--end--}}
