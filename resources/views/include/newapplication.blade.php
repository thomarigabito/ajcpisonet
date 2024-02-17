<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Application') }}
        </h2>
    </x-slot>

    <div class="py-14">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Clients Application</h1>
                    <div>
                        <div class="mt-3 table-responsive">
                            <table class="table table-light table-striped ">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th scope="col">Fullname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Birthday</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Valid ID</th>
                                        <th scope="col">ID Selfie</th>
                                        <th scope="col">Time Applied</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applicants as $applicants)
                                        <tr class="text-nowrap">
                                            <td>{{ $applicants->firstname }} {{ $applicants->lastname }}</td>
                                            <td>{{ $applicants->email }}</td>
                                            <td>{{ $applicants->contact }}</td>
                                            <td>{{ $applicants->birthday }}</td>
                                            <td>{{ $applicants->gender }}</td>
                                            <td>{{ $applicants->plan }}</td>
                                            <td>{{ $applicants->street }} {{ $applicants->barangay }}</td>
                                            <td>{{ $applicants->town }} {{ $applicants->province }}</td>
                                            <td>{{ $applicants->uploadid }} </td>
                                            <td>{{ $applicants->idselfie }}</td>
                                            <td>{{ $applicants->created_at }}</td>
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
