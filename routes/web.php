<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AccountTypeController;
use App\Http\Controllers\Admin\LoanTypeController;
use App\Http\Controllers\Admin\LoanStatController;


use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\Backend\LoanController;
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


        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        
        Route::get('/edit/profile', [AdminController::class, 'editProfile'])->name('admin.edit.profile');
        Route::post('/edit/profile', [AdminController::class, 'editProfileBackend']);

        Route::get('/change/password', [AdminController::class, 'changePassword'])->name('admin.change.password');
        Route::post('/change/password', [AdminController::class, 'changePasswordBackend']);

        Route::get('/view/customers', [UserController::class, 'viewCustomer'])->name('admin.view.customer');

        Route::get('/edit/customer/{id}', [UserController::class, 'editCustomer'])->name('admin.edit.customer');
        Route::post('/edit/customer/{id}', [UserController::class, 'editCustomerBackend']);
        
        Route::get('/delete/customer/{id}', [UserController::class, 'deleteCustomer'])->name('admin.delete.customer');

        Route::get('/add/customer', [UserController::class, 'addCustomer'])->name('admin.add.customer');
        
        Route::get('/add/account/type', [AccountTypeController::class, 'addAccountType'])->name('admin.add.type');
        Route::post('/add/account/type', [AccountTypeController::class, 'addAccountTypeBackend']);
        
        Route::get('/manage/account/type', [AccountTypeController::class, 'manageAccountType'])->name('admin.manage.type');
        
        Route::get('/edit/account/type/{hash_id}', [AccountTypeController::class, 'editAccountType'])->name('admin.edit.account.type');
        Route::post('/edit/account/type/{hash_id}', [AccountTypeController::class, 'editAccountTypeBackend']);
        Route::get('/delete/account/type/{hash_id}', [AccountTypeController::class, 'deleteAccountType'])->name('admin.delete.account.type');
       
       
        Route::get('/add/loan/type', [LoanTypeController::class, 'addLoanType'])->name('add.loan.type');
        Route::post('/add/loan/type', [LoanTypeController::class, 'addLoanTypeBackend']);

        Route::get('/edit/loan/{hash_id}', [LoanTypeController::class, 'editLoanType'])->name('edit.loan.type');
        Route::PUT('/edit/loan/{hash_id}', [LoanTypeController::class, 'editLoanTypeBackend']);
        
        Route::get('/delete/loan/{hash_id}', [LoanTypeController::class, 'deleteLoanType'])->name('delete.loan.type');
       
        Route::get('/view/unapproved/loan', [LoanStatController::class, 'unapprovedLoan'])->name('unapproved.loan');
        Route::get('/view/approved/loan', [LoanStatController::class, 'approvedLoan'])->name('approved.loan');

        Route::post('/loan/{hash_id}/approval', [LoanStatController::class,'approveLoan'])->name('approve.loan');


        Route::get('/loan/summary/{hash_id}', [LoanStatController::class, 'loanSummary'])->name('loan.summary');
    });

});

Route::group(['prefix' => 'customer'], function() {

    Route::middleware(['auth:customer'])->group(function() {
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        
        Route::get('/send_money', [CustomerController::class, 'sendMoney'])->name('customer.send.money');
        Route::post('/send_money', [CustomerController::class, 'sendMoneyBackend']);
        
        Route::get('/transaction', [CustomerController::class, 'customerTransaction'])->name('customer.transaction');
        Route::get('/transaction/export', [CustomerController::class, 'TransactionExport']);

        Route::get('/profile', [CustomerController::class, 'profile'])->name('customer.profile');
        
        Route::get('/edit/profile', [CustomerController::class, 'editProfile'])->name('customer.edit.profile');
        Route::post('/edit/profile', [CustomerController::class, 'editProfileBackend']);

        Route::get('/change/password', [CustomerController::class, 'changePassword'])->name('customer.change.password');
        Route::post('/change/password', [CustomerController::class, 'changePasswordBackend']);
        
        Route::get('/loan/application', [LoanController::class, 'loanApplication'])->name('loan.application');
        Route::post('/loan/application', [LoanController::class, 'loanApplicationBackend']);
        Route::get('/view/loan/application', [LoanController::class, 'viewLoanApplication'])->name('view.loan.application');

});


});


require __DIR__.'/customerAuth.php';
require __DIR__.'/adminAuth.php';
