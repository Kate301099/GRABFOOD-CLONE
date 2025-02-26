<?php

namespace App\Http\Controllers\website\store;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginStoreController extends Controller
{
    public function index()
    {
        return view('website.store.store-login');
    }

    public function login(UserLoginRequest $request)
    {
        $loginData = $request->validated();

        $remember = false;
        if (isset($loginData['remember_me'])) {
            $remember = true;
        }

        if (Auth::attempt(['email' => $loginData['email'], 'password' => $loginData['password']], $remember)) {
            if(Auth::user()->role === '2') {
                return redirect()->back()->with('success', 'Login Successful');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['error' => 'You do not have permission to access this area']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Wrong Email or Password']);
        }
    }

}
