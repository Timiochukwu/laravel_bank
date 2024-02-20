<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthenticateAdminSessionController extends Controller
{
    //
    public function login(): View
    {
        return view('admin.auth.login');
    }
    public function loginAdmin(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt($credentials)) {
        $request->session()->regenerate();

            return redirect()->route('admin.dashboard');

        }
        return redirect()->route('admin.login')->withErrors(['email' => 'Invalid Credentials']);
    }
}
