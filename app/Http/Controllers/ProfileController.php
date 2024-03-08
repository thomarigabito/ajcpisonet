<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());

        $request->validateWithBag('userUpdate', [
            'name' => ['nullable'],
            'email' => ['nullable'],
            'profilepicture' =>['required']
        ]);
        if($request->has(['profilepicture'])){
                    $profilePicture = $request->file('profilepicture');
                    $extentionupload = $profilePicture->getClientOriginalExtension();

                    $profile_Picture = time() . '.' . $extentionupload;

                    $path = 'profile/';

                    $profilepicture->move($path, $profile_Picture);
                };

        User::create([
            'profilepicture'=> $path.$profile_Picture
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }


        // if($request->user()->has($request->user()->profilepicture)){
        //     $imagePath = $request->profilepicture->file('profilepicture')->store('profile', 'public');
        //     $request->profilepicture = $imagePath;

        // }else{
        //     echo "negative";
        // }
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
