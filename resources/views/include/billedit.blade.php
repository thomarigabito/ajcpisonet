<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$BillEdit->fullname .' Billing Update' }}
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
                            <div class="row">

                            <div class="col col-sm-6">

                            @if(date('m')>=1)
                            <div class="mb-3">
                                <label>January</label>
                                <input type="text" class="form-control" name="january" value="{{$BillEdit->january}}" />
                                @error('january') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=2)
                            <div class="mb-3">
                                <label>Febuary</label>
                                <input type="text" class="form-control" name="febuary" value="{{$BillEdit->febuary}}" />
                                @error('febuary') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=3)
                            <div class="mb-3">
                                <label>March</label>
                                <input type="text" class="form-control" name="march" value="{{$BillEdit->march}}" />
                                @error('march') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=4)
                            <div class="mb-3">
                                <label>April</label>
                                <input type="text" class="form-control" name="april" value="{{$BillEdit->april}}" />
                                @error('april') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=5)
                            <div class="mb-3">
                                <label>May</label>
                                <input type="text" class="form-control" name="may" value="{{$BillEdit->may}}" />
                                @error('may') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=6)
                            <div class="mb-3">
                                <label>June</label>
                                <input type="text" class="form-control" name="june" value="{{$BillEdit->june}}" />
                                @error('june') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            </div>

                            {{-- Month of JULY-DECEMBER --}}
                            <div class="col col-sm-6">
                            @if(date('m')>=7)
                            <div class="mb-3">
                                <label>July</label>
                                <input type="text" class="form-control" name="july" value="{{$BillEdit->july}}" />
                                @error('july') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=8)
                            <div class="mb-3">
                                <label>August</label>
                                <input type="text" class="form-control" name="august" value="{{$BillEdit->august}}" />
                                @error('august') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=9)
                            <div class="mb-3">
                                <label>September</label>
                                <input type="text" class="form-control" name="september" value="{{$BillEdit->september}}" />
                                @error('september') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=10)
                            <div class="mb-3">
                                <label>October</label>
                                <input type="text" class="form-control" name="october" value="{{$BillEdit->october}}" />
                                @error('october') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=11)
                            <div class="mb-3">
                                <label>November</label>
                                <input type="text" class="form-control" name="november" value="{{$BillEdit->november}}" />
                                @error('november') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                            @if(date('m')>=12)
                            <div class="mb-3">
                                <label>December</label>
                                <input type="text" class="form-control" name="december" value="{{$BillEdit->december}}" />
                                @error('december') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            @endif
                        </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" onclick="totalBill" >Update</button>
                            </div>
                        </form>
                    </div>
                   </div>


                </div>
            </div>
        </div>
    </div>

    <script>

        function totalBill(){
            var jan = document.getElementById('january').value
            var feb = document.getElementById('february').value
            var mar = document.getElementById('march').value
            var april = document.getElementById('april').value
            var may = document.getElementById('may').value
            var june = document.getElementById('june').value
            var july = document.getElementById('july').value
            var august = document.getElementById('august').value
            var sept = document.getElementById('september').value
            var oct = document.getElementById('october').value
            var nov = document.getElementById('november').value
            var dec = document.getElementById('december').value

            total = jan + feb

            console.log( total )
        }



    </script>


</x-app-layout>
