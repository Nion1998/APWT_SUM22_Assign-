<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use LDAP\Result;

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

    function submit(Request $request)
    {
        $rules = [
            "name"=>"required|max:20|min:5",
                //"email"=>"required|email|unique:users,email",
                "email"=>"required|email|email",
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

        $this->validate($request ,$rules,$messages);
        
        $user = new account();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password =$request->password;
        $user->save();

        
        return redirect('/');

    }

    function login()
    {
        return view('pages.login');
    }

    function loginsubmit(Request $request)
    {
        $rules = [
                "email"=>"required|exists:users,email",
                "password"=>"required|exists:users,password",
        ];
        
        $messages=[
                'email.exists'=>'No account is found using this mail',
                'password.exists'=>'Password incorrect'
        ];

        $this->validate($request ,$rules,$messages);

           $email=$request->email;
           $password=$request->password;
           $result=account::where('email',$email)->where('password',$password)->first();

          if($result){
            if($result->type=='admin'){
                return view('Admin.dashbord');
            }
            else{
                return view('users.dashbord');
            }
          }
          else{
            return redirect('/login');
          }
    }

    

}