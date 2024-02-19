<?php

namespace App\Http\Controllers;

use App\Models\Allclient;
use App\Models\Application;
use Illuminate\Http\Request;

class AllclientController extends Controller
{
    public function admindashboard(){
        $clientsdata = Allclient::get();
        return view('admindashboard', compact('clientsdata'));
    }

    public function createclient(){
        return view('include.createclient');
    }

    public function storeclient(Request $request){
        $request->validateWithBag('createClient', [
            'fullname'=> ['required','unique:clients,fullname'],
            'plan'=> ['required'],
            'accountnumber'=> ['required','unique:clients,accountnumber'],
        ]);
        Allclient::create([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'plan' => $request->plan,
            'accountNumber' => $request->accountNumber,
        ]);
        return redirect('createclient')->with('status','Client Added');

    }

    public function edit(int $id){
        $client = Allclient::findOrFail($id);
        return view('include.editclient', compact('client'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'plan' => 'required',
            'accountNumber' => 'required'
        ]);
        Allclient::findOrFail($id)->update([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'plan' => $request->plan,
            'accountNumber' => $request->accountNumber,
        ]);
        return redirect()->back()->with('status', 'Client Updated');
    }

    public function deleteclient(int $id){
        $client = Allclient::findOrFail($id);
        $client->delete();
        return redirect()->back()->with('status', 'Client Deleted');
    }

    // New Application Routes
    public function newApplication(){
        $applicants = Application::get();
        return view('include.newapplication', compact('applicants'));
    }
    public function deletenewapplication(int $id){
        $newapplicant = Application::findOrFail($id);
        $newapplicant->delete();
        return redirect()->back()->with('status', 'Application Deleted');
    }



}
