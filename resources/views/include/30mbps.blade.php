@extends('mainlayout')
@section('title', 'AJC-Apply')
@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center mt-3 mb-5">
        <div class="row">
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
        <form action="{{route('applynowPOST')}}" method="POST">
            @csrf
            <div class="col-md-6 m-auto p-4 border rounded shadow">
                <h3 class="text-center mb-5">Application Form</h3>
                <div class="col">
                    <Label class="text-body-secondary ">Personal Details :</Label>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="firstname" class="form-control" required placeholder="First Name" style="text-transform:capitalize" />
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="middlename" class="form-control" required placeholder="Middle Name" style="text-transform:capitalize"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="lastname" class="form-control" required placeholder="Last Name" style="text-transform:capitalize"/>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="number" name="contact" class="form-control" required placeholder="Contact Number" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mt-md-1 p-1">
                        <input type="date" name="birthday" class="form-control" required placeholder="Birthday"/>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-md-1 p-1">
                        <select class="form-control" name="gender" required>
                            <option value="">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-md-1 p-1">
                        <input type="text" name="plan" class="form-control" value="1000" placeholder="1000" >
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-md-1 p-1">
                        <input type="text" name="email" class="form-control" required placeholder="Email Address"/>
                    </div>
                </div>
                <div class="col">
                    <Label class="text-body-secondary">Installation address:</Label>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="street" class="form-control" required placeholder="Street/Zone/Purok" style="text-transform:capitalize"/>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="barangay" class="form-control" required placeholder="Barangay" style="text-transform:capitalize"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="town" class="form-control" required placeholder="Town/District/Municipality" style="text-transform:capitalize"/>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <input type="text" name="province" class="form-control" required placeholder="Province" style="text-transform:capitalize"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-md-1 p-1">
                        <input type="text" name="landmark" class="form-control" required placeholder="Landmark" style="text-transform:capitalize"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <label for="uploadid" class="ms-2 text-body-secondary">Upload ID</label>
                        <input type="file" name="uploadid" class="form-control text-body-secondary" required placeholder="Upload ID"/>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <label for="idselfie" class="ms-2 text-body-secondary">Selfie with ID</label>
                        <input type="file" name="idselfie" class="form-control text-body-secondary" required placeholder="Upload ID"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <a href="/" type="button" class="form-control btn btn-danger text-danger">Cancel</a>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                        <button type="submit" class="form-control btn btn-primary text-dark">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
