<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $request) {

        $user= User::where(['email'=>$request->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($request->password,$user->password)){
            return "Username or password is not matches.";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}