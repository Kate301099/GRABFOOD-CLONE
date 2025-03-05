<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $user =Auth::user();
        return view('admin.profile',compact('user',));
    }

    public function update(UpdateProfileRequest $request) {
        $user = Auth::user();

        $data =$request->validated();

        $data['email'] = $data['email'] ?? $user->email;
//        $data['email'] ??= $user->email;

        $data['password'] = $data['password'] ?? $user->password;

        if($user->update($data)) {
            return redirect()->back()->with('success', __('Update Profile Success!'));
        }else {
            return redirect()->back()->withErrors(__('Update Profile Fail!'));
        }
    }
}
