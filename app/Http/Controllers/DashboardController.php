<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('dashboard');
            }
            else if($user=='admin'){
                return view('admindashboard');
            }
        }
        
    }
}
