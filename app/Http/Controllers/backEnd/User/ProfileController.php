<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function Profile()
    {
      $user = DB::table('users')->where('id', Auth::id())->first();
    	return view('frontend/pages/UserInfo/userProfile',compact('user'));
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

    public function EditInfo($id)
    {
      $user = DB::table('users')->where('id', $id)->first();
    	return view('frontend/pages/UserInfo/editinfo',compact('user'));
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
