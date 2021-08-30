<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use DB;
use Image;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $products = Product::all();
        return view('backend/admin/product/product')->with('products',$products);
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
            'p_status' => 'required',
            'p_f_img' => 'required',
            'p_img1' => 'required',
            'p_img2' => 'required',
        ]);

        if ($validated) {
            $data = array();
            $data['p_name'] = $request->p_name;
            $data['p_name_arabic'] = $request->p_name_arabic;
            $data['p_desc'] = $request->p_desc;
            $data['p_desc_arabic'] = $request->p_desc_arabic;
            $data['p_category_id'] = $request->p_category_id;
            $data['p_sub_category_id'] = $request->p_sub_category_id;
            $data['p_price'] = $request->p_price;
            $data['p_stock'] = $request->p_stock;
            $data['p_size'] = $request->p_size;
            $data['p_o_price'] = $request->p_o_price;
            $data['p_brand_id'] = $request->p_brand_id;
            $data['p_o_p_s_date'] = $request->p_o_p_s_date;
            $data['p_o_p_e_date'] = $request->p_o_p_e_date;
            $data['p_color'] = $request->p_color;
            $data['p_featured'] = $request->p_featured;
            $data['p_flash_sell'] = $request->p_flash_sell;
            $data['status'] = 1;

            $p_f_img = $request->p_f_img;
            $p_img1 = $request->p_img1;
            $p_img2 = $request->p_img2;
            $p_img3 = $request->p_img3;
            $p_img4 = $request->p_img4;

            if($p_f_img && $p_img1 && $p_img2) {
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            DB::table('products')->insert($data);
            $notification=array(
                 'message'=>'Successfully Product Uploaded ',
                 'alert-type'=>'success'
                );
            return Redirect::to('/admin-products')->with($notification);
            }

            if($p_f_img && $p_img1 && $p_img2 && $p_img3){
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            $project_image3= hexdec(uniqid()).'.'.$p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280,350)->save('productImage/'.$project_image3);
            $data['p_img3']='productImage/'.$project_image3;

            DB::table('products')->insert($data);
            $notification=array(
                 'message'=>'Successfully Product Uploaded ',
                 'alert-type'=>'success'
                );
            return Redirect::to('/admin-products')->with($notification);
            }

            if($p_f_img && $p_img1 && $p_img2 && $p_img4){
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            $project_image4= hexdec(uniqid()).'.'.$p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280,350)->save('productImage/'.$project_image4);
            $data['p_img4']='productImage/'.$project_image4;

            DB::table('products')->insert($data);
            $notification=array(
                 'message'=>'Successfully Product Uploaded ',
                 'alert-type'=>'success'
                );
            return Redirect::to('/admin-products')->with($notification);
            }

            if($p_f_img && $p_img1 && $p_img2 && $p_img3 && $p_img4){
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            $project_image3= hexdec(uniqid()).'.'.$p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280,350)->save('productImage/'.$project_image3);
            $data['p_img3']='productImage/'.$project_image3;

            $project_image4= hexdec(uniqid()).'.'.$p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280,350)->save('productImage/'.$project_image4);
            $data['p_img4']='productImage/'.$project_image4;

            DB::table('products')->insert($data);
            $notification=array(
                 'message'=>'Successfully Product Uploaded ',
                 'alert-type'=>'success'
                );
            return Redirect::to('/admin-products')->with($notification);
           }

        }
    }
    public function view_product($id)
    {
        $viewProduct = Product::find($id);
        $fetchCategory = Category::find($viewProduct->p_category_id);
        $fetchSubCategory = SubCategory::where('category_id',$fetchCategory->id)->first();
        $fetchBrand = Brand::find($viewProduct->p_brand_id);
        return view('backend/admin/product/view')->with('viewProduct',$viewProduct)->with('category',$fetchCategory)->with('brand',$fetchBrand)->with('fetchSubCategory',$fetchSubCategory);

    }
    public function edit_product($id)
    {
        $fetchProduct = Product::find($id);
        $fetchCategory = Category::all();
        $fetchSubcategory = SubCategory::all();
        $fetchBrand = Brand::all();
        return view('backend/admin/product/edit')->with('subcategories',$fetchSubcategory)->with('categories',$fetchCategory)->with('brands',$fetchBrand)
        ->with('fetchProduct',$fetchProduct);
    }
    public function update_product(request $request)
    {

        $id = $request->id;
        $data = Product::find($id);
        $data['p_name'] = $request->p_name;
        $data['p_name_arabic'] = $request->p_name_arabic;
        $data['p_desc'] = $request->p_desc;
        $data['p_desc_arabic'] = $request->p_desc_arabic;
        $data['p_category_id'] = $request->p_category_id;
        $data['p_sub_category_id'] = $request->p_sub_category_id;
        $data['p_price'] = $request->p_price;
        $data['p_stock'] = $request->p_stock;
        $data['p_size'] = $request->p_size;
        $data['p_o_price'] = $request->p_o_price;
        $data['p_brand_id'] = $request->p_brand_id;
        $data['p_o_p_s_date'] = $request->p_o_p_s_date;
        $data['p_o_p_e_date'] = $request->p_o_p_e_date;
        $data['p_color'] = $request->p_color;
        $data['p_featured'] = $request->p_featured;
        $data['p_flash_sell'] = $request->p_flash_sell;
        $data['status'] = 1;

        $p_f_img = $request->p_f_img;
        $p_img1 = $request->p_img1;
        $p_img2 = $request->p_img2;
        $p_img3 = $request->p_img3;
        $p_img4 = $request->p_img4;

        $old_p_f_img=$request->old_p_f_img;
        $old_p_img1=$request->old_p_img1;
        $old_p_img2=$request->old_p_img2;
        $old_p_img3=$request->old_p_img3;
        $old_p_img4=$request->old_p_img4;

        if($p_f_img) {
            unlink($old_p_f_img);
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

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
        }

        if($p_img1) {
            unlink($old_p_img1);
            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

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
        }

        if($p_img2) {
            unlink($old_p_img2);
            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

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
        }

        if($p_img3) {
            // if($request->has('old_p_img3')) {
            //   unlink($old_p_img3);
            // }
            $project_image3= hexdec(uniqid()).'.'.$p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280,350)->save('productImage/'.$project_image3);
            $data['p_img3']='productImage/'.$project_image3;

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
        }

        if($p_img4) {
            // if($request->has('old_p_img4')) {
            //   unlink($old_p_img4);
            // }
            $project_image4= hexdec(uniqid()).'.'.$p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280,350)->save('productImage/'.$project_image4);
            $data['p_img4']='productImage/'.$project_image4;

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
        }

        if($p_f_img  && $p_img1) {
            unlink($old_p_f_img);
            unlink($old_p_img1);

            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

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
        }

        if($p_f_img  && $p_img2) {
            unlink($old_p_f_img);
            unlink($old_p_img2);

            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

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
        }

        if($p_f_img  && $p_img3) {
            unlink($old_p_f_img);
            // if($request->has('old_p_img3')) {
            //   unlink($old_p_img3);
            // }

            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image3= hexdec(uniqid()).'.'.$p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280,350)->save('productImage/'.$project_image3);
            $data['p_img3']='productImage/'.$project_image3;

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
        }

        if($p_f_img  && $p_img4) {
            unlink($old_p_f_img);

            // if($request->has('old_p_img4')) {
            //   unlink($old_p_img4);
            // }
            

            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image4= hexdec(uniqid()).'.'.$p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280,350)->save('productImage/'.$project_image4);
            $data['p_img4']='productImage/'.$project_image4;

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
        }



        if($p_f_img && $p_img1 && $p_img2) {
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

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
        } if ($p_f_img && $p_img1 && $p_img2 && $p_img3) {
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            $project_image3= hexdec(uniqid()).'.'.$p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280,350)->save('productImage/'.$project_image3);
            $data['p_img3']='productImage/'.$project_image3;

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
        } if($p_f_img && $p_img1 && $p_img2 && $p_img4) {
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            $project_image4= hexdec(uniqid()).'.'.$p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280,350)->save('productImage/'.$project_image4);
            $data['p_img4']='productImage/'.$project_image4;

            $insert = $data->update();
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
        } if($p_f_img && $p_img1 && $p_img2 && $p_img3 && $p_img4) {
            $featured= hexdec(uniqid()).'.'.$p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280,350)->save('productImage/'.$featured);
            $data['p_f_img']='productImage/'.$featured;

            $project_image1= hexdec(uniqid()).'.'.$p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280,350)->save('productImage/'.$project_image1);
            $data['p_img1']='productImage/'.$project_image1;

            $project_image2= hexdec(uniqid()).'.'.$p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280,350)->save('productImage/'.$project_image2);
            $data['p_img2']='productImage/'.$project_image2;

            $project_image3= hexdec(uniqid()).'.'.$p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280,350)->save('productImage/'.$project_image3);
            $data['p_img3']='productImage/'.$project_image3;

            $project_image4= hexdec(uniqid()).'.'.$p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280,350)->save('productImage/'.$project_image4);
            $data['p_img4']='productImage/'.$project_image4;

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
        }
    }

    public function delete_product($id)
    {
        $delete = Product::find($id);
        $success = $delete->delete();
        if ($success) {
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
    }
    public function flash_sell()
    {
        $products = Product::where('p_flash_sell',1)->get();
        return view('backend/admin/product/flashSell')->with('products',$products);
    }
}
