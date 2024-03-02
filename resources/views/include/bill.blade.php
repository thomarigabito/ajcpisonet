<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bill') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-10xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                   <div class="card">
                    <div class="card-header">
                        <h4>Clients
                            
                            <a href="{{route('admindashboard')}}" class="btn btn-primary float-end">Back</a>
                            <a href="{{url('clients/'.$billdata->client_id.'/bill')}}" class="btn btn-success mx-1 float-end">Edit</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Client ID</th>
                                        <th>Fullname</th>
                                        <th>Plan</th>
                                        @if(date('m')>=1)
                                            <th>Jan</th>
                                        @endif
                                        @if(date('m')>=2)
                                            <th>Feb</th>
                                        @endif
                                        @if(date('m')>=3)
                                            <th>Mar</th>
                                        @endif
                                        @if(date('m')>=4)
                                            <th>Apr</th>
                                        @endif
                                        @if(date('m')>=5)
                                            <th>May</th>
                                        @endif
                                        @if(date('m')>=6)
                                            <th>Jun</th>
                                        @endif
                                        @if(date('m')>=7)
                                            <th>Jul</th>
                                        @endif
                                        @if(date('m')>=8)
                                            <th>Aug</th>
                                        @endif
                                        @if(date('m')>=9)
                                            <th>Sep</th>
                                        @endif
                                        @if(date('m')>=10)
                                            <th>Oct</th>
                                        @endif
                                        @if(date('m')>=11)
                                            <th>Nov</th>
                                        @endif
                                        @if(date('m')>=12)
                                            <th>Dec</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$billdata->client_id}}</td>
                                        <td>{{$billdata->fullname}}</td>
                                        <td>{{$billdata->plan}}</td>
                                        @if(date('m')>=1)
                                            <td>{{$billdata->january}}</td>
                                        @endif
                                        @if(date('m')>=2)
                                            <td>{{$billdata->febuary}}</td>
                                        @endif
                                        @if(date('m')>=3)
                                            <td>{{$billdata->march}}</td>
                                        @endif
                                        @if(date('m')>=4)
                                            <td>{{$billdata->april}}</td>
                                        @endif
                                        @if(date('m')>=5)
                                            <td>{{$billdata->may}}</td>
                                        @endif
                                        @if(date('m')>=6)
                                            <td>{{$billdata->june}}</td>
                                        @endif
                                        @if(date('m')>=7)
                                            <td>{{$billdata->july}}</td>
                                        @endif
                                        @if(date('m')>=8)
                                            <td>{{$billdata->august}}</td>
                                        @endif
                                        @if(date('m')>=9)
                                            <td>{{$billdata->september}}</td>
                                        @endif
                                        @if(date('m')>=10)
                                            <td>{{$billdata->october}}</td>
                                        @endif
                                        @if(date('m')>=11)
                                            <td>{{$billdata->november}}</td>
                                        @endif
                                        @if(date('m')>=12)
                                            <td>{{$billdata->december}}</td>
                                        @endif

                                    </tr>
                                    
                                                
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                   </div>
                   

                </div>
            </div>
        </div>
    </div>
</x-app-layout>