<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserAccountUpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $countries = Country::all();
        return view('website.account.account',compact('countries','user'));
    }

    public function update(UserAccountUpdateRequest $request)
    {
        $user = Auth::user();

        $data = $request->validated();

        $avatar = $request->file('avatar');

        if(!empty($avatar)){
            $data['avatar']= $avatar->getClientOriginalName();
        }

        $data['name'] = $data['name'] ?? $user->name;
        $data['email']= $data['email'] ?? $user->email;
        $data['password']=$data['password'] ?? $user->password;
        $data['phone'] = $data['phone'] ?? $user->phone;
        $data['address'] = $data['address'] ?? $user->address;


        if($user->update($data)){
            if($request->hasFile('avatar')){
                $request->file('avatar')->storePubliclyAs('user/avatar',$avatar->getClientOriginalName(),'public');
            }
            return redirect()->back()->with('success', __('Update Profile Success!'));
        } else {
            return redirect()->back()->withErrors(__('Update Profile Fail!'));

        }

    }

    public function destroy() {
        Auth::logout();
        return redirect()->route('user.login');
    }

}
