<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Application') }}
        </h2>
    </x-slot>

    <div class="my-2">
        <div class="max-w-10xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Applications
                                <a href="{{route('admindashboard')}}" class="btn btn-primary float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">
                                    <thead class="table-secondary">
                                        <tr class="text-nowrap">
                                            <th>ID</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Birthday</th>
                                            <th>Gender</th>
                                            <th>Plan</th>
                                            <th>Address</th>
                                            <th>Upload Id</th>
                                            <th>Selife</th>
                                            <th>Date Applied</th>
                                            <th>Deny</th>
                                            <th>Approve</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $applicants)
                                            <tr class="text-nowrap">
                                                <td>{{ $applicants->id }}</td>
                                                <td>{{ $applicants->firstname }} {{ $applicants->lastname }}</td>
                                                <td>{{ $applicants->email }}</td>
                                                <td>{{ $applicants->contact }}</td>
                                                <td>{{ $applicants->birthday }}</td>
                                                <td>{{ $applicants->gender }}</td>
                                                <td>{{ $applicants->plan }}</td>
                                                <td>{{ $applicants->street }} {{ $applicants->barangay }} {{ $applicants->town }} {{ $applicants->province }}</td>
                                                <td> <img src="{{ asset($applicants->uploadid) }}" style="width=70px; height=70px;"/></td>
                                                <td> <img src="{{ asset($applicants->idselfie) }}" style="width=70px; height=70px;"/></td>
                                                <td>{{ $applicants->created_at }}</td>
                                                <td>
                                                    <a href="{{url('newapplication/'.$applicants->id.'/delete')}}" class="btn btn-danger delete mx-1" onclick="return confirm('Are you sure?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('approveclient',
                                                            [
                                                                $applicants->id,
                                                                $applicants->firstname,
                                                                $applicants->lastname,
                                                                $applicants->email,
                                                                $applicants->contact,
                                                                $applicants->birthday,
                                                                $applicants->gender,
                                                                $applicants->plan,
                                                                $applicants->street,
                                                                $applicants->barangay,
                                                                $applicants->town,
                                                                $applicants->province
                                                            ])}}"
                                                            class="btn btn-success mx-1" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                                        </svg>
                                                    </a>
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
    </div>
</x-app-layout>
