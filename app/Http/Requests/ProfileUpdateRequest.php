<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(Request $request): array
    {

        // if($request->has(['profilepicture'])){
        //     $profilePicture = $request->file('profilepicture');
        //     $extentionupload = $profilePicture->getClientOriginalExtension();

        //     $profile_Picture = time() . '.' . $extentionupload;
        //     $path = 'profile/';
        //     $profilepicture -> move($path, $profile_Picture);
        // };

        // $profilepicture = User::create([
        //     'profilepicture' => $path.$profile_Picture
        // ]);

        

        // return [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        //     'profilepicture' => ['required']  
        // ];

        echo gettype($request->name);

        

        


    }
}
