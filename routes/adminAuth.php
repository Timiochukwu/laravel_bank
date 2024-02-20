<?php
use App\Http\Controllers\Admin\Auth\RegisterAdminController;
use App\Http\Controllers\Admin\Auth\AuthenticateAdminSessionController;


use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/admin/account/register', [RegisterAdminController::class, 'create'])->name('admin.register');
    Route::post('/admin/account/register', [RegisterAdminController::class, 'store']);

    Route::get('/admin/account/login', [AuthenticateAdminSessionController::class, 'login'])->name('admin.login');
    Route::post('/admin/account/login', [AuthenticateAdminSessionController::class, 'loginAdmin']);
    
})



?>