<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-primary"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($applicants as $applicants)
                                <tr class="">
                                    <td>{{$applicants->firstname}}</td>
                                    <td>{{$applicants->lastname}}</td>
                                    <td>{{$applicants->email}}</td>
                                    <td>{{$applicants->contact}}</td>
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
