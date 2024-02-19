<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
            @if(Auth::user()->accountNumber==0)
            {{  __('No Account Linked') }}
            @else
             {{ __('Dashboard')  }}   
                
            @endif  
        </h2>
    </x-slot>

    @if(Auth::user()->accountNumber==0)
        <div class="container mt-3">
            <div class="row flex justify-content-center mt-5">              
                <div class="col-4 p-3 border rounded shadow">
                    <h4 class="text-center">Please link your account</h4>
                    <form action="{{route('linkaccount')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Enter your account number:</label>
                            <input type="text" name="accountNumber" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Link</button>
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>


    @else
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                      
                    
                        <h1>It is not Zero</h1>
                    
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
