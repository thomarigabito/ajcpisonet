<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJC-Homepage</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Roboto", serif;
        }

        h1,
        h2,
        h3,
        h4,
        p {
            background: transparent;
            font-weight: 500;
            pointer-events: none;
        }
        .head {
            width: 100%;
            height: 50vh;
            padding: 55px 0;
            background-image: linear-gradient(rgba(218, 194, 178, 0.719), rgba(111, 78, 82, 0.259)), url(./assets/head.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            color: #fefefe
        }

        .Fiber_Experience {
            background: #e35b53;
            color: #FEFEFE;
            padding: 40px 0;
            font-weight: 600;

        }

        .bundle {
            display: table-cell;
            vertical-align: right;
            width: 4rem;
        }

        .fa-signal,
        .fa-film,
        .fa-wifi {
            font-size: 25px;
        }

        .text {
            font-size: 22px;
            color: #FEFEFE;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .text_title {
            padding: 0;
            background: rgba(226, 225, 223, 0.56);
        }

        .chat {
            background-color: #F8EFE6;
        }

        .support {
            background-color: #F3EED8;
        }

        .plan {
            width: 100%;
            height: 270px;
            padding-top: 40px;
            background: linear-gradient(rgba(111, 78, 82, 0.259), rgba(218, 194, 178, 0.719)), url(./assets/familyinternet.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .mbps {
            font-size: 32px;
            color: #fefefe;
        }

        .p_mbps {
            color: #fefefe;
        }

        .center_bundle {
            border-right: 1px #fefefe solid;
            border-left: 1px #fefefe solid;
        }

        @media screen and (max-width: 768px) {
            .center_bundle {
                border-right: none;
                border-left: none;
                border-top: 1px #fefefe solid;
                border-bottom: 1px #fefefe solid;
            }
        }

        .faq {
            background: rgba(232, 118, 118, 0.589);
            width: 100%
        }

        .accordion-button {
            background: transparent;
            outline: none;
            border-radius: 0;
            border: none;
        }

        .accordion-item {
            background: transparent;
            border: none;
            border-bottom: 1px #333 solid;
            outline: none;
            border-radius: 0;
        }

        .accordion-button:focus {
            background: transparent;
            box-shadow: none
        }

        .accordion-button:active {
            background: transparent;
            box-shadow: none;
        }
    </style>

</head>
<body>
@extends('mainlayout')
@section('title', 'AJC-Homepage')
@section('content')
        <div class="head container-fluid px-5">

        <h3 style="font-size:35px;" class="pt-5">A Greater Life Together, at Home</h3>

        <p>A Greater Life Together, at Home
            Get the whole family connected with the greatest deal.</p>


    </div>


    <div class="container-fluid Fiber_Experience px-5 ">
        <h1 class="">Elevate Your Fiber Experience at AJC Internet</h1>
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
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href='{{route('promos')}}'
                    class="btn btn-light rounded-5 text-uppercase plan_btn">View Plans</a></div>
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href='{{route('applynow')}}'
                    class="btn btn-light rounded-5 text-uppercase plan_btn">Apply Plan</a></div>
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href=''
                    class="btn btn-light rounded-5 text-uppercase plan_btn">Upgrade Plan</a></div>
        </div>
    </div>

    <div class="container-fluid plan">
        <div class="row ">
            <div class="row">
                <div class="col col-md-2"><span></span></div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">200 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">400 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>
            <div class="row">
                <div class="col col-md-2"><span></span></div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">600 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">1000 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>
        </div>
    </div>

      </div>
    <div class="container-fluid">
        <h1 class="col-8 text-center align-items-center m-auto p-2  ">We’ve got you covered with reliable internet that’s
            right for your home.</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 p-5 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/productivity.png">
                <h4>Be more productive than ever</h4>
                <p>with faster speeds that Fiber Unli can provide.</p>
            </div>
            <div class="col-12 col-md-4 p-5 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/stream.png">
                <h4>There’s no limit!</h4>
                <p>Stream to your heart’s content for as low as P899!</p>
            </div>
            <div class="col-12 col-md-4 p-5 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/internet.png">
                <h4>Win more rounds with AUJ Internet</h4>
            </div>
        </div>
    </div>




    <h1 class="col text-center mb-0 p-5 text_title ">We’re here to help you.</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 py-5 text-center chat">
                <h1 style="font-size:32px; font-weight:700;">Chat with Us !</h1>
                <p>Use our AJC Pisonet FB Messenger for quick and easy assistance.</p>
                <div class="py-5"><button class="btn btn-outline-dark rounded-2"><i class="fa-solid fa-comments btnicon px-1"></i>UJC
                    Chatbot</button></div>
            </div>
            <div class="col-12 col-md-6 py-5  text-center support">
                <h1 style="font-size:32px; font-weight:700;">Support</h1>
                <p>We’ll find the best solution for you.</p>
                <div class="py-5">
                    <button class="btn btn-outline-dark rounded-2 py-2"><i class="fa-solid fa-circle-question btnicon px-1"></i>Go to
                    Support</button>
                </div>

            </div>
        </div>
    </div>



    <div class="container-fluid faq py-5 px-5">
        <h3>FAQ</h3>
        <div class="row accordion" id="accordionFAQ">
            <div class="col-12 col-sm-10 col-md-10">
                <div class="accordion-item col">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What are included in the AJC Internet plans?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            All our plan offers come with free WiFi modem (DSL, Fibre and LTE bundled plans) and monthly
                            volume allowance. Plans starting at 1299 and above also have a free landline with unlimited
                            calls to any Globe or TM numbers, and 6-month access to Amazon Prime Video.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed accordion-button-fucos-box-shadow:none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is monthly data allowance?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            It's the amount of data that you can use according to the broadband plan you subscribed to. Your
                            allowance is measured in gigabytes (GB) and is used up based on how much data your internet
                            activities consume.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed accordion-button-fucos-box-shadow:none " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do you apply the Fair Use Policy to your broadband service?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Globe At Home was designed to provide you consistently fast and reliable broadband service for a
                            steady browsing experience in the convenience of your home. It lets you stream data and download
                            large files, but if you use this service other than its intent as mentioned, you may experience
                            slow browsing.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>

