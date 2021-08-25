<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cart;
use Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shipping()
    {
        return view('frontend.pages.shipping');
    }


    public function Checkout()
    {
        $cart_products = Cart::content();
        return view('frontend.pages.checkout', compact('cart_products'));
    }


    public function Payment(Request $request)
    {
        // $data = array();
        // $data['payment'] = $request->payment_type;

        if ($request->payment_type == 'Cradit cart') {
            return view('frontend.pages.payment.credit');

        } else {
            echo "handcash";
        }

    }
}
