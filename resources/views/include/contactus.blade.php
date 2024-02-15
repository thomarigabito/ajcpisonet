@extends('mainlayout')
@section('title', 'AJC-ContactUs')
@section('content')
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .contact {
            width: 100%;
            height: 50vh;
            background-image: linear-gradient(rgba(218, 194, 178, 0.719), rgba(111, 78, 82, 0.259)), url(./assets/contact.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            color: #fefefe;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .contact_text {
            font-size: 50px;
            font-weight: 700;
            letter-spacing: 2px;
            pointer-events: none;
        }

        .fa-location-dot,
        .fa-phone,
        .fa-comment-dots {
            font-size: 21px;
            border-radius: 50px;
            padding: 15px;
            background: #999;
        }

        .fa-brands{
            justify-items:space-between;
            font-size: 35px;
            padding: 15px;
        }
    </style>



    <body>
        <!-- Your layout content here -->
        @yield('content')
        <div class="col d-flex contact">
            <h1 class="contact_text text-center align-content-center text-uppercase">Keep in touch with us</h1>
            <div class="container text-center">
                <div class="row">
                    <div class="col col-md-4">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="col col-md-4">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="col-12 col-md-4">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid px-5 py-5 min-h-100 bg-gray-100">
            <div class="row ">
                <div class="col-12 col-md-6 w-full sm:max-w-md px-6 bg-white py-4 shadow-md overflow-hidden sm:rounded-lg">
                    <form action="" method="post" class>
                        @csrf
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" id=""
                                    aria-describedby="helpId" placeholder="Name" />
                                <small id="helpId" class="form-text text-muted">Complete Name</small>
                            </div>

                            <input type="email" class="form-control" name="email" id=""
                                aria-describedby="emailHelpId" placeholder="Email" required />
                            <small id="emailHelpId" class="form-text text-muted">Email Required</small>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" id="" rows="7" placeholder="Message"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <h3>Message Us</h3>
                    <p>Our team is dedicated to providing you with the best support and ensuring your experience with us is
                        top-notch. Don't hesitate to drop us a message—we're here for you!</p>
                        <div class="row">
                            <div class="col">
                            <a href="/"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="/"><i class="fa-brands fa-twitter"></i></a>
                            <a href="/"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                     </div>


                </div>
            </div>
        </div>


        <div class="container-fluid faq py-5 px-5">
            <h3>FAQ</h3>
            <div class="row accordion" id="accordionExample">
                <div class="col-12 col-sm-10 col-md-10">
                    <div class="accordion-item col">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are included in the AJC Internet plans?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                All our plan offers come with free WiFi modem (DSL, Fibre and LTE bundled plans) and monthly
                                volume allowance. Plans starting at 1299 and above also have a free landline with unlimited
                                calls to any Globe or TM numbers, and 6-month access to Amazon Prime Video.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item col">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is monthly data allowance?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It's the amount of data that you can use according to the broadband plan you subscribed to.
                                Your
                                allowance is measured in gigabytes (GB) and is used up based on how much data your internet
                                activities consume.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item col">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do you apply the Fair Use Policy to your broadband service?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Globe At Home was designed to provide you consistently fast and reliable broadband service
                                for a
                                steady browsing experience in the convenience of your home. It lets you stream data and
                                download
                                large files, but if you use this service other than its intent as mentioned, you may
                                experience
                                slow browsing.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
