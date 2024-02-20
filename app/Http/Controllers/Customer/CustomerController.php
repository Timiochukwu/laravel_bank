<?php

namespace App\Http\Controllers\Customer;
use App\Models\customer;
use App\Models\TransactionTypes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class CustomerController extends Controller
{
    //
    public function dashboard(){
        return view('customers.dashboard');
    }
    public function sendMoney(){
        return view('customers.send_money');
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
            'sender_id' => $sender->customer_id,
            'recipient_id' => $recipient->customer_id,
            'transaction_type' => "DEBIT",
            'previous_balance' => $senderPreviousBalance,
            'transaction_amout' => $request->amount,
            'final_balance' => $senderFinalBalance,
        ]);
        event(new Registered($senderTransaction));
        
        $recipientTransaction  = TransactionTypes::create([
            'sender_id' => $sender->customer_id,
            'recipient_id' => $recipient->customer_id,
            'transaction_type' => "CREDIT",
            'previous_balance' => $recipientPreviousBalance,
            'transaction_amout' => $request->amount,
            'final_balance' => $recipientFinalBalance,
        ]);
        event(new Registered($recipientTransaction ));

       
        $update = $sender + $recipient;
       
        die(var_dump($recipientPreviousBalance, $recipientFinalBalance));


        
    }
}
