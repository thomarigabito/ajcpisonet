<?php

use App\Mail\MyMailingServices;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AJCController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllclientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LinkaccountCoctroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AJCController::class, 'homepage']);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/admindashboard', [AllclientController::class, 'admindashboard'])->name('admindashboard');
    Route::get('/bill', [AJCController::class, 'bill'])->name('bill');

    // Link account
    Route::get('/linkaccount', [ApplicationController::class, 'links'])->name('linkaccount');
    Route::post('/linkaccount', [ApplicationController::class, 'linkaccount'])->name('linkaccount');

    // CRUD clients
    Route::get('createclient/{id}', [AllclientController::class, 'modi'])->name('edit');

    // Route::get('clients/{id}', [AllclientController::class, 'edit'])->name('edit');
    Route::put('clients/{id}', [AllclientController::class, 'update']);
    Route::get('clients/{id}/delete', [AllclientController::class, 'deleteclient']);

    // For new Application admin dashboard
    Route::get('/newapplication', [AllclientController::class, 'newapplication'])->name('newapplication');
    Route::get('newapplication/{id}/delete', [AllclientController::class, 'deletenewapplication']);

    //Users View Blade
    Route::get('/users', [AllclientController::class, 'newuser'])->name('users');


// For linking user dashboard

    Route::post('/link',[DashboardController::class, 'linkaccount'])->name('linkaccount');

    // For Approve client auto add and auto delete from new application
    Route::get('/approveclient/{id}/{firstname}/{lastname}/{email}/{contact}/{birthday}/{gender}/{plan}/{street}/{barangay}/{town}/{province}', [ApplicationController::class, 'approveclient'])->name('approveclient');


    //For Bill admin side
    Route::get('clients/{id}/bill', [AllclientController::class, 'bill']);
    Route::get('clients/{client_id}/billedit', [AllclientController::class, 'billedit']); 
    Route::put('clients/{client_id}/{fullname}/{accountnumber}/{plan}', [AllclientController::class, 'billupdate'])->name('billupdate');

    // To be customize
    Route::get('clients/{email}/{fullname}/{accountnumber}', function($email, $fullname, $accountnumber){
        //Send email to client Bill Reminder
        Mail::to($email)->send (new MyMailingServices($fullname, $accountnumber));
        return redirect()->back()->with('status', 'Bill reminder email sent');
    })->name('sendemail');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/apply_899',function(){
    return view('include.20mbps');
})->name('20mbps');
Route::get('/apply_1000',function(){
    return view('include.30mbps');
})->name('30mbps');
Route::get('/apply_1300',function(){
    return view('include.50mbps');
})->name('50mbps');
Route::get('/apply_1500',function(){
    return view('include.100mbps');
})->name('100mbps');

require __DIR__.'/auth.php';




// From AJCController
Route::get('/internet', [AJCController::class, 'internet'])->name('internet');
Route::get('/promos', [AJCController::class, 'promos'])->name('promos');
Route::get('/contactus', [AJCController::class, 'contactus'])->name('contactus');
Route::get('/applynow', [AJCController::class, 'applynow'])->name('applynow');
Route::post('/applynow', [ApplicationController::class, 'applynowPOST'])->name('applynowPOST');






