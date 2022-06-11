<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class PagesController extends Controller
{
    function home()
    {
        return view('Pages.home');
    }
    function register()
    {
        return view('pages.register');
    }

    function submit(Request $requst)
    {
        $rules = [
            "name"=>"required|max:20|min:5",
                "email"=>"required|email|unique:users,email",
                'password' =>[
                    'required',
                    Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                ],
                "conf_password"=>"same:password"
        ];
        
        $messages=[
            "required"=>"Please fillup this field",
            "name.max"=>"Name should not exceed 10 characters",
            'conf_password.same'=> " Does not match Password & confirm password",
        ];

        $this->validate($requst ,$rules,$messages);
        
        

    }
}
