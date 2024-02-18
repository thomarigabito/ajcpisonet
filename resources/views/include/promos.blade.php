@extends('mainlayout')
@section('title', 'AJC-Promos')
@section('content')
<div class="hero-section2">
  <div class="container">
    <h1 class="text-white" id="texts">Get your free install today and enjoy 2 months of internet on the house!</h1>
    <h1 class="mt-5" id="paragraph">Elevate your home experience with fast, reliable plans.</h1>
  </div>
</div>
<section class="support-section pt-5 pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <div class="exclusive-deals" id="exclusive-deals">
          <div class="support-top-details-text text-center text-md-start">
            <h2 class="fw-bolder fs-1 w-auto">Here are the exclusive deals tailored specifically for you.</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row gx-3 justify-content-between overflow-auto scrollbar style-7">
      <div class="promo-card col-sm-6 col-lg-3 mt-5">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around shadow rounded">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">20Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 899</p>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3 mt-5">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">30Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 1000</p>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3 mt-5">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">50Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 1300</p>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3 mt-5">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">100Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 1500</p>
          </div>
        </div>
      </div>
    </div>
</section>

<div class="hero-section3">
    <div class="container">
        <div class="row col-sm-5 rounded shadow-lg">
            <img src="./assets/ads.png" alt="ads">
        </div>
    </div>
</div>



@endsection
