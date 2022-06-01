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
            redirect('/home');
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $request) {
        // return $request->input();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');

    }
}