<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;

use Cart;
use Auth;
use DB;
use Session;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shipping()
    {
    	$addreses = Address::where('user_id', auth()->user()->id)->get();
        return view('frontend.pages.shipping', compact('addreses'));
    }


    public function Checkout(Request $request)
    {
    	$address_id = $request->address_id;

    	$addreses = Address::where('id', $address_id)->first();

        $cart_products = Cart::content();

        return view('frontend.pages.checkout', compact('cart_products', 'addreses'));
    }


    public function Payment(Request $request)
    {
        if ($request->payment_type == 'Cradit cart') {
            return view('frontend.pages.payment.credit');

        } elseif ($request->payment_type == 'Cash') {
	        $data = array();
	        $data['user_id'] = Auth::id();
	        $data['shipping_charge'] = 0;
	        $data['tax'] = 0;

	        if(Session::has('coupon_code')){
	     		$total = Session::get('coupon_code')['balance'];
	        	$data['total'] = $total;
	        } else {
	        	$cart_total=Cart::Subtotal();
				$total = (float) str_replace(',', '', $cart_total);
				$data['total'] = $total;
	        }

	        $data['payment_method'] = $request->payment_type;
	        $data['txnID'] = 'Cash';
	        $data['tracking_code'] = mt_rand(100000, 999999);
	        $data['order_date'] = date('d-m-y');
	        $data['order_month'] = date('F');
	        $data['order_year'] = date('Y');
	        $data['status'] = 1;
	        $order_id = DB::table('orders')->insertGetId($data);

        	// insert shipping details table

	        $address_id = $request->address_id;

    		$addreses = Address::where('id', $address_id)->first();

    		$fullname = $addreses->first_name . " " . $addreses->last_name;

	        $shipping = array();
	        $shipping['order_id'] = $order_id;
	        $shipping['user_id'] = Auth::id();
	        $shipping['shipping_name'] = $fullname;
	        $shipping['division'] = $addreses->city;
	        $shipping['shipping_address'] = $addreses->street_name;
	        $shipping['shipping_city'] = $addreses->district;
	        $shipping['shipping_email'] = $addreses->email;
	        $shipping['shipping_m_num'] = $addreses->phone;
	        $shipping['status'] = 1;
	        DB::table('shippings')->insert($shipping);

        	//insert data into orderdeatils
        	$content = Cart::content();
        	$details = array();
	        foreach ($content as $row) {
	            $details['order_id'] = $order_id;
	            $details['product_id'] = $row->id;
	            $details['product_name'] = $row->name;
	            $details['color'] = $row->options->color;
	            $details['size'] = $row->options->size;
	            $details['qty'] = $row->qty;
	            $details['single_price'] = $row->price;
	            $details['total_price'] = $row->qty * $row->price;
	            DB::table('order_details')->insert($details);
	        }

	        Cart::destroy();
	        if (Session::has('coupon_code')) {
	            Session::forget('coupon_code');
	        }

	        $notification=array(
              'message'=>'Successfully Done',
               'alert-type'=>'success'
            );

            return Redirect()->to('/')->with($notification);
        } else {
            $notification=array(
              'message'=>'Please select any payment method',
               'alert-type'=>'error'
            );
            return Redirect()->route('all.cart.product')->with($notification);
        }

    }
}
