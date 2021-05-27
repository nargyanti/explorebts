<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage()
    {
        return view('index');
    }

    public function signUp()
    {
        return view('account.signUp');
    }

    public function forgotPassword()
    {
        return view('account.forgotPassword');
    }
}
