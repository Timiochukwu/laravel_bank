<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\customer;
use App\Models\LoanApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanStatController extends Controller
{
    //
    public function unapprovedLoan(){
        $approvedLoan = LoanApplication::with('customerInfo', 'loanTypeee')->where('visibility', '1')
        ->where('status', 'unapproved')
        ->get();
        // dd($approvedLoan);

        return view('admin.loan_application.all', compact('approvedLoan'));
       
    }
    public function approvedLoan(){
        $approvedLoan = LoanApplication::with('customerInfo', 'loanTypeee')->where('visibility', '1')
        ->where('status', 'approved')
        ->get();
        // dd($approvedLoan);

        return view('admin.loan_application.approved', compact('approvedLoan'));
        
    }

    public function approveLoan(Request $request, $hashId){
        
        $loanAmount = $request->loanAmount;
        $customerId = $request->customerId;
        $customerInfo = customer::findOrFail($customerId);
        // dd($customerInfo);
        $loanApplication = loanApplication::findOrFail ($hashId);

        $newBalance = $loanAmount + $customerInfo->account_balance;
          // dd($cusomerInfo);
        $customerInfo->update([
            'account_balance' => $newBalance,
        ]);
        $loanApplication->update([
            'status' => 'approved',
        ]);
        toastr()->success("Loan Types updated succesfully!", "Congrats");
        return redirect()->route('unapproved.loan');
    }

    public function loanSummary($hashId){
        $loanSummary = LoanApplication::findOrFail($hashId);

        // dd($loanSummary);

        return view('admin.loan_application.summary',compact('loanSummary'));
    }
}
