@extends('mainlayout')
@section('title', 'AJC Pisonet')
@section('content')
    <div class="head container-fluid px-5">
        <div class="container">
            <h3 style="width: 55%;" id="texts" class="pt-5 fs-1">A Greater Life Together, at Home</h3>
            <p id="paragraph">A Greater Life Together, at Home
                Get the whole family connected with the greatest deal.</p>
            <button type="button" class="btn
         text-nowrap w-fit" style="background-color: rgb(229, 74, 74)"><a
                    href='{{ route('applynow') }}' class="text-light">Apply Now</a></button>
        </div>
    </div>


    <div class="container-fluid Fiber_Experience px-5 h-70 ">
        <h1 class="" style="font-size:35px;">Elevate Your Fiber Experience at AJC Internet</h1>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 py-5 d-flex">
                <div class="bundle px-1 px-md-2 "><span class="text"><i class="fa-solid fa-wifi"></i></span></div>
                <div>
                    <span class="text text-wrap">Fast & Reliable Unli Plans</span>
                    <p>Get a high-speed fiber connection of up to 1.5 Gbps for all-day streaming, gaming, and working.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 py-5 d-flex center_bundle">
                <div class="bundle px-1 px-md-2 "><span class="text"><i class="fa-solid fa-film"></i></span></div>
                <div><span class="text ">Exclusive Family Bundle</span>
                    <p>Score free access to entertainment, health, and gaming subscriptions to elevate your family’s
                        lifestyle.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 py-5 d-flex ">
                <div class="bundle px-1 px-md-2 "><span class="text"><i class="fa-solid fa-signal"></i></span></div>
                <div><span class="text">Whole Home Connectivity</span>
                    <p>Experience a better browsing experience for the whole family, with our latest devices powered by WiFi
                        6.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href='{{ route('internet') }}'
                    class="btn btn-light rounded-5 text-uppercase plan_btn">View Plans</a></div>
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href='{{ route('applynow') }}'
                    class="btn btn-light rounded-5 text-uppercase plan_btn">Apply Plan</a></div>
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href='{{ route('login') }}'
                    class="btn btn-light rounded-5 text-uppercase plan_btn">Upgrade Plan</a></div>
        </div>
    </div>

    <div class="container-fluid plan">
        <div class="row ">
            <div class="row">
                <div class="col col-md-2"><span></span></div>
                <div class="col-12 col-md-4 px-2 py-5 text-center border-e-2 border-2 m-1 rounded-4 ">
                    <a href="{{ route('20mbps') }}" class="hover\:text-gray-900">
                        <h3 class="mbps hover\:text-gray-900">20 Mbps</h3>
                        <p class="p_mbps">Fiber Unli Plan 899</p>
                    </a>
                </div>

                <div class="col-12 col-md-4 px-2 py-5 text-center border-2 m-1 rounded-4">
                    <a href="{{ route('30mbps') }}">
                        <h3 class="mbps">30 Mbps</h3>
                        <p class="p_mbps">Fiber Unli Plan 1000</p>
                    </a>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>
            <div class="row">
                <div class="col col-md-2"><span></span></div>
                <div class="col-12 col-md-4 px-2 py-5 text-center border-2 m-1 rounded-4">
                    <a href="{{ route('50mbps') }}">
                        <h3 class="mbps">50 Mbps</h3>
                        <p class="p_mbps">Fiber Unli Plan 1300</p>
                    </a>
                </div>
                <div class="col-12 col-md-4 px-2 py-5 text-center border-2 m-1 rounded-4">
                    <a href="{{ route('100mbps') }}">
                        <h3 class="mbps">100 Mbps</h3>
                        <p class="p_mbps">Fiber Unli Plan 1500</p>
                    </a>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid">
        <h1 class="col-8 text-center align-items-center m-auto py-5" style="font-size: 34px; font-weight:700;">We’ve got you
            covered with reliable internet that’s
            right for your home.</h1>
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




    {{-- <h1 class="col text-center mb-0 p-5 text_title fs-1 fw-bold ">We’re here to help you.</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 py-5 text-center chat">
                <h1 style="font-size:32px; font-weight:700;">Chat with Us !</h1>
                <p>Use our AJC Pisonet FB Messenger for quick and easy assistance.</p>
                <div class="py-5"><button class="btn btn-outline-dark rounded-2"><i
                            class="fa-solid fa-comments btnicon px-1"></i>AJC
                        Chatbot</button></div>
            </div>
            <div class="col-12 col-md-6 py-5  text-center support">
                <h1 style="font-size:32px; font-weight:700;">Support</h1>
                <p>We’ll find the best solution for you.</p>
                <div class="py-5">
                    <a href='{{route('contactus')}}'><button class="btn btn-outline-dark rounded-2 py-2"><i
                            class="fa-solid fa-circle-question btnicon px-1"></i>Go to
                        Support</button></a>
                </div>

            </div>
        </div>
    </div> --}}
@endsection
