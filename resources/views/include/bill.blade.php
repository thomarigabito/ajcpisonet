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
                                        <th>March</th>
                                        <th>April</th>
                                        <th>{{$demo=date('m'); echo $demo;}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$billdata->client_id}}</td>
                                        <td>{{$billdata->fullname}}</td>
                                        <td>{{$billdata->plan}}</td>
                                        <td>{{$billdata->march}}</td>
                                        <td>{{$billdata->april}}</td>
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