<x-app-layout>


    <div class="my-2">
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('List of Users') }}
            </h2>
        </x-slot> --}}
        <div class="max-w-10xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <div class="card">
                        <div class="card-header font-semibold text-xl text-gray-800 leading-tight">
                            <h4>List of Users
                                <a href="{{ route('admindashboard') }}" class="btn btn-primary float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-secondary">
                                        <tr class="text-nowrap">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User Type</th>
                                            <th>Date Resgister</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $users)
                                            <tr class="text-nowrap">
                                                <td>{{ $users->id }}</td>
                                                <td>{{$users->name}}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->usertype }}</td>
                                                <td>{{ $users->created_at}}</td>
                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>

                        </div>

</x-app-layout>
