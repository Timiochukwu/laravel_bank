<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;


use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\Backend\TransactionTypeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('customers/auth/login');
});


Route::group(['prefix' => 'admin'], function() {
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
        Route::get('/view/customers', [UserController::class, 'viewCustomer'])->name('admin.view.customer');
        Route::get('/edit/customer/{id}', [UserController::class, 'editCustomer'])->name('admin.edit.customer');

        Route::get('/add/customer', [UserController::class, 'addCustomer'])->name('admin.add.customer');
    });

});

Route::group(['prefix' => 'customer'], function() {

    Route::middleware(['auth:customer'])->group(function() {
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('/send_money', [CustomerController::class, 'sendMoney'])->name('customer.send');
        Route::post('/send_money', [CustomerController::class, 'sendMoneyBackend'])->name('customer.send');

});


});


require __DIR__.'/customerAuth.php';
require __DIR__.'/adminAuth.php';
