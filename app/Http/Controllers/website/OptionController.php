<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function index()
    {
        Auth::logout();
        return view('website.layouts.app');
    }


    public function login()
    {
       return view('website.grabfood-login-option');
    }

    public function register()
    {
        return view('website.grabfood-register-option');
    }

}
