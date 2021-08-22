<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('frontend/pages/index');
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

    public function ProductDetails()
    {
    	return view('frontend/pages/productdetails');
    }

    public function Products()
    {
    	return view('frontend/pages/products');
    }

    
}
