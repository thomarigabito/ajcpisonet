@extends('mainlayout')
@section('title', 'AJC-Promos')
@section('content')

<div class="hero-section2">
  <div class="container">
    <h1 class="text-white" id="texts">Get your free install today and enjoy 2 months of internet on the house!</h1>
    <h1 class="mt-2" id="paragraph">Elevate your home experience with fast, reliable plans.</h1>
  </div>
  <button type="button"  class="btn button-apply-now"><a href='{{ route('applynow') }}'>Apply Now</a></button>
</div>
<section class="support-section pt-5 pb-5">
  <div class="container" data-scroll-into-view="active">
    <div class="row mb-4">
        <div class="col-sm-12">
            <h1 class="text-center fw-bold fs-1">Find the Best Broadband Plan for You</h1>
            <p class="text-center mt-3 fw-normal">Our home Internet is fast, stable and unlimited. Find your perfect match.</p>
        </div>
    </div>
  </div>
  <div class="container pt-5">
    <div class="row gx-3 justify-content-between overflow-auto scrollbar style-7">
      <div class="promo-card col-sm-6 col-lg-3">
        <div class="card h-100">
          <div class=" bg-none border-0 rounded-0 mt-5 mx-4">
            <h4 class="mb-0" style="font-size:24px;">20Mbps</h4>
            <h4 class="mb-0" style="font-size: 24px;">
                <span class="text-pink-500">PHP899</span>/month
            </h4>
            <div class="mb-10 pt-5">
            <small class="fw-bold">Effortless Internet Access for Your Daily Needs</small>
            <p class="fw-light opo">•<small> Dive into all your online passions effortlessly.</small></p>
            <p class="fw-light opo">•<small> Designed for small households to enjoy seamless access to Facebook, YouTube, Instagram, and Netflix.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3">
        <div class="card h-100">
          <div class=" bg-none border-0 rounded-0 mt-5 mx-4">
            <h4 class="mb-0" style="font-size:24px;">30Mbps</h4>
            <h4 class="mb-0" style="font-size: 24px;">
                <span class="text-pink-500">PHP1000</span>/month
            </h4>
            <div class="mb-10 pt-5">
            <small class="fw-bold">Effortless Internet Access for Your Daily Needs</small>
            <p class="fw-light opo">•<small> Seamlessly indulge in all your online activities</small></p>
            <p class="fw-light opo">•<small> Specially designed for small households, ensuring steady access to various online activities. Enjoy smooth browsing and streaming to fulfill your daily entertainment and productivity needs.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="promo-card card2 col-sm-6 col-lg-3">
        <div class="best-seller-2 py-2">
                <p class="text-18 text-white text-center pb-0 mb-0">BEST SELLER</p>
            </div>
        <div class="card2">
          <div class=" bg-none border-0 rounded-0 mt-5 mx-4">
            <h4 class="mb-0" style="font-size:24px;">50Mbps</h4>
            <h4 class="mb-0" style="font-size: 24px;">
                <span class="text-pink-500">PHP1300</span>/month
            </h4>
            <div class="mb-10 pt-5">
            <small class="fw-bold">Premium Internet Experience for Enhanced Connectivity</small>
            <p class="fw-light opo">•<small> Engage in all your online passions effortlessly.</small></p>
            <p class="fw-light opo">•<small> Tailored for small households, guaranteeing consistent access to a diverse range of online activities. Enjoy seamless browsing and streaming for all your daily entertainment and productivity needs.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3">
        <div class="card h-100">
          <div class=" bg-none border-0 rounded-0 mt-5 mx-4">
            <h4 class="mb-0" style="font-size:24px;">100Mbps</h4>
            <h4 class="mb-0" style="font-size: 24px;">
                <span class="text-pink-500">PHP1500</span>/month
            </h4>
            <div class="mb-10 pt-5">
            <small class="fw-bold">High-Performance Streaming and Gaming</small>
            <p class="fw-light opo">•<small> Dive into your online world effortlessly with lightning-fast speeds.</small></p>
            <p class="fw-light opo">•<small> Designed for households craving unparalleled access to a wide range of digital content, ensuring seamless streaming, rapid downloads, and smooth browsing for all your online needs.</small></p>
            </div>
          </div>
        </div>
      </div>
</section>

<div class="hero-section3">
    <div class="container">

        <div class="row col-sm-5">
            <img src="./assets/ads2.png" alt="ads2" class="w-100">
        </div>
    </div>
</div>

<div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 p-2 p-md-3 p-lg-4 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/productivity.png">
                <h4>Be more productive than ever</h4>
                <p>with faster speeds that Fiber Unli can provide.</p>
            </div>
            <div class="col-12 col-md-4 p-2 p-md-3 p-lg-4 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/stream.png">
                <h4>There’s no limit!</h4>
                <p>Stream to your heart’s content for as low as P899!</p>
            </div>
            <div class="col-12 col-md-4 p-2 p-md-3 p-lg-4 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/internet.png">
                <h4>Win more rounds with AJC Internet</h4>
            </div>
        </div>
    </div>

<div class="accordion">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordion1">
        <label for="accordion1" class="accordion-item-title"><span class="icon"></span>What is AJC PISONET</label>
        <div class="accordion-item-desc">AJC PISONET is a service provider offering affordable and reliable internet access to customers, primarily through PISONET setups.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion2">
        <label for="accordion2" class="accordion-item-title"><span class="icon"></span>How does AJC PISONET work?</label>
        <div class="accordion-item-desc"> AJC PISONET operates on a pay-per-use basis, where customers pay for internet access by inserting coins or tokens into the PISONET machines. Users can then access the internet for a predetermined amount of time based on their payment.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion3">
        <label for="accordion3" class="accordion-item-title"><span class="icon"></span>How do I report issues or seek assistance with AJC PISONET services?</label>
        <div class="accordion-item-desc"> For any issues or assistance regarding AJC PISONET services, you can contact our customer support hotline or visit our official Facebook page troubleshooting guides. Additionally, on-site support may be available at certain AJC PISONET locations.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion4">
        <label for="accordion4" class="accordion-item-title"><span class="icon"></span>Is there any current promotion available?</label>
        <div class="accordion-item-desc">Yes! AJC PISONET is currently offering a special promotion where you can get your free installation today and enjoy 2 months of internet on the house! Contact us for more details and to take advantage of this offer.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion5">
        <label for="accordion5" class="accordion-item-title"><span class="icon"></span>Can I use AJC PISONET for online gaming?</label>
        <div class="accordion-item-desc">Yes, AJC PISONET is suitable for online gaming with its low-latency connections and gaming-friendly services. Many gamers prefer AJC PISONET for their gaming sessions due to its reliable connectivity and affordable rates.</div>
    </div>
    <div class="upcontainer">
        <h5 class="snippetTitle">Not what you're looking for?</h5>
    </div>
</div>






@endsection
