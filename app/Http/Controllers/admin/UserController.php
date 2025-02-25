<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $data=Auth::user();
        return view('admin.user.profile',compact('data','countries'));
    }

    public function update(UpdateProfileRequest $request) {
        $user = Auth::user();

        $data=$request->validated();

        $file=$request->file('avatar');

        if(!empty($file)){
            $data['avatar'] = $file->getClientOriginalName();
        }

        $data['email'] = $data['email'] ?? $user->email;
//        $data['email'] ??= $user->email;

        $data['password'] = $data['password'] ?? $user->password;
        $data['phone'] = $data['phone'] ?? $user->phone;
        $data['address'] = $data['address'] ?? $user->address;
        $data['avatar'] = $data['avatar'] ?? $user->avatar;

        if($user->update($data)) {
            if($request->hasFile('avatar')){
                $request->file('avatar')->storePubliclyAs('admin/avatar', $file->getClientOriginalName(),'public');
            }
            return redirect()->back()->with('success', __('Update Profile Success!'));
        }else {
            return redirect()->back()->withErrors(__('Update Profile Fail!'));
        }

    }

}
