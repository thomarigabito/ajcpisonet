<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Allclient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkaccountCoctroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('linkaccount');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'accountnumber'=> 'required',
        ]);
        $user = User::create([
        'accountnumber'=> $request->accountnumber,
        ]);

        return redirect()->route('linkaccount')->with('success','Account number linked');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('linkaccount', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'accountnumber'=> 'required',
        ]);

        User::findorFail($id)->update([
            'accountnumber'=> $request->accountnumber,
        ]);

        return redirect()->back()->with('status','Account Link');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
