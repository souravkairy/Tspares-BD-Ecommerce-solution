<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class WishlistController extends Controller
{
    public function add_wishlist($id)
    {
    	$userid = Auth::id();
    	$check = DB::table('wishlist')->where('user_id',$userid)->where('product_id',$id)->first();

    	$data = array();
    	$data['user_id'] = $userid;
    	$data['product_id'] = $id;

    	if(Auth::check()){
    		if($check){
    			$notification=array(
		             'message'=>'Product Already has on your wishlist',
		             'alert-type'=>'error'
		            );
		        return Redirect()->back()->with($notification);
    		}else{
    			DB::table('wishlist')->insert($data);
		        $notification=array(
		             'message'=>'Product Added To Wishlist',
		             'alert-type'=>'success'
		            );
		        return Redirect()->back()->with($notification);
    		}
    	}else{
    		$notification=array(
		             'message'=>'At first login your account',
		             'alert-type'=>'error'
		            );
		    return Redirect()->back()->with($notification);;
    	}
    }

    public function DeleteWishlist($id)
    {
        $delete = DB::table('wishlist')->where('product_id',$id)->delete();
        $notification=array(
                 'message'=>'Successfully Wishlist Deleted ',
                 'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }

}
