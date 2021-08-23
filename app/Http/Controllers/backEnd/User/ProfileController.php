<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function Profile()
    {
    	return view('frontend/pages/UserInfo/userProfile');
    }

    public function OrderDetails()
    {
    	return view('frontend/pages/UserInfo/orderDetails');
    }

    public function Address()
    {
    	return view('frontend/pages/UserInfo/userAddress');
    }

    public function Setting()
    {
    	return view('frontend/pages/UserInfo/Setting');
    }

    public function EditInfo()
    {
    	return view('frontend/pages/UserInfo/editinfo');
    }

    public function updatePassword(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                         return Redirect::to('/login-panel')->with($notification);
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }

    }
}
