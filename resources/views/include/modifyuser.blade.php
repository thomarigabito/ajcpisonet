<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Type') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                   <div class="card">
                    <div class="card-header">
                        <h4>Change User Type
                            <a href="{{route('admindashboard')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('usertype/'.$usertype->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>UserType</label>
                                <select class="form-control" name="usertype" id="">
                                    <option value="">Select User</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                                {{-- <input type="text" class="form-control lowercase" name="usertype" value="{{$usertype->usertype}}"/> --}}
                                @error('fullname') <span class="text-danger">{{$message}}</span>@enderror
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
