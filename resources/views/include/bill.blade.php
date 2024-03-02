<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                   <div class="card">
                    <div class="card-header">
                        <h4>Edit Clients
                            <a href="{{route('admindashboard')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('clients/'.$client->id.'')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Fullname</label>
                                <input type="text" class="form-control uppercase" name="fullname" value="{{$client->fullname}}"  />
                                @error('fullname') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" class="form-control uppercase" name="address" value="{{$client->address}}"  />
                                @error('address') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Plan</label>
                                <input type="text" class="form-control" name="plan" value="{{$client->plan}}" />
                                @error('plan') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Account Number</label>
                                <input type="text" class="form-control" name="accountNumber" value="{{$client->accountNumber}}" />
                                @error('accountNumber') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                   </div>


                </div>
            </div>
        </div>
    </div>


</x-app-layout>
