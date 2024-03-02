<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$BillEdit->fullname __('Update Client Bill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                   <div class="card">
                    <div class="card-header">
                        <h4>Edit Bill
                            <a href="{{url('clients/'.$BillEdit->client_id.'/bill')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('billupdate',[
                                        $BillEdit->client_id,
                                        $BillEdit->fullname,
                                        $BillEdit->accountnumber,
                                        $BillEdit->plan
                                            ])}}" 
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>January</label>
                                <input type="number" class="form-control" name="january" value="{{$BillEdit->january}}" />
                                @error('january') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Febuary</label>
                                <input type="number" class="form-control" name="febuary" value="{{$BillEdit->febuary}}" />
                                @error('febuary') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>March</label>
                                <input type="number" class="form-control" name="march" value="{{$BillEdit->march}}" />
                                @error('march') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                   </div>


                </div>
            </div>
        </div>
    </div>


</x-app-layout>
