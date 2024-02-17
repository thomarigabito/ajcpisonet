<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AJCController extends Controller
{

    public function homepage(){
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('homepage');
    }
    public function internet()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.internet');
    }
    public function promos()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.promos');
    }
    public function contactus()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.contactus');
    }
    public function applynow()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.applynow');
    }
    public function bill(){
        // to avoid unauthorized access
        if(Auth::user()->usertype!='user'){
            return redirect(route('admindashboard'));
        }
        return view('bill');
    }
}
