<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('website.login.login');
    }

    public function login(UserLoginRequest $request)
    {
        $loginData = $request->validated();

        $remember = false;
        if (isset($loginData['remember_me'])) {
            $remember = true;
        }

        if (Auth::attempt(['email' => $loginData['email'], 'password' => $loginData['password']], $remember)) {
            $user_id = Auth::user()->id;
            return redirect()->back()->with(
                ['success' => 'You are now logged in',
                    'user_id' => $user_id,
                ]);
        } else {
            return redirect()->back()->withErrors(['error' => 'Wrong Email or Password']);
        }
    }
}
