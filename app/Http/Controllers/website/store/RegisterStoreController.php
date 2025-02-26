<?php

namespace App\Http\Controllers\website\store;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserRegisterRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterStoreController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('website.store.store-register',compact('countries'));
    }

    public function store(UserRegisterRequest $request)
    {
        $countries = Country::all();

        $data =$request->validated();

        $isStoreExists = User::query()
            ->where('role', 2)
            ->where('email', $data['email'])
            ->exists();

        if($isStoreExists){
            return redirect()->back()->withErrors(__('Email already exists'));
        } else {
            $avatar = $request->file('avatar');
            $data['role'] ='2';

            if(!empty($avatar))
            {
                $data['avatar']= $avatar->getClientOriginalName();
            }

            $created = User::create($data);
            if($created)
            {
                $request->file('avatar')->storePubliclyAs('store/avatar',$avatar->getClientOriginalName(),'public');
                return redirect()->back()->with('success', __('Created Profile Success!'));
            } else
            {
                return redirect()->back()->withErrors(__('Created Profile Failed!'));
            }
        }


    }

}
