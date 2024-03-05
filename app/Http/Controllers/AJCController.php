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

    public function sendemailinquire (Request $request) 
    {
        $request->validate([
            'inquire_client_name' => 'required',
            'inquire_client_email' => 'required',
            'inquire_client_message' => 'required'
        ]);
        $inquire_client_name = $request->inquire_client_name;
        $inquire_client_email = $request->inquire_client_email;
        $inquire_client_message = $request->inquire_client_message;
        Mail::to('ajcpisonet@gmail.com')->send (new InquireMail($inquire_client_name, $inquire_client_email, $inquire_client_message));
        return redirect()->back()->with('status', 'Thanks for reaching out.');
    }

   
   
}
