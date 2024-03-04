<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //]
    public function adminDashboard(){
        return view('admin.dashboard');
    }
    public function profile(){
        return view('admin.profile.view');
    }

    public function editProfile(){
        return view('admin.profile.edit');
    }
    public function changePassword(){
        return view('admin.profile.changePassword');
    }

    public function changePasswordBackend(Request $request){
        // die(var_dump($request->user()));
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        toastr()->success('Password has been updated succesfully!', 'Congrats');
        return redirect()->back();
    }

    public function editProfileBackend(Request $request ){
        // die(var_dump( $request));
        $request->validate([
            'firstName' => ['required', 'string', 'max:100'],
            'middleName' => ['required', 'string', 'max:100'],
            'lastName' => ['required', 'string', 'max:100'],
            'username' => ['required', 'max:100', 'unique:'.admin::class],
            'phone_number' => ['required','string', 'max:11', 'unique:'.admin::class],
        ]);

        $name = $request->firstName." ".$request->middleName." ".$request->lastName;
        $updateProfile = Auth::user();

        $updateProfile->admin_name = $name;
        $updateProfile->username = $request->username;
        $updateProfile->phone_number = $request->phone_number;
        $updateProfile->save();

        //  set a success toast, with a title
        toastr()->success('User Info has been updated succesfully!', 'Congrats');
        return redirect()->back();
        
        
    }

}
