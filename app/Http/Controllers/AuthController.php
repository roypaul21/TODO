<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function registerPost(Request $request) {
        $user = new Users();

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'pwd' => 'required|min:6',
            'confirm_pwd' => 'required|same:pwd',
        ]);

        $username = $request->username;
        $email = $request->email;
        $pwd = $request->pwd;
        $confirmPwd = $request->confirm_pwd;


        #$user->username = $username;
        #$user->user_email = $email;
        #$user->user_pwd = Hash::make($pwd);

        #$user->save();


        return back()->with('success', 'User Register Successfully!');
    }


    function loginPost(Request $request) {
        $email = $request->email;
        $pwd = $request->pwd;
    }
}
