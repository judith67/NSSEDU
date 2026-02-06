<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if(Auth::guard('web')->attempt($login)){
            return redirect('/admin/toppers-form');
        } else{
            return $this->redirectPage("admin.login","Invalid Login Details");
        }

    }

    public function register(){
        $user = new User();
        $user->email = "admin";
        $user->password = Hash::make("admin@123");
        $user->save();
    }

    public function redirectPage($view, $err_msg = null){
        if($err_msg == null){
            return view($view);
        }
        return view($view, ['err_msg' => $err_msg]);
    }
}
