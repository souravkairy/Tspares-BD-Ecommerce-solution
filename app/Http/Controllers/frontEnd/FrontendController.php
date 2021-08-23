<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

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

    

    
}
