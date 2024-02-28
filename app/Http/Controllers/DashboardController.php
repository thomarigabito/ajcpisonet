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
            'accountnumber'=> 'required'
        ]);
        $searchAccountNumber = Allclient::get();
        foreach($searchAccountNumber as $searchAccountNumber){
            $recvAccountNumber = $request->accountnumber; // user input
            $AccountNumber = $searchAccountNumber->accountNumber; // data from allclient table specific accountNumber Column
            if($recvAccountNumber == $AccountNumber){
                //proceed
                $user['name'] = Auth::user()->name;
                $user['email'] = Auth::user()->email;
                $user['password'] = Auth::user()->password;
                $user['usertype'] = Auth::user()->usertype;
                $user['email_verified_at'] = Auth::user()->email_verified_at;
                $user['accountnumber'] = $recvAccountNumber;
                
                
                Auth::user()->update($user);
         
            

            }else{
                echo 'not okay';

        }

    }


}
}





