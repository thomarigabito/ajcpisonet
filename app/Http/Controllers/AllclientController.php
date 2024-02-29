<?php

namespace App\Http\Controllers;

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



    public function createclient()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        return view('include.createclient');
    }

    public function storeclient(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $request->validate([
            // 'id'=> 'required|unique:allclients',
            'fullname' => 'required|unique:allclients',
            'address' => 'required',
            'plan' => 'required',
            'accountNumber' => 'required|unique:allclients',

        ]);
        Allclient::create([
            // 'id'=> $request->id,
            'fullname' => $request->fullname,
            'address' => $request->address,
            'plan' => $request->plan,
            'accountNumber' => $request->accountNumber,

        ]);
        return redirect('createclient')->with('status', 'Client Added');

    }

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
            // 'id'=>'nullable',
            'fullname' => 'required',
            'address' => 'required',
            'plan' => 'required',
            'accountNumber' => 'required',


        ]);
        Allclient::findOrFail($id)->update([
            // 'id'=> $request->id,
            'fullname' => $request->fullname,
            'address' => $request->address,
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

}
