<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //this method will show register page
    public function register()
    {
        return view('account.register');
    }
}
