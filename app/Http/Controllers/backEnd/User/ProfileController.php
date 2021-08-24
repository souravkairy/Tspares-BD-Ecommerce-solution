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

    public function ChangeInfo(Request $request,$id)
    {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['post_code'] = $request->post_code;
        $data['city'] = $request->city;
        $data['street_name'] = $request->street_name;
        $data['country'] = $request->country;
        $data['district'] = $request->district;
        $data['password'] = Auth::user()->password;

        DB::table('users')->where('id',$id)->update($data);
        $notification=array(
             'message'=>'Profile Updated',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }

    public function OrderDetails()
    {
      $user = DB::table('users')->where('id', Auth::id())->first();
    	return view('frontend/pages/UserInfo/orderDetails',compact('user'));
    }

    public function Address()
    {
      $user = DB::table('users')->where('id', Auth::id())->first();
    	return view('frontend/pages/UserInfo/userAddress',compact('user'));
    }

    public function ContactMessage()
    {
      $user = DB::table('users')->where('id', Auth::id())->first();
      return view('frontend/pages/UserInfo/ContactMessage',compact('user'));
    }

    public function StoreMessage(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['message'] = $request->message;

        DB::table('messages')->insert($data);
        $notification=array(
             'message'=>'Message Sent',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }

    public function Setting()
    {
      $user = DB::table('users')->where('id', Auth::id())->first();
    	return view('frontend/pages/UserInfo/Setting',compact('user'));
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
