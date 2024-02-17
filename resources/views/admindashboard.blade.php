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
                    <h1>ADMIN DASHBOARD</h1>
                    <div class="table-responsive">
                        <table class="table table-primary text-center px-5">
                            <thead class="text-center px-5">
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Account Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $client)
                                    <tr>
                                        <td scope="row" class="px-3 py-2">{{ $client->fullname }}</td>
                                        <td>{{ $client->plan }}</td>
                                        <td>{{ $client->accountnumber }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
