<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Allclient;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllclientController extends Controller
{
    public function admindashboard()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $clientsdata = Allclient::get();
        return view('admindashboard', compact('clientsdata'));
    }


    // Edit client section
    public function modi($id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype != 'admin') {
                return redirect(route('dashboard'));
            }
        }
        $client = Allclient::findOrFail($id);
        return view('include.modifyclient', compact('client'));
    }

    //For Update
    public function update(Request $request, int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'accountNumber' => 'required',
        ]);
        Allclient::findOrFail($id)->update([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'accountNumber' => $request->accountNumber,
            'plan' => $request->plan
        ]);
        Bill::findOrFail($id)->update([
            'fullname' => $request->fullname,
            'plan' => $request->plan,
            'accountnumber' => $request->accountNumber
        ]);
        return redirect()->back()->with('status', 'Client Updated');
    }

    public function deleteclient(int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $client = Allclient::findOrFail($id);
        $client->delete();
        return redirect()->back()->with('status', 'Client Deleted');
    }

    // New Application Routes
    public function newApplication()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $applicants = Application::get();
        return view('include.newapplication', compact('applicants'));
    }
    public function deletenewapplication(int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $newapplicant = Application::findOrFail($id);
        $newapplicant->delete();
        return redirect()->back()->with('status', 'Application Deleted');
    }


    //users admin page

    public function newuser()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $users = User::get();
        return view('include.users', compact('users'));
    }
    public function modiuser($id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype != 'admin') {
                return redirect(route('dashboard'));
            }
        }
        $usertype = User::findOrFail($id);
        return view('include.modifyuser', compact('usertype'));
    }

    public function modiUsers(Request $request, int $id)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect(route('dashboard'));
            }
        }
        $request->validate([
            'usertype' => 'required',
        ]);
        User::findOrFail($id)->update([
            'usertype' => $request->usertype,
        ]);
        return redirect()->back()->with('status', 'UserType Updated');
    }









    //Bill page admin side
    public function bill(int $id){
        $billdata = Bill::findOrFail($id);

                $accountnumber=$billdata->accountnumber;
                $fullname=$billdata->fullname;
                $contact=$billdata->contact;
                $plan=$billdata->plan;
                $client_id = $billdata->client_id;
                $email=$billdata->email;
                $january=$billdata->january;
                $febuary=$billdata->febuary;
                $march=$billdata->march;
                $april=$billdata->aplril;
                $may=$billdata->may;
                $june=$billdata->june;
                $july=$billdata->july;
                $august=$billdata->august;
                $september=$billdata->september;
                $october=$billdata->october;
                $november=$billdata->november;
                $december=$billdata->december;
                $total= $january+$febuary+$march+$april+$may+$june+$july+$august+$september+$october+$november+$december;






        return view ('include.bill', [
            'accountnumber' => $accountnumber,
            'fullname' => $fullname,
            'contact' => $contact,
            'plan'=> $plan,
            'client_id'=>$client_id,
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
            'total' => $total,


        ]);
    }
    //Bill Edit
    public function billedit($client_id){

        $BillEdit = Bill::findOrFail($client_id);
        return view('include.billedit',compact('BillEdit'));
    }

    //For Bill Update
    public function billupdate(Request $request, int $client_id, $fullname, $accountnumber, $plan)
    {
        $request->validate([
            'january' => 'nullable|integer',
            'febuary' => 'nullable|integer',
            'march' => 'nullable|integer',
            'april' => 'nullable|integer',
            'may' => 'nullable|integer',
            'june' => 'nullable|integer',
            'july' => 'nullable|integer',
            'august' => 'nullable|integer',
            'september' => 'nullable|integer',
            'october' => 'nullable|integer',
            'november' => 'nullable|integer',
            'december' => 'nullable|integer',
            'total'=> 'integer',


        ]);
        Bill::findOrFail($client_id)->update([
            'client_id' => $client_id,
            'fullname' => $fullname,
            'accountnumber' => $accountnumber,
            'plan' => $plan,
            'january' => $request->january,
            'febuary' => $request->febuary,
            'march'=> $request->march,
            'april' => $request->april,
            'may' => $request->may,
            'june' => $request->june,
            'july' => $request->july,
            'august' => $request->august,
            'september' => $request->september,
            'october' => $request->october,
            'november' => $request->november,
            'december' => $request->december,

        ]);
        return redirect()->back()->with('status', 'Bill Updated');
    }

}
