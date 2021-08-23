<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

use Cart;
use DB;
use Response;
use Auth;
use Session;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->limit(12)->orderBy('id', 'desc')->get();

        $plashproducts = Product::where('status', 1)->limit(12)->orderBy('id', 'desc')->get();

        return view('frontend.pages.index', compact('products', 'plashproducts'));
    }

    public function Cart()
    {
    	return view('frontend/pages/cart');
    }

    public function Wishlist()
    {
    	return view('frontend/pages/wishlist');
    }

    public function OrderTrack()
    {
    	return view('frontend/pages/ordertrack');
    }

    public function ProductDetails($id)
    {
        $product_details = Product::where('id', $id)->first();

        return view('frontend.pages.productdetails', compact('product_details'));
    }

    public function Products()
    {
        $products = Product::where('status', 1)->latest()->get();
    	return view('frontend/pages/products', compact('products'));
    }



    public function AddCart(Request $request)
    {
        $id=$request->id;
        $product=DB::table('products')->where('id',$id)->first();
        $data=array();
        if($product->p_o_price == NULL) {
                        $data['id']=$product->id;
                        $data['name']=$product->p_name;
                        $data['qty']=$request->quantity;;
                        $data['price']= $product->p_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->p_f_img;
                        $data['options']['color']=$request->p_color;
                        $data['options']['size']=$request->p_size;
                       Cart::add($data);
                       $notification=array(
                            'message'=>'Successfully Done',
                            'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
           }else{
                       $data['id']=$product->id;
                        $data['name']=$product->p_name;
                        $data['qty']=$request->quantity;;
                        $data['price']= $product->p_o_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->p_f_img;  
                        $data['options']['color']=$request->p_color;
                        $data['options']['size']=$request->p_size;
                        Cart::add($data);  
                        $notification=array(
                          'message'=>'Successfully Done',
                           'alert-type'=>'success'
                        );
                       return Redirect()->back()->with($notification);
         }
    }

    public function ShowCart()
    {
        $cart=Cart::content();
        return view('frontend/pages/cart', compact('cart'));
    }
}
