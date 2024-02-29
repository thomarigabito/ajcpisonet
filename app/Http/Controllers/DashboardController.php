<?php

namespace App\Http\Controllers;

use App\Models\Allclient;
use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->usertype != 'user') {
            return redirect(route('admindashboard'));
        }

            return view('dashboard');
    }

    public function linkaccount (Request $request) {
        $request->validate([
            'accountnumber'=> 'required|unique:users'
        ]);

        $searchAccountNumber = Allclient::get();
            foreach($searchAccountNumber as $searchAccountNumber){
                $AccountNumber = $searchAccountNumber->accountNumber; // data from allclient table specific accountNumber Column
            }
        $recvAccountNumber = $request->accountnumber; // user input
        if($recvAccountNumber === $AccountNumber){
            //proceed
            $user['name'] = Auth::user()->name; // giving default value from user
            $user['email'] = Auth::user()->email; // giving default value from user
            $user['password'] = Auth::user()->password; // giving default value from user
            $user['usertype'] = Auth::user()->usertype; // giving default value from user
            $user['email_verified_at'] = Auth::user()->email_verified_at; // giving default value from user
            $user['accountnumber'] = $recvAccountNumber; // This is from user input to link account
            $ConfirmLink = Auth::user()->update($user);
                if($ConfirmLink){
                    return redirect('dashboard');
                }else{
                    return redirect()->back()->with('status', 'Invalid account number!');
                } 
        }else{
            return redirect()->back()->with('status', 'Invalid account number!');
        }     


    }
}





