<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserRegisterRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('website.register.register',compact('countries'));
    }

    public function store(UserRegisterRequest $request)
    {
        $countries = Country::all();

        $data =$request->validated();

        $isUserExists = User::query()
            ->where('role', 1)
            ->where('email', $data['email'])
            ->exists();

        if($isUserExists){
            return redirect()->back()->withErrors(__('Email already exists'));
        } else {
            $avatar = $request->file('avatar');
            $data['role'] ='1';

            if(!empty($avatar))
            {
                $data['avatar']= $avatar->getClientOriginalName();
            }

            $created = User::create($data);
            if($created)
            {
                $request->file('avatar')->storePubliclyAs('user/avatar',$avatar->getClientOriginalName(),'public');
                return redirect()->back()->with('success', __('Created Profile Success!'));
            } else
            {
                return redirect()->back()->withErrors(__('Created Profile Failed!'));
            }
        }


    }

}
