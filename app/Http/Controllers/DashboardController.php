<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Allclient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->usertype!='user'){
            return redirect(route('admindashboard'));
        }
        else if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                $data = Allclient::get();
                return view('dashboard', compact('data'));
            }
        }

    }
}
