<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;

class UserController extends Controller
{
    //
    public function viewCustomer(){
        $customers = customer::latest()->get();
        
        return view('admin.customers.viewCustomer', compact('customers'));
    }

    public function editCustomer($id){
        $customer = customer::findOrFail($id);
        return view('admin.customers.editCustomer', compact('customer'));
    }
    public function addCustomer(){
        return view('admin.customers.addCustomer');
    }
}
