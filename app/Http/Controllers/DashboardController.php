<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->usertype!='user'){
            return redirect(route('admindashboard'));
        }
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('dashboard');
            }
        }

    }
    public function admindashboard(){
        if(Auth::user()->usertype!='admin'){
            return redirect(route('dashboard'));
        }
        $usertype=Auth()->user()->usertype;
        if(Auth::id()){
            if($usertype=='admin'){
                return view('admindashboard');
            }
        }
    }
}
