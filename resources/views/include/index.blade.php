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
                   <div class="card">
                    <div class="card-header">
                        <h4>Clients
                            <a href="{{route('createclient')}}" class="btn btn-primary float-end">Add Client</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Address</th>
                                    <th>Plan</th>
                                    <th>Account#</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allclientdata as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->fullname}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->plan}}</td>
                                        <td>{{$item->accountNumber}}</td>
                                        <td>
                                            <a href="">Edit</a>
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   </div>
                   

                </div>
            </div>
        </div>
    </div>
</x-app-layout>