<?php

use App\Mail\MyMailingServices;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AJCController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllclientController;
use App\Http\Controllers\DashboardController;

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
    Route::get('/admindashboard', [DashboardController::class, 'admindashboard'])->name('admindashboard');

    Route::get('/addclient', [ClientsController::class, 'addClient'])->name('addClient');
    Route::get('/newapplication', [ClientsController::class, 'newapplication'])->name('newapplication');
    Route::get('/newapplication', [ClientsController::class, 'show'])->name('newapplication');

    Route::post('/addclient', [ClientsController::class, 'clientPost'])->name('clientPOST');
    Route::get('/addclient', [ClientsController::class, 'createClient'])->name('addClient');
    Route::get('/admindashboard', [ClientsController::class, 'createClientadmin'])->name('admindashboard');

    Route::get('/bill', [AJCController::class, 'bill'])->name('bill');

    // new
    Route::get('clients', [AllclientController::class, 'index'])->name('index');
    Route::get('createclient', [AllclientController::class, 'createclient'])->name('createclient');
    Route::post('createclient', [AllclientController::class, 'storeclient'])->name('storeclient');
    Route::get('clients/{id}/edit', [AllclientController::class, 'edit']);
    Route::put('clients/{id}/edit', [AllclientController::class, 'update']);
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


// To be customize
Route::get('/testroute', function(){
    //Send email to anyone
    Mail::to('deepong25@gmail.com')->send (new MyMailingServices('Jupiter'));
});

// From AJCController
Route::get('/internet', [AJCController::class, 'internet'])->name('internet');
Route::get('/promos', [AJCController::class, 'promos'])->name('promos');
Route::get('/contactus', [AJCController::class, 'contactus'])->name('contactus');
Route::get('/applynow', [AJCController::class, 'applynow'])->name('applynow');
Route::post('/applynow', [ClientsController::class, 'applynowPOST'])->name('applynowPOST');






