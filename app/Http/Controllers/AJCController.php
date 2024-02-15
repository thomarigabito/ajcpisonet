<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AJCController extends Controller
{

    public function homepage(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('homepage');
    }
    public function internet()
    {
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('include.internet');
    }
    public function promos()
    {
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('include.promos');
    }
    public function contactus()
    {
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('include.contactus');
    }
    public function applynow()
    {
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('include.applynow');
    }


    function applynowPOST(Request $request){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }


        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'plan' => 'required',
            'email' => 'required|email|unique:applications,email',
            'street' => 'required',
            'barangay' => 'required',
            'town' => 'required',
            'province' => 'required',
            'landmark' => 'required',
            'uploadid' => 'required',
            'idselfie' => 'required'
        ]);

        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['contact'] = $request->contact;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['plan'] = $request->plan;
        $data['email'] = $request->email;
        $data['street'] = $request->street;
        $data['barangay'] = $request->barangay;
        $data['town'] = $request->town;
        $data['province'] = $request->province;
        $data['landmark'] = $request->landmark;
        $data['uploadid'] = $request->uploadid;
        $data['idselfie'] = $request->idselfie;

        $applicants = Application::create($data);

        if(!$applicants){
            return redirect(route('applynow'))->with("error", "Application failed, please try again");
        }
        return redirect(route('applynow'))->with("success", "Application submitted, Please wait for email, text or call");
    }
    public function applicantdata(){
        $applicant = Application::all();
        return view('dashboard', ['applicant'=> $applicant]);
    }
}
