<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanStatController extends Controller
{
    //
    public function allLoan(){
        return view('admin.loan_application.all');
    }
    public function approvedLoan(){
        $loanApply = DB::table('loan_applications')->where('status', 'unapproved')->where('visibility', '1')->get();

        $customerInfo = customer::with('');
        return view('admin.loan_application.approved', compact('loanApply'));
        
    }
}
