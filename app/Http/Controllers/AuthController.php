<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    function registerPost(Request $request) {
        $username = $request->username;
        $email = $request->email;
        $pwd = $request->pwd;
        $confirmPwd = $request->confirm_pwd;
    }

    function loginPost(Request $request) {
        $email = $request->email;
        $pwd = $request->pwd;

        Log::info("Username: $email");
        Log::info("Username: $pwd");
    }
}
