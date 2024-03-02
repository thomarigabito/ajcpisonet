<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            @if (Auth::user()->accountnumber == null)
                {{ __('No Account Linked') }}
            @else
                {{ __('Dashboard') }}
            @endif
        </h2>
    </x-slot>

    @if (Auth::user()->accountnumber == null)
        <div class="main">
            <div class="container mt-3">
                <div class="row flex justify-content-center mt-5 ">
                    <div class="col-12 col-sm-12  col-lg-8 ">
                        <div class="container">
                            <h3 style="width: 55%;"  class="pt-5 texts">A Greater Life Together, at Home</h3>
                            <p class="paragraph fs-sm-6 ">A Greater Life Together, at Home
                                Get the whole family connected with the greatest deal.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4  p-3 border rounded shadow link my-auto py-auto">
                        <h4 class="text-center">Please link your account</h4>
                        <form action="{{ route('linkaccount') }}" method="POST" class="my-4">
                            @csrf
                            <div class="my-3">
                                <label>Enter your account number:</label>
                                <input type="text" name="accountnumber" class="form-control" required />
                                <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />
                                @error('accountnumber')
                                    <span class="text-danger font-medium text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-primary">Link Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 align-items-end">
                        <h1>Linked</h1>
                        <h2>Hello</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('footer')
</x-app-layout>
