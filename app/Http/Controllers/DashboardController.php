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
            $user = Allclient::get();
            return view('dashboard' , compact('user'));
        }

    public function linkaccount (Request $request) {


        $searchAccountNumber = Allclient::get();
        foreach($searchAccountNumber as $searchAccountNumber){

            $recvAccountNumber = (integer)$request->accountNumber; // converting user input into integer

            $AccountNumber = $searchAccountNumber->accountNumber; // data from allclient table specific accountNumber Column
            if($recvAccountNumber == $AccountNumber){
                //proceed
                $linkDataAccountNumber = new User;
                $linkDataAccountNumber->accountNumber = $request['accountNumber'];
                $linkDataAccountNumber->save();
                echo 'saved';
            }else{
                echo 'not ok';
            }

        }

    }


}





    // public function userdashboard($id)
    // { {
    //         if (Auth::user()->usertype != 'user') {
    //             return redirect(route('admindashboard'));
    //         } else if (Auth::id()) {
    //             $usertype = Auth()->user()->usertype;
    //             if ($usertype == 'user') {

    //                 $application = User::find($id);


    //                 return view('userdashboard')->with('application', $application);
    //             }
    //         }
    //     }
    // }
