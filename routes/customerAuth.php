<?php
use App\Http\Controllers\Customer\Auth\RegisterCustomerController;
use App\Http\Controllers\Customer\Auth\AuthenticateCustomerSessionController;

use Illuminate\Support\Facade\Support;



Route::middleware('guest')->group(function() {

Route::get('/customer/account/register', [RegisterCustomerController::class, 'create'])->name('customer.register');
Route::post('/customer/account/register', [RegisterCustomerController::class, 'store']);

Route::get('/customer/account/login', [AuthenticateCustomerSessionController::class, 'login'])->name('customer.login');
Route::post('/customer/account/login', [AuthenticateCustomerSessionController::class, 'loginCustomer']);

})

?>