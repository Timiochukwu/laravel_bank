<?php

namespace App\Http\Controllers\admin;


use App\Models\LoanType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanTypeController extends Controller
{
    //

    public function addLoanType(){
        $loanType = LoanType::latest()->get();
        return view('admin.loan_type.all_loan_type', compact('loanType'));
    }
    public function addLoanTypeBackend(Request $request){
        $validate = $request->validate([
            'input_name' => ['required', 'string', 'max:50', 'unique:'.LoanType::class],
        ]);

        $loanType = new LoanType();

        $loanType->hash_id = rand(000000, 999999);
        $loanType->input_name = $validate['input_name'];
        
        $loanType->save();

        toastr()->success("Loan Applied succesfully!", "Congrats");
        return redirect()->back();
        
    }

    public function editLoanType($hash_id){
        $loanType = LoanType::findOrFail($hash_id);
        // die(var_dump($loanType));

        return view('admin.loan_type.edit_loan_type', compact('loanType'));    
    }
    public function editLoanTypeBackend(Request $request, $hash_id){
        $loanType = LoanType::findOrFail($hash_id);
        $validateLoanType = $request->validate([
            'input_name' => ['required', 'max:20', 'string', 'unique:'.LoanType::class]
        ]);

        $loanType->update([
            'input_name' => $validateLoanType['input_name'],
        ]);
        toastr()->success("Loan Types updated succesfully!", "Congrats");
        return redirect()->route('add.loan.type');
    }

    public function deleteLoanType(LoanType $hash_id ){
        // die(var_dump($hash_id));
        $hash_id->delete();
        toastr()->success("Loan Types deleted succesfully!", "Congrats");
        return redirect()->back();
    }
}
