<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function registerPost(Request $request) {
        $user = new Users();

        $username = $request->username;
        $email = $request->email;
        $pwd = $request->pwd;
        $confirmPwd = $request->confirm_pwd;

        if ($pwd !== $confirmPwd) {
            return back()->withInput()->withErrors(['error' => 'Password and confirm password do not match']);
        }

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
