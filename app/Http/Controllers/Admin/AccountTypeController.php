<?php

namespace App\Http\Controllers\Admin;

use App\Models\account_type;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{
    //
    public function manageAccountType(){
        $accountType = account_type::latest()->get();
        return view('admin.account_type.manage_account_type', compact('accountType'));
    }

    public function addAccountType(){
        
        return view('admin.account_type.add_account_type');
        
    }
    public function addAccountTypeBackend(Request $request){
        $validateData = $request->validate([
            'account_name' => ['required', 'string','max:255', 'unique:'.account_type::class],
            'min_open_bal' => 'required|numeric|min:1',
            'max_open_bal' => 'required|numeric|min:1',
            'min_bal' => 'required|numeric|min:1',
            'max_bal' => 'required|numeric|min:1',
        ]);
        


        $accountType = account_type::create([
            'hash_id' => rand(000,999).time(),
            'account_name' => $request->account_name,
            'minimum_opening_balance' => $request->min_open_bal,
            'maximum_opening_balance' => $request->max_open_bal,
            'expected_minimum_balance' => $request->min_bal,
            'expected_maximum_balance' => $request->max_bal,
        ]);
        event(new Registered($accountType));

        return redirect('admin.account_type.manage_account_type');

    }
}
