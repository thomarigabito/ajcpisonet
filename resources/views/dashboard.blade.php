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
                            <h3 style="width: 55%;"  class="pt-5 texts">A Greater Life Together, at Home</h3>
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


        <div class="py-12">
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 align-items-end">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-lg-8 col-md-6 ">Hello</div>
                                <div class="col-12 col-lg-4 col-md-6 bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                                    <div class="logobill">
                                        <img src="/assets/agclogo.png" alt="BillLogo" width="80px" height="40px" >
                                    </div>
                                    <h6 class="text-center uppercase p-0 m-0">
                                        Statement of account
                                    </h6>
                                    <p class="p-0 m-0 text-center" style="font-size: 10px; font-style:italic">Zone 7, Punta, Carles, Iloilo 5019 VAT REG TIN:000012120000</p>
                                    <div class="responsive-table">
                                        <table class="table table-bordered table-sm " style="font-size: 12px">
                                            <tr>
                                                <td>Name</td>
                                                <td>{{$fullname}}</td>
                                            </tr>
                                            <tr>
                                                <td>Account #</td>
                                                <td>{{$accountnumber}}</td>
                                            </tr>
                                            <tr>
                                                <td>Bill Date</td>
                                                <td>{{date('01-'.'M'.'-'.'Y')}}</td>
                                            </tr>
                                            <tr class="text-nowrap">
                                                <td class="bg-danger text-light">Bill Due Date</td>
                                                <td class="bg-danger text-light">{{date('30-'.'M'.'-'.'Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount Due</td>
                                                <td>&#8369; {{$january+$febuary+$march+$april}}.00</td>
                                            </tr>
                                            <tr style="border:1px solid white" class="py-4">
                                                <td style="border:none">
                                                  
                                                </td>
                                                <td style="border:none"></td>
                                            </tr>
                                            <tr style="border:transparent" >
                                                <td style="border:none" class="text-nowrap">
                                                    SUMMARY OF CHARGES AND CREDITS
                                                </td>
                                                <td style="border:none; width:50%"></td>
                                            </tr>

                                            
                                            {{-- <tr>
                                                <td style="border:none; ont-size: 12px" class="p-0 m-0">
                                                        SUMMARY OF CHARGES AND CREDITS
                                                </td>
                                                <td style="border:none"></td>
                                            </tr> --}}
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- <div >
                            Billing
                        </div>
                        <div>{{$accountnumber}}</div>
                        <div>{{$fullname}}</div>
                        <div>{{$january}}</div>
                        <div>{{$febuary}}</div>
                        <div>{{$march}}</div>
                    </div> --}}
                </div>
            </div>
        </div>



    @endif

    {{-- @include('footer') --}}
</x-app-layout>
