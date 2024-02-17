<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5">
                    {{-- @if ($errors->any())
                        <div class="col-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger col-6 m-auto">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif --}}
                </div>
                <div class="mx-3">
                    <h3>New Client</h3>

                </div>

                <div class="p-6 text-gray-900">
                    <form action="{{ route('clientPOST') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Fullname" name="fullname">
                                <x-input-error :messages="$errors->createClient->get('fullname')" class="mt-2" />
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Plan" name="plan">
                                <x-input-error :messages="$errors->createClient->get('plan')" class="mt-2" />
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Account Number" name="accountnumber">
                                <x-input-error :messages="$errors->createClient->get('accountnumber')" class="mt-2" />
                            </div>
                            <div class="col-3">
                                <button type="submit" class="form-control btn btn-primary text-dark">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive col-11 m-auto">
                    <table class="table table-striped">
                        <thead class="">
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
</x-app-layout>
