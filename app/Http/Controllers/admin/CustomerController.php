<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::paginate(5);

        return view('admin.customer', compact('customers'));

    }

    public function destroy(Customer $customer){

        $customer->addresses()->delete();
        $customer->delete();
        return redirect()->route('admin.customer')->with('success', 'Customer has been deleted');
    }
}
