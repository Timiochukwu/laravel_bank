<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticateCustomerSessionController extends Controller
{
    //
    public function login(): View{
        return view('customers.auth.login');

    }
    public function loginCustomer(LoginRequest $request) : RedirectResponse{
        $loginField = $request->input('login');
        $password = $request->input('password');

    
        
        $loginInfo = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($loginInfo)) {
            $request->session()->regenerate();
          

            return redirect()->route('customer.dashboard');

        }
        return redirect()->route('customer.login')->withErrors(['email' => 'Invalid Information']);
    }

}
