<?php

namespace App\Http\Controllers;

use App\Models\Allclient;
use Illuminate\Http\Request;

class AllclientController extends Controller
{
    public function index(){
        $allclientdata = Allclient::get();
        return view('include.index', compact('allclientdata'));
    }
    public function createclient(){
        return view('include.createclient');
    }
    public function storeclient(Request $request){
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'plan' => 'required',
            'accountNumber' => 'required'
        ]);
        Allclient::create([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'plan' => $request->plan,
            'accountNumber' => $request->accountNumber,
        ]);
        return redirect('createclient')->with('status','Client Added');

    }
}
