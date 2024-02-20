<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;


use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisterAdminController extends Controller
{
    public function create(): View
    {
        return view('admin.auth.register');

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
     public function store(Request $request): RedirectResponse
     {
        

        $request->validate([
            'admin_name' => ['required', 'string', 'max:225'],
            'phone_number' => ['required', 'string', 'max:12'],
            'username' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);        

        $admin = Admin::create([
            'admin_name' => $request->admin_name,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($admin));
        
        Auth::guard('admin')->login($admin);

        return redirect(RouteServiceProvider::ADMINHOME);
 
     }

}
