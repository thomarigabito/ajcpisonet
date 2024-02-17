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
                    <h4>List of Active Client</h4>
                    <div class="table-responsive col-11 m-auto">
                        <table class="table table-light table-striped">
                            <thead >
                                <tr>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Account Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $client)
                                    <tr>
                                        <td scope="row">{{ $client->fullname }}</td>
                                        <td scope="row">{{ $client->plan }}</td>
                                        <td scope="row">{{ $client->accountnumber }}</td>
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
