<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AJC Pisonet') }}</title>
    <link rel="icon" type="image/x-icon" href="/assets/agclogo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Font-awesome-icons CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        .logo{
                width: 120px;
            }
        td{
            text-transform: capitalize;
        }



         /* Query here */
         @media screen and (max-width:700px){
                .logo{
                    width: 80px;
                 }
                 .table-responsive{
                    font-size: 10px !important;
                 }
                 .edit, .delete{
                    width: 8 !important;
                    height: 8 !important;
                 }
                }

        .main {
            width: 100%;
            height: 85vh;
            min-height: 100vh;
            background-image: linear-gradient(rgba(218, 194, 178, 0.5), rgba(111, 78, 82, 0.2)), url(./assets/head.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            color: #fefefe;
            padding: 10%;
        }

        .texts{
            font-size: 45px;
            font-weight: 600;
        }
        .paragraph{
            font-size: 19px;
            font-weight: 500;
            word-wrap: break-word;
        }

        .link {
            background: rgba(255, 255, 255, 0.001);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(7.5px);
            -webkit-backdrop-filter: blur(7.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            height: 250px;
            color:black;
        }
        @media (max-width:768px) {
            .main{
                padding: 0 1%;
                height: fit-content;
            }
        }
        /* Footer */
        footer {
            position: fixed;
            bottom: 0;
        }

        @media (max-height:1440px) {
            footer {
                position: static;
            }

            header {
                padding-top: 40px;
            }
        }

        .main-footer {
            background-color: #e4e3e3;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;

        }

        .main-footer .footer-left,
        .main-footer .footer-center,
        .main-footer .footer-right {
            display: inline-block;
            vertical-align: top;
        }


        .main-footer .footer-left {
            width: 30%;
        }

        .main-footer h3 {
            color: #594A4E;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }


        .main-footer h3 span {
            color: #f0525f;
        }


        .main-footer .footer-links {
            color: #594A4E;
            margin: 20px 0 12px;
        }

        .main-footer .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .main-footer .footer-company-name {
            color: #594A4E;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }


        .main-footer .footer-center {
            width: 35%;
        }

        .main-footer .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .mainf-footer .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .main-footer .footer-center p {
            display: inline-block;
            color: #594A4E;
            vertical-align: middle;
            margin: 0;
        }

        .main-footer .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .main-footer .footer-center p a {
            color: #594A4E;
            text-decoration: none;
        }



        .main-footer .footer-right {
            width: 30%;
        }

        .main-footer .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .main-footer .footer-company-about span {
            display: block;
            color: #594A4E;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .main-footer .footer-icons {
            margin-top: 25px;
        }

        .main-footer .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }

        .main-footer .footer-icons a:hover {
            background-color: #3F71EA;
        }

        .footer-links a:hover {
            color: #3F71EA;
        }

        @media (max-width: 880px) {

            .main-footer .footer-left,
            .main-footer .footer-center,
            .main-footer .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .main-footer .footer-center i {
                margin-left: 0;
            }
        }

        /* Query here */
        @media screen and (max-width:700px) {
            .logo {
                width: 80px;
            }

            .table-responsive {
                font-size: 10px !important;
            }

            .edit,
            .delete {
                width: 8 !important;
                height: 8 !important;
            }

        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-200">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>

        <script>
        function totalBill(){
            var jan = document.getElementById('january').value;
            var feb = document.getElementById('february').value;
            var mar = document.getElementById('march').value;
            var april = document.getElementById('april').value;
            var may = document.getElementById('may').value;
            var june = document.getElementById('june').value;
            var july = document.getElementById('july').value;
            var august = document.getElementById('august').value;
            var sept = document.getElementById('september').value;
            var oct = document.getElementById('october').value;
            var nov = document.getElementById('november').value;
            var dec = document.getElementById('december').value;

            var total = jan + feb + mar + april + may + june + july + august + sept + oct + nov + dec;

            console.log(total);
        }
    </script>
    


</body>

</html>
