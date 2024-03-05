<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bill details') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-10xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                   <div class="card">
                    <div class="card-header">
                        <h4 style="text-transform: capitalize">{{$fullname}}
                            <a href="{{route('admindashboard')}}" class="btn btn-primary float-end mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                                </svg>
                            </a>
                            <a href="{{url('clients/'.$client_id.'/billedit')}}" class="btn btn-success float-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                            <a href="{{route('sendemail', [$email, $fullname, $accountnumber])}}"
                            class="btn btn-danger float-end mx-1" onclick="sendEmail()" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-up" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016"/>
                                </svg>
                            </a>
                        </h4>
                        <h6>Account # : {{$accountnumber}}
                        <span class="float-end mx-2" style="font-size: 12px">Note: Put zero(0) for Paid</span>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive max-w-2xl mx-auto">
                            <table  class="table table-bordered table-md table-hover" style="font-size: 14px">

                                    <tr>
                                        <tr>
                                            <td>Plan</td>
                                            <td>{{$plan}}</td>
                                        </tr>

                                        <tr>
                                            @if(date('m')>=1)
                                            <td>Jan</td>
                                            @endif
                                            @if(date('m')>=1)
                                            <td>@if($january === 0)
                                                    Paid
                                                @else
                                                    {{$january}}
                                                @endif
                                            </td>
                                            @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=2)
                                            <td>Feb</td>
                                            @endif
                                            @if(date('m')>=2)
                                            <td>@if($febuary === 0)
                                                Paid
                                            @else
                                                {{$febuary}}
                                            @endif
                                            </td>
                                            @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=3)
                                            <td>Mar</td>
                                            @endif
                                            @if(date('m')>=3)
                                            <td>@if($march === 0)
                                                Paid
                                            @else
                                                {{$march}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                             @if(date('m')>=4)
                                            <td>Apr</td>
                                        @endif
                                        @if(date('m')>=4)
                                            <td>@if($april === 0)
                                                Paid
                                            @else
                                                {{$april}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=5)
                                            <td>May</td>
                                        @endif
                                        @if(date('m')>=5)
                                            <td>@if($may === 0)
                                                Paid
                                            @else
                                                {{$may}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        </tr>
                                            @if(date('m')>=6)
                                            <td>Jun</td>
                                        @endif
                                        @if(date('m')>=6)
                                            <td>@if($june === 0)
                                                Paid
                                            @else
                                                {{$june}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=7)
                                            <td>Jul</td>
                                        @endif
                                        @if(date('m')>=7)
                                            <td>@if($july === 0)
                                                Paid
                                            @else
                                                {{$july}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=8)
                                            <td>Aug</td>
                                        @endif
                                        @if(date('m')>=8)
                                            <td>@if($august === 0)
                                                Paid
                                            @else
                                                {{$august}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=9)
                                            <td>Sep</td>
                                        @endif
                                        @if(date('m')>=9)
                                            <td>@if($september === 0)
                                                Paid
                                            @else
                                                {{$september}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                            @if(date('m')>=10)
                                            <td>Oct</td>
                                        @endif
                                        @if(date('m')>=10)
                                            <td>@if($october === 0)
                                                Paid
                                            @else
                                                {{$october}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>

                                        <tr>
                                             @if(date('m')>=11)
                                            <td>Nov</td>
                                        @endif
                                        @if(date('m')>=11)
                                            <td>@if($november === 0)
                                                Paid
                                            @else
                                                {{$november}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>
                                        <tr>
                                            @if(date('m')>=12)
                                            <th>Dec</th>
                                        @endif
                                        @if(date('m')>=12)
                                            <td>@if($december === 0)
                                                Paid
                                            @else
                                                {{$december}}
                                            @endif
                                            </td>
                                        @endif
                                        </tr>
                                        <tr>
                                            <td>Balance</td>
                                            <td>{{$total}}</td>

                                        </tr>

                                    </tr>
                            </table>
                        </div>
                    </div>
                   </div>


                </div>
            </div>
        </div>
    </div>



</x-app-layout>
