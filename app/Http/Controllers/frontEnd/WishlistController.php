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

    public function Search(Request $request)
    {
        $brands=DB::table('brands')->get();
        $item=$request->search;
        $products=DB::table('products')
                ->join('brands','products.p_brand_id','brands.id')
                ->join('categories','products.p_category_id','categories.id')
                ->join('sub_categories','products.p_sub_category_id','sub_categories.id')
                ->select('products.*','categories.name','sub_categories.sub_cat_name')
                ->where('p_name','LIKE', "%{$item}%")
                ->orWhere('p_name_arabic','LIKE', "%{$item}%")
                ->orWhere('categories.name','LIKE', "%{$item}%")
                ->orWhere('sub_categories.sub_cat_name','LIKE', "%{$item}%")
                ->paginate(20);
        return view('frontend.pages.search',compact('brands','products')); 
    }

}
