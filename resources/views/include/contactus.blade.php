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
        @if(session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
         @endif
        <div class="col d-flex contact">
            <h1 class="contact_text text-center align-content-center text-uppercase">Keep in touch with us</h1>
            <div class="container text-center">
                <div class="row">
                    <div class="col-4 col-md-4">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="col-4 col-md-4">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="col-4 col-md-4">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid px-5 py-5 min-h-100 bg-gray-100">
            <div class="row ">
                <div class="col-12 col-md-6 w-full sm:max-w-md px-6 bg-white py-4 shadow-md overflow-hidden sm:rounded-lg">
                    <form action="{{route('sendemailinquire')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="inquire_client_name" id=""
                                    aria-describedby="helpId" placeholder="Name" />
                                <small id="helpId" class="form-text text-muted">Complete Name</small>
                            </div>

                            <input type="email" class="form-control" name="inquire_client_email" id=""
                                aria-describedby="emailHelpId" placeholder="Email" required />
                            <small id="emailHelpId" class="form-text text-muted">Email Required</small>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="inquire_client_message" id="" rows="7" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-outline-dark " type="submit" value="Send Message">Send message</button>
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



@endsection
