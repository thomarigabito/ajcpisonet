<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                        <h4>Clients
                            <a href="{{route('index')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('storeclient')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="fullname" value="{{old('name')}}" Capitalized />
                                @error('name') <span class="text-danger">{{$message}}</span>@enderror
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{old('address')}}" Capitalized/>
                                @error('address') <span class="text-danger">{{$message}}</span>@enderror
                                <label>Plan</label>
                                <input type="number" class="form-control" name="plan" value="{{old('plan')}}" />
                                @error('plan') <span class="text-danger">{{$message}}</span>@enderror
                                <label>Account Number</label>
                                <input type="number" class="form-control" name="accountNumber" value="{{old('accountNumber')}}" />
                                @error('accountNumber') <span class="text-danger">{{$message}}</span>@enderror
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                   </div>
                   

                </div>
            </div>
        </div>
    </div>
</x-app-layout>