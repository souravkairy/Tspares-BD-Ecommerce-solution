<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	return view('backend/admin/product/product');
    }
    public function AddProduct()
    {
    	return view('backend/admin/product/add_product');
    }
}
