<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\customer;
use Illuminate\Http\Request;



class UserController extends Controller
{
    //

    public function viewCustomer()
{
    $customers = Customer::with('accountTypeeee')->latest()->get();

    // die(var_dump($customers[1]));

    return view('admin.customers.viewCustomer', compact('customers'));
}


    public function editCustomer($id){
        $customer = customer::findOrFail($id);
        return view('admin.customers.editCustomer', compact('customer'));
    }

    public function editCustomerBackend(Request $request, $id){
        $customer = customer::findOrFail($id);
        $update = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'account_type' => 'required',
        ]);

        $customer->update([
            'first_name' => $update['first_name'],
            'last_name' => $update['last_name'],
            'username' => $update['user_name'],
            'email' => $update['email'],
            'phone_number' => $update['phone_number'],
            'account_type_name' => $update['account_type'],
        ]);
        toastr()->success("Customer Information updated succesfully!", "Congrats");
        return redirect()->route('admin.view.customer');
       
    }

    public function addCustomer(){
        return view('admin.customers.addCustomer');
    }
}
