<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use DB;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Brand;
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

    // SubCategory by ajax
    public function subcategory($p_category_id)
    {
    	$subcategory = DB::table('sub_categories')->where("category_id",$p_category_id)->get();
        return json_encode($subcategory);
    }
    public function AddProduct()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend/admin/product/add_product')->with('brands',$brands)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function save_project(request $request)
    {
        $validated = $request->validate([
            'p_name' => 'required|max:255',
            'p_desc' => 'required',
            'p_category_id' => 'required',
            'p_price' => 'required',
            'p_brand_id' => 'required',
            'p_status' => 'required',
            'p_f_img' => 'required',
            'p_img1' => 'required',
            'p_img2' => 'required',
            'p_img3' => 'required',
            'p_img4' => 'required',
        ]);

        if ($validated) {
            $data = new Product;
            $data['p_name'] = $request->p_name;
            $data['p_name_arabic'] = $request->p_name_arabic;
            $data['p_desc'] = $request->p_desc;
            $data['p_desc_arabic'] = $request->p_desc_arabic;
            $data['p_category_id'] = $request->p_category_id;
            $data['p_sub_category_id'] = $request->p_sub_category_id;
            $data['p_price'] = $request->p_price;
            $data['p_o_price'] = $request->p_o_price;
            $data['p_brand_id'] = $request->p_brand_id;
            $data['p_o_p_s_date'] = $request->p_o_p_s_date;
            $data['p_o_p_e_date'] = $request->p_o_p_e_date;
            $data['p_color'] = $request->p_color;
            $data['p_featured'] = $request->p_featured;
            $data['p_flash_sell'] = $request->p_flash_sell;
            $data['status'] = 1;

            $file1 = $request->file('p_f_img')->getClientOriginalName();
            $file2 = $request->file('p_img1')->getClientOriginalName();
            $file3 = $request->file('p_img2')->getClientOriginalName();
            $file4 = $request->file('p_img3')->getClientOriginalName();
            $file5 = $request->file('p_img4')->getClientOriginalName();
            $fileName1 = $file1;
            $fileName2 = $file2;
            $fileName3 = $file3;
            $fileName4 = $file4;
            $fileName5 = $file5;
            $path = 'productImage' . "/";
            $destinationPath = $path; // upload path

            $request->file('p_f_img')->move($destinationPath, $fileName1);
            $request->file('p_img1')->move($destinationPath, $fileName2);
            $request->file('p_img2')->move($destinationPath, $fileName3);
            $request->file('p_img3')->move($destinationPath, $fileName4);
            $request->file('p_img4')->move($destinationPath, $fileName5);
            $data['p_f_img'] = '/productImage/' . $fileName1;
            $data['p_img1'] = '/productImage/' . $fileName2;
            $data['p_img2'] = '/productImage/' . $fileName3;
            $data['p_img3'] = '/productImage/' . $fileName4;
            $data['p_img4'] = '/productImage/' . $fileName5;

            $insert = $data->save();
            if ($insert) {
                $notification = array(
                    'message' => 'successfull',
                    'alert-type' => 'success',
                );
                return Redirect('admin-products')->with($notification);
            } else {
                $notification = array(
                    'message' => 'error',
                    'alert-type' => 'error',
                );
                return Redirect('admin-products')->with($notification);
            }

        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }

    }
}
