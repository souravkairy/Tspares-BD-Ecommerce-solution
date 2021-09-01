<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function AllAdmin()
    {
        $admin=DB::table('admins')->where('type',2)->get();
        return view('backend/admin/UserRole/sub_admin',compact('admin'));
    }
    public function AddAdmin()
    {
        return view('backend/admin/UserRole/add_sub_admin');
    }
    public function StoreAdmin(Request $request)
    {
    	$validated = $request->validate([
            'email' => 'required|unique:admins|max:55',
        ]);

    	 if ($validated) {
    	 	 $data=array();
	         $data['name']=$request->name;
	         $data['email']=$request->email;
	         $data['password']= Hash::make($request->password);
	         $data['products']=$request->products;
	         $data['sales']=$request->sales;
	         $data['flash_sales']=$request->flash_sales;
	         $data['coupons']=$request->coupons;
	         $data['page_content_setting']=$request->page_content_setting;
	         $data['users']=$request->users;
	         $data['role']=$request->role;
	         $data['settings']=$request->settings;
	         $data['pages']=$request->pages;
	         $data['type']=2;
	         $success = DB::table('admins')->insert($data);
	         if($success){
	         	$notification=array(
	                 'message'=>'Admin Created Successfully',
	                 'alert-type'=>'success'
	                 );
	         	return Redirect::to('/all-sub-admin')->with($notification);
	         }
    	 }else{
    	 	return Redirect::to('/add-sub-admin')->with($notification);
    	 }
         
         
    }
    public function DeleteAdmin($id)
    {
        DB::table('admins')->where('id',$id)->delete();
        $notification=array(
                 'message'=>' Admin Successfully Deleted',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }
}
