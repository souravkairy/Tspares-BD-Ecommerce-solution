<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\order_detail;
use App\Models\shipping;
use App\Models\Review;
use App\Models\SiteSetting;

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
        $wishlist_products=DB::table('wishlist')->join('products','wishlist.product_id','products.id')->select('products.*','wishlist.user_id')->where('wishlist.user_id',Auth::id())->get();
        return view('frontend/pages/wishlist',compact('wishlist_products'));
    }

    public function OrderTrack()
    {
        $user = Auth::user('id');
        $Orders = Order::where('user_id',$user->id)->get();

        return view('frontend/pages/ordertrack')->with('Orders',$Orders);
    }

    public function ProductDetails($id)
    {
        $review = Review::where('product_id',$id)->where('status',1)->get();
        $product_details = Product::find($id);
        $brand = Brand::find($product_details->p_brand_id);
        $similar_product = Product::where('p_category_id',$product_details->p_category_id)->orWhere('p_brand_id', $product_details->p_brand_id)->limit(12)->get();

        $color = $product_details->p_color;
        $product_color = explode(',', $color);

        $size = $product_details->p_size;
        $product_size = explode(',', $size);

        return view('frontend.pages.productdetails', compact('product_details', 'product_color', 'product_size','brand','similar_product','review'));
    }

    public function Products()
    {
        $products = Product::where('status', 1)->latest()->get();
        return view('frontend/pages/products', compact('products'));
    }

    public function Products_by_sub($id)
    {
        $products = Product::where('p_sub_category_id',$id)->latest()->get();
        return view('frontend/pages/products', compact('products'));

    }
    public function Products_by_cat($id)
    {
        $products = Product::where('p_category_id',$id)->latest()->get();
        return view('frontend/pages/products', compact('products'));
    }



    public function AddCart(Request $request)
    {
        $id = $request->id;
        $qty = $request->quantity;
        $product = DB::table('products')->where('id',$id)->first();

        $carts = Cart::content();

        foreach ($carts as $cart) {
            if ($cart->id == $product->id) {
                $notification=array(
                  'message'=>'Product alreday exist in your Cart',
                   'alert-type'=>'error'
                );
               return Redirect()->back()->with($notification);
            }
        }

        if ($product->p_stock <= $qty) {
            $notification=array(
              'message'=>'Oppos Product Stock ' . $product->p_stock . ' now',
              'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

        $data=array();
        if($product->p_o_price == NULL) {
                $data['id']=$product->id;
                $data['name']=$product->p_name;
                $data['qty']=$qty;
                $data['price']= $product->p_price;
                $data['weight']=1;
                $data['options']['image']=$product->p_f_img;
                $data['options']['color']=$request->p_color;
                $data['options']['size']=$request->p_size;
                Cart::add($data);
                $notification=array (
                    'message'=>'Product Added Successfully',
                    'alert-type'=>'success'
                );
               return Redirect()->back()->with($notification);
           } else {
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
                  'message'=>'Product Added Successfully',
                   'alert-type'=>'success'
                );
               return Redirect()->back()->with($notification);
        }
    }

    public function ShowCart()
    {
        $cart_products=Cart::content();
        $total_cart_product=Cart::content()->count();
        $shipping_crg = SiteSetting::select('site_settings.shipping_crg')->first();
        return view('frontend/pages/cart', compact('cart_products', 'total_cart_product', 'shipping_crg'));
    }

    // revome siggel product by id from cart
    public function removeCart($rowId)
    {
        Cart::remove($rowId);

        $notification=array(
          'message'=>'Cart Product Removed Successfully',
          'alert-type'=>'success'
        );
       return Redirect()->back()->with($notification);
    }

    // update cart from cart page or singel_cart_product_Update page
    public function UpdateCart(Request $request)
    {
        $rowId = $request->productid;

        $product = Product::where('id', $request->product_id)->first();

        $p_stock = $request->p_stock;

        if ($product->p_stock >= $p_stock) {
            Cart::update($rowId, $p_stock);
            $notification=array(
              'message'=>'Quantity Updated',
              'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);
        } else {
            $notification=array(
              'message'=>'Oppos Product Stock ' . $product->p_stock . ' now',
              'alert-type'=>'error'
            );
           return Redirect()->back()->with($notification);
        }
    }

    // apply coupoun by users
    public function Coupon(Request $request)
    {
        $cart_total = Cart::Subtotal();
        $total = (float) str_replace(',', '', $cart_total);
        $coupon_code = $request->coupon_code;
        $check = Coupon::where('coupon_code', $coupon_code)->first();

        if ($total < $check->minimum_ammount) {
            $notification=array(
              'message'=>'Please Buy More Than $' . $check->minimum_ammount .' For apply Coupon',
              'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);
        }
        $cart_total = Cart::Subtotal();
        $total = (float) str_replace(',', '', $cart_total);

        if ( $check->discount_type == 2 ) {
           $discountValue =  ($total * $check->value)/100;
           $finalValue = $total -$discountValue;
        } else {
            $discountValue = $check->value;
            $finalValue = $total - $check->value;
        }
        if ($check) {
            session::put('coupon_code', [
                'discount_type' => $check->discount_type,
                'discount' => $discountValue,
                'balance' => $finalValue,
            ]);
            $notification=array(
              'message'=>'Successfully Coupon Applied',
              'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);
        } else {
            $notification=array(
              'message'=>'Invalid Coupon',
              'alert-type'=>'error'
            );
           return Redirect()->back()->with($notification);
        }
    }


    // remove coupoun by users
    public function CouponRemove()
    {
        session::forget('coupon_code');
        $notification=array(
              'message'=>'Successfully Coupon Removed',
              'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }
}
