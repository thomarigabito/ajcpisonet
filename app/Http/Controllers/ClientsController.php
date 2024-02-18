<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{

    public function addClient(){
        // to avoid unauthorized access
        if(Auth::user()->usertype!='admin'){
            return redirect(route('dashboard'));
        }
        return view('include.addClient');
    }

    public function newapplication() {
        return view ('include.newapplication');
    }

    public function clientPost(Request $request){
        if(Auth::check()){
            if(Auth::user()->usertype!='admin'){
                return redirect(route('dashboard'));
            }
        }
        $request->validateWithBag('createClient', [
            'fullname'=> ['required','unique:clients,fullname'],
            'plan'=> ['required'],
            'accountnumber'=> ['required','unique:clients,accountnumber'],
        ]);

        $data['fullname'] = $request->fullname;
        $data['plan'] = $request->plan;
        $data['accountnumber'] = $request->accountnumber;

        $client = Client::create($data);

        if(!$client){
            return redirect(route('clientPOST'))->with("error", "Client failed, please try again");
        }
        return redirect(route('clientPOST'))->with("success", "Client submitted,");
    }

    public function createClientadmin(){
        if(Auth::check()){
            if(Auth::user()->usertype!='admin'){
                return redirect(route('dashboard'));
            }
        }
        $client = Client::all();
        return view('admindashboard', ['client'=> $client]);
    }
    public function createClient(){
        $client = Client::all();
        return view('.include.addClient', ['client'=> $client]);
    }


    public function applynowPOST(Request $request){
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }

        $request->validateWithBag('apply', [
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'numeric', 'max:255'],
            'birthday' => ['required'],
            'gender' => ['required'],
            'plan' => ['required'],
            'email' => ['required','email|unique:applications,email'],
            'street' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'numeric', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'landmark' => ['required', 'string', 'max:255'],
            'uploadid' => ['required'],
            'idselfie' => ['required']
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

    public function show(){
        $applicants = Application::all();
        return view('include.newapplication', ['applicants'=> $applicants]);
    }


}
