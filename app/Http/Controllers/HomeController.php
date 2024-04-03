<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("home.herosection");
    }

    public function loginPost(Request $request) {
        $email = $request->email;
        $pwd = $request->pwd;

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function registerPost(Request $request) {
        $username = $request->username;
        $email = $request->email;
        $pwd = $request->pwd;
        $confirm_pwd = $request->confirm_pwd;

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

