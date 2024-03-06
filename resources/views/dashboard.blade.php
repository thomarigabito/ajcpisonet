<x-app-layout>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            @if (Auth::user()->accountnumber == null)
                {{ __('No Account Linked') }}
            @else
                {{ __('Dashboard') }}
            @endif
        </h2>
    </x-slot>

    @if (Auth::user()->accountnumber == null)
        <div class="main">
            <div class="container mt-3">
                <div class="row flex justify-content-center mt-5 ">
                    <div class="col-12 col-sm-12  col-lg-8 ">
                        <div class="container">
                            <h3 style="width: 55%;" class="pt-5 texts">A Greater Life Together, at Home</h3>
                            <p class="paragraph fs-sm-6 ">A Greater Life Together, at Home
                                Get the whole family connected with the greatest deal.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4  p-3 border rounded shadow link my-auto py-auto">
                        <h4 class="text-center">Please link your account</h4>
                        <form action="{{ route('linkaccount') }}" method="POST" class="my-4">
                            @csrf
                            <div class="my-3">
                                <label>Enter your account number:</label>
                                <input type="text" name="accountnumber" class="form-control" required />
                                <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />
                                @error('accountnumber')
                                    <span class="text-danger font-medium text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-primary">Link Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- User account linked --}}
    @else
        <div class="pt-12 ">
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8 mb-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 align-items-end">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-lg-8 col-md-6 ">
                                    <!-- Carousel -->




                                </div>
                                <div class="col-12 col-lg-4 col-md-6 bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                                    <div id="soa">
                                    <div class="logobill">
                                        <img src="/assets/agclogo.png" alt="BillLogo" width="80px" height="40px">
                                    </div>
                                    <h6 class="text-center uppercase p-0 m-0">
                                        Statement of account
                                    </h6>
                                    <p class="p-0 m-0 text-center" style="font-size: 10px; font-style:italic">Zone 7,
                                        Punta, Carles, Iloilo 5019 VAT REG TIN:000012120000</p>
                                    <div  class="soa responsive-table">
                                        <table class="table table-bordered table-sm " style="font-size: 12px">
                                            <tr>
                                                <td>Name</td>
                                                <td class="text-nowrap">{{ $fullname }}</td>
                                            </tr>
                                            <tr>
                                                <td>Account #</td>
                                                <td>{{ $accountnumber }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bill Date</td>
                                                <td>{{ date('01-' . 'M' . '-' . 'Y') }}</td>
                                            </tr>
                                            <tr class="text-nowrap">
                                                <td id="due" class="bg-danger text-light">Bill Due Date</td>
                                                <td class="bg-danger text-light">{{ date('30-' . 'M' . '-' . 'Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount Due</td>
                                                <td>&#8369; {{ $total }}.00</td>
                                            </tr>
                                            <tr style="border:1px solid white" class="py-4">
                                                <td style="border:none">

                                                </td>
                                                <td style="border:none"></td>
                                            </tr>
                                            <tr style="border:transparent">
                                                <td style="border:none; border-bottom:1px solid black;"
                                                    class="text-nowrap">
                                                    SUMMARY OF CHARGES AND CREDITS
                                                </td>
                                                <td style="border:none; border-bottom:1px solid black; width:50%"></td>
                                            </tr>
                                            <tr>
                                                <td style="border:1px solid white">Past Due Amount</td>
                                                @if (date('m') == 1)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $january }}.00</td>
                                                @endif
                                                @if (date('m') == 2)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $febuary }}.00</td>
                                                @endif
                                                @if (date('m') == 3)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $march }}.00</td>
                                                @endif
                                                @if (date('m') == 4)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $april }}.00</td>
                                                @endif
                                                @if (date('m') == 5)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $may }}.00</td>
                                                @endif
                                                @if (date('m') == 6)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $june }}.00</td>
                                                @endif
                                                @if (date('m') == 7)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $july }}.00</td>
                                                @endif
                                                @if (date('m') == 8)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $august }}.00</td>
                                                @endif
                                                @if (date('m') == 9)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $september }}.00</td>
                                                @endif
                                                @if (date('m') == 10)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $october }}.00</td>
                                                @endif
                                                @if (date('m') == 11)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $november }}.00</td>
                                                @endif
                                                @if (date('m') == 12)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $total - $december }}.00</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td style="border:1px solid white">Current Amount</td>
                                                @if (date('m') == 1)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $january }}.00</td>
                                                @endif
                                                @if (date('m') == 2)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $febuary }}.00</td>
                                                @endif
                                                @if (date('m') == 3)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $march }}.00</td>
                                                @endif
                                                @if (date('m') == 4)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $april }}.00</td>
                                                @endif
                                                @if (date('m') == 5)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $may }}.00</td>
                                                @endif
                                                @if (date('m') == 6)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $june }}.00</td>
                                                @endif
                                                @if (date('m') == 7)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $july }}.00</td>
                                                @endif
                                                @if (date('m') == 8)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $august }}.00</td>
                                                @endif
                                                @if (date('m') == 9)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $september }}.00</td>
                                                @endif
                                                @if (date('m') == 10)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $october }}.00</td>
                                                @endif
                                                @if (date('m') == 11)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $november }}.00</td>
                                                @endif
                                                @if (date('m') == 12)
                                                    <td style="border:none; border-bottom:1px solid black;"
                                                        class="text-nowrap">&#8369; {{ $december }}.00</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td style="border:1px solid white">Total Amount Due</td>
                                                <td style="border:none; border-bottom:1px solid black;"
                                                    class="text-nowrap">&#8369; {{ $total }}.00</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                    <div class="mx-2 py-2 flex">
                                        <svg onclick="printTable('soa')" class="cursor-pointer" width="16"
                                            height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" id="print">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                        </svg> <span onclick="printTable('soa')" for="print"
                                            class="px-1 mb-1 cursor-pointer" style="font-size: 12px">Print Reciept</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif


    <script>
        function printTable(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            // document.body.innerHTML = restorpage;
            window.location.reload();
        }
    </script>
    @include('footer')
</x-app-layout>
