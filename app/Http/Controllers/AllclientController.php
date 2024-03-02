<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Allclient;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllclientController extends Controller
{
    public function admindashboard()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $clientsdata = Allclient::get();
        return view('admindashboard', compact('clientsdata'));
    }


    // Edit client section
    public function modi($id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype != 'admin') {
                return redirect(route('dashboard'));
            }
        }
        $client = Allclient::findOrFail($id);
        return view('include.modifyclient', compact('client'));
    }

    public function update(Request $request, int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'accountNumber' => 'required',


        ]);
        Allclient::findOrFail($id)->update([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'accountNumber' => $request->accountNumber,
        ]);
        Bill::findOrFail($id)->update([
            'fullname' => $request->fullname,
            'plan' => $request->plan,
            'accountNumber' => $request->accountNumber,
        ]);
        return redirect()->back()->with('status', 'Client Updated');
    }

    public function deleteclient(int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $client = Allclient::findOrFail($id);
        $client->delete();
        return redirect()->back()->with('status', 'Client Deleted');
    }

    // New Application Routes
    public function newApplication()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $applicants = Application::get();
        return view('include.newapplication', compact('applicants'));
    }
    public function deletenewapplication(int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $newapplicant = Application::findOrFail($id);
        $newapplicant->delete();
        return redirect()->back()->with('status', 'Application Deleted');
    }


    //users admin page

    public function newuser()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $users = User::get();
        return view('include.users', compact('users'));

    }

    //Bill page admin side
    public function bill(int $id){
        $billdata = Bill::findOrFail($id);
        return view ('include.bill', compact('billdata'));
    }

}
