<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->limit(12)->latest()->get();

        return view('frontend.pages.index', compact('products'));
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
        $products = Product::where('status', 1)->latest()->get();
    	return view('frontend/pages/products', compact('products'));
    }

    

    
}
