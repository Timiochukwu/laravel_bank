<?php


namespace App\Http\Controllers\customer\backend;

use App\Models\LoanType;
use App\Models\LoanApplication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoanController extends Controller
{
    //

    public function loanApplication(){
        $loanType = LoanType::all();
        return view('customers.loan.application', compact('loanType'));
    }
    
    public function loanApplicationBackend(Request $request){
        $validate = $request->validate([
            'amount' => ['required', 'numeric', 'min:1500', 'max:5000000'],
            'bank' => ['required', 'string'],
            'account_no' => ['required', 'string', 'min:10', 'max:10'],
            'loan_type' => ['required'],
            'installment_counts' => ['required'],
            'installment_amount' => ['required'],
            'amount_plus_ten_percent' => ['required'],
        ]);

        $today = Carbon::now();
        $todayDate = $today->format('Y-m-d');

        LoanApplication::insert([
            'hash_id' => rand(000000, 999999),
            'customer_hash_id' => Auth::user()->customer_id,
            'amount' =>  $validate['amount'],
            'bank' =>  $validate['bank'],
            'account_number' =>  $validate['account_no'],
            'loan_type_id' =>  $validate['loan_type'],
            'installment_count' =>  $validate['installment_counts'],
            'installment_amount' =>  $validate['installment_amount'],
            'amount_payable' =>  $validate['amount_plus_ten_percent'],
            'date_applied' =>  $todayDate,
            'status' =>  'unapproved',
            'visibility' =>  '1',
        ]);
        toastr()->success("Loan Application Submitted Succesfully", 'Congrats');
        return redirect()->route('loan.application');
    }
    public function viewLoanApplication()
    {
        $userId = Auth::user()->customer_id;

        // Use Eloquent to retrieve LoanApplications
        $LoanApplication = LoanApplication::with('loanTypeee')->where('visibility', '1')
            ->where('customer_hash_id', $userId)
            ->get();

            // die(dd(($LoanApplication[0])));
    
        return view('customers.loan.view', compact('LoanApplication'));
    }
    

}
