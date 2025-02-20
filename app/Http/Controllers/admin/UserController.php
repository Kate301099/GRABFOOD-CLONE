<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $data=Auth::user();
        return view('admin.user.profile',compact('data'));
    }
}
