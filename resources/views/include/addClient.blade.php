<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                        @endforeach
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                </div>
                <div class="p-6 text-gray-900">
                    <form action="{{route('clientPOST')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" placeholder="Fullname" name="fullname">
                        <input type="text" class="form-control" placeholder="Plan" name="plan">
                        <input type="text" class="form-control" placeholder="Account Number" name="accountnumber">
                        <button type="submit" class="form-control btn btn-primary text-dark">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
