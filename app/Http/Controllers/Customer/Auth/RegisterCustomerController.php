<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\customer;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisterCustomerController extends Controller
{
    //
    public function create() : View
    {
        return view('customers.auth.register');
    }

     /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){
        
        $request->validate([
            'first_name' => ['required', 'string', 'max:225',],
            'last_name' => ['required', 'string', 'max:225'],
            'username' => ['required', 'string', 'max:225'],
            'phone_number' => ['required', 'string', 'max:225'],
            'email' => ['required', 'lowercase', 'string', 'email', 'max:225', 'unique:' . Customer::class],
            'password' => ['required', 'confirmed', Rules\Password::default()],
        ]);
        
        
        $customer = customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_number' => '309' . rand(100000000, 999999999),
            'account_balance' => '5000',
        ]);
        event(new Registered($customer));

        Auth::guard('customer')->login($customer);
        return redirect(RouteServiceProvider::CUSTOMERHOME);
    }
}
