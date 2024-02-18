<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{

    public function addClient(){
        // to avoid unauthorized access
        if(Auth::user()->usertype!='admin'){
            return redirect(route('dashboard'));
        }
        return view('include.addClient');
    }

    // Add Client post request
    // function addClientPost(Request $request){
    //     // to avoid unauthorized access
    //     if(Auth::user()->usertype!='admin'){
    //         return redirect(route('dashboard'));
    //     }
    //     $request->validate([
    //         'firstname' => 'required'
    //     ]);

<<<<<<< HEAD

        $request->validate([
            'firstname' => 'required'
        ]);

        $data['firstname'] = $request->firstname;

        $applicants = Application::create($data);
=======
    //     $data['firstname'] = $request->firstname;
       
    //     $applicants = Application::create($data);
>>>>>>> 82b31c87d4c7f111c2a0adbbeabb9530ddd54583

    //     if(!$applicants){
    //         return redirect(route('addClient'))->with("error", "Application failed, please try again");
    //     }
    //     return redirect(route('addClient'))->with("success", "Application submitted, Please wait for email, text or call");
    // }



    public function newapplication () {
        return view ('include.newapplication');
    }
}
