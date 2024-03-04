<?php

namespace App\Http\Controllers\Customer;
use App\Models\customer;
use App\Models\TransactionTypes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;


class CustomerController extends Controller
{
    //
    public function dashboard(){
        return view('customers.dashboard');
    }
    public function profile(){
        return view('customers.profile');
    }
    public function sendMoney(){
        return view('customers.send_money');
    }
    public function editProfile(){
        return view('customers.editProfile');
    }
    public function editProfileBackend(Request $request){
        // die(var_dump($request));
        
        $request->validate([
            'first_name' => ['required', 'max:100'],
            'last_name' => ['required', 'max:100'],
            'username' => ['required', 'max:100', 'unique:'.customer::class],
            'number' => ['required', 'max:100'],
        ]);

        $user = Auth::user();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->phone_number = $request->number;
        $user->save();

        //  set a success toast, with a title
        toastr()->success('User Info has been updated succesfully!', 'Congrats');
        return redirect()->back();
        
    }

    public function changePassword(){
        return view('customers.changePassword');
    }

    public function changePasswordBackend(Request $request){
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);
        toastr()->success('Password has been updated succesfully!', 'Congrats');
        return redirect()->back();
    }

    public function sendMoneyBackend(Request $request){
        
        // fetch the sender info
        $sender = auth('customer')->user();

        $request->validate([
            'acc_num' => 'required|exists:customer,account_number',
            'amount'  => 'required|numeric|min:1',
        ]);
        // fetch the recipient info
        $recipient = customer::where('account_number', $request->acc_num)->first();


        if($request->acc_num === $sender['account_number']){
            return redirect()->back()->withErrors(['acc_num' => "You can't send money to yourself"]);
        }
        if($sender->account_balance < $request['amount']){
            return redirect()->back()->withErrors(['amount' => 'You have insufficient balance']);
        }

        $senderFinalBalance = $sender->account_balance - $request->amount;
        $recipientFinalBalance = $recipient->account_balance + $request->amount;

        $senderPreviousBalance = $sender->account_balance;
        $recipientPreviousBalance = $recipient->account_balance;

        // increase and decreace amount 
        $sender->decrement('account_balance',$request->amount);
        $recipient->increment('account_balance',$request->amount);


        $senderTransaction  = TransactionTypes::create([
            'customer_id' => $sender->customer_id,
            'sender_id' => $sender->customer_id,
            'recipient_id' => $recipient->customer_id,
            'transaction_type' => "DEBIT",
            'previous_balance' => $senderPreviousBalance,
            'transaction_amout' => $request->amount,
            'final_balance' => $senderFinalBalance,
        ]);
        event(new Registered($senderTransaction));
        
        $recipientTransaction  = TransactionTypes::create([
            'customer_id' => $recipient->customer_id,
            'sender_id' => $sender->customer_id,
            'recipient_id' => $recipient->customer_id,
            'transaction_type' => "CREDIT",
            'previous_balance' => $recipientPreviousBalance,
            'transaction_amout' => $request->amount,
            'final_balance' => $recipientFinalBalance,
        ]);
        event(new Registered($recipientTransaction ));

       return redirect()->back();   
    }

    public function customerTransaction(){
        $customerId = Auth::user()->customer_id;
        $transactionDetails = TransactionTypes::where('customer_id', $customerId)->get();
        // $getCustomerInfo = DB::table('customer')->where('customer_id', $transactionDetails[0]['sender_id'])->get();
        // die(var_dump($getCustomerInfo[0]));
        return view('customers.transactions', compact('transactionDetails'));
    }

    public function TransactionExport(){
        return Excel::download(new TransactionExport, 'Transacrions.xlsx');
    }

    public function loanApplication(){
        return view('customers.loan.application');
    }
}
