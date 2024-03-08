<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Allclient;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\AccountNumber;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    function applynowPOST(Request $request)
    {
        $request->validateWithBag('apply', [
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'birthday' => ['required'],
            'gender' => ['required'],
            'plan' => ['required'],
            'email' => ['required', 'email', 'unique:applications,email'],
            'street' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'landmark' => ['required', 'string', 'max:255'],
            'uploadid' => ['required', ],
            'idselfie' => ['required', ]
        ]);

        if($request->has(['uploadid', 'idselfie' ])){
                    $uploadid = $request->file('uploadid');
                    $idselfie = $request->file('idselfie');

                    $extentionupload = $uploadid->getClientOriginalExtension();
                    $extentionid = $idselfie->getClientOriginalExtension();

                    $idupload = time() . '.' . $extentionupload;
                    $selfieid = time() . '.' . $extentionid;

                    $path = 'images/';

                    $uploadid->move($path, $idupload);
                    $idselfie->move($path, $selfieid);
                };

        $applicants= Application::create([
        'firstname' => $request->firstname,
        'middlename' => $request->middlename,
        'lastname' => $request->lastname,
        'contact' => $request->contact,
        'birthday' => $request->birthday,
        'gender' => $request->gender,
        'plan' => $request->plan,
        'email' => $request->email,
        'street' => $request->street,
        'barangay' => $request->barangay,
        'town' => $request->town,
        'province' => $request->province,
        'landmark' => $request->landmark,
        'uploadid' => $path.$idupload,
        'idselfie' => $path.$selfieid,
        ]);
        // $applicants = Application::create($data);
        if (!$applicants) {
            return redirect(route('applynow'))->with("error", "Application failed, please try again");
        }
        return redirect(route('applynow'))->with("success", "Application submitted, Please wait for email, text or call");
    }

    //For Approve and auto add auto delete
    public function approveclient( $id,$firstname, $lastname, $email, $contact, $birthday, $gender, $plan, $street, $barangay, $town, $province){
        // Patira sir validate

        Allclient::create([
            'fullname' => $firstname .' '. $lastname,
            'address' => $street .' '. $barangay .' '. $town .' '. $province,
            'plan' => $plan,
            'accountNumber' => NULL
        ]);
        Bill::create([
            'client_id' => $id,
            'fullname' => $firstname .' '. $lastname,
            'plan' => $plan,
            'accountNumber' => NULL,
            'email' => $email,
            'contact' => $contact
        ]);
        $newapplicant = Application::findOrFail($id);
        $newapplicant->delete();

        return redirect('admindashboard');
    }

}
