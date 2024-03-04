<?php

namespace App\Http\Controllers;

use App\Models\Allclient;
use App\Models\User;
use App\Models\Application;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        // Prevent unauthorize
        if (Auth::user()->usertype != 'user') {
            return redirect(route('admindashboard'));
        }

        // Getting data current user client
        $currentAccountNumber = Auth::user()->accountnumber;
        //Getting all data from bill table
        $searchBillAccountNumber = Bill::get();






        $accountnumber;
        $fullname;
        $january;
        $febuary;
        $march;



        foreach ($searchBillAccountNumber as $searchBillAccountNumber) {
            if($currentAccountNumber == $searchBillAccountNumber->accountnumber){
                $accountnumber=$searchBillAccountNumber->accountnumber;
                $fullname=$searchBillAccountNumber->fullname;
                $contact=$searchBillAccountNumber->contact;
                $plan=$searchBillAccountNumber->plan;
                $email=$searchBillAccountNumber->email;
                $january=$searchBillAccountNumber->january;
                $febuary=$searchBillAccountNumber->febuary;
                $march=$searchBillAccountNumber->march;
                $april=$searchBillAccountNumber->aplril;
                $may=$searchBillAccountNumber->may;
                $june=$searchBillAccountNumber->june;
                $july=$searchBillAccountNumber->july;
                $august=$searchBillAccountNumber->august;
                $september=$searchBillAccountNumber->september;
                $october=$searchBillAccountNumber->october;
                $november=$searchBillAccountNumber->november;
                $december=$searchBillAccountNumber->december;
            }
        }



        // passing data to dashboard view
        return view('dashboard', [
            'accountnumber' => $accountnumber,
            'fullname' => $fullname,
            'contact' => $contact,
            'plan'=> $plan,
            'email'=> $email,
            'january' => $january,
            'febuary'=> $febuary,
            'march'=> $march,
            'april'=> $april,
            'may'=> $may,
            'june' => $june,
            'july'=> $july,
            'august' => $august,
            'sepetember' => $september,
            'october'=> $october,
            'november'=> $november,
            'december' => $december,


        ]);


    }


    // For linking account number
    public function linkaccount(Request $request)
    {
        $request->validate([
            'accountnumber' => 'required|unique:users'
        ]);

        $searchAccountNumber = Allclient::get();
        foreach ($searchAccountNumber as $searchAccountNumber) {
            $AccountNumber = $searchAccountNumber->accountNumber; // data from allclient table specific accountNumber Column
        }
        $recvAccountNumber = $request->accountnumber; // user input
        if ($recvAccountNumber === $AccountNumber) {
            //proceed
            $user['name'] = Auth::user()->name; // giving default value from user
            $user['email'] = Auth::user()->email; // giving default value from user
            $user['password'] = Auth::user()->password; // giving default value from user
            $user['usertype'] = Auth::user()->usertype; // giving default value from user
            $user['email_verified_at'] = Auth::user()->email_verified_at; // giving default value from user
            $user['accountnumber'] = $recvAccountNumber; // This is from user input to link account
            $ConfirmLink = Auth::user()->update($user);
            if ($ConfirmLink) {
                return redirect('dashboard');
            } else {
                return redirect()->back()->with('status', 'Invalid account number!');
            }
        } else {
            return redirect()->back()->with('status', 'Invalid account number!');
        }

    }

}



