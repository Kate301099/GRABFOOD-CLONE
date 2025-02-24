<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('website.register.register',compact('countries'));
    }
}
