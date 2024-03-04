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
                                <table class="table table-bordered table-striped text-center table-hover">
                                    <thead class="table-secondary">
                                        <tr class="text-nowrap">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User Type</th>
                                            <th>Date Resgister</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $users)
                                            <tr class="text-nowrap">
                                                <td>{{ $users->id }}</td>
                                                <td>{{ $users->name }}</td>
                                                <td class="lowercase">{{ $users->email }}</td>
                                                <td>{{ $users->usertype }}</td>
                                                <td>{{ $users->created_at }}</td>
                                                <td class="px-auto">
                                                    <a href="{{ route('modi', [$users->id, $users->name, $users->email, $users->usertype]) }}"
                                                        class="btn btn-success edit my-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                        </div>

</x-app-layout>
