<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\SubCategory;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;
use session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $products = Product::all();
        return view('backend/admin/product/product')->with('products', $products);
    }

    // SubCategory by ajax
    public function subcategory($p_category_id)
    {
        $subcategory = DB::table('sub_categories')->where("category_id", $p_category_id)->get();
        return json_encode($subcategory);
    }
    public function AddProduct()
    {
        $brands = Brand::all();
        $p_color = ProductColor::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend/admin/product/add_product', compact('p_color', 'brands', 'categories', 'subcategories'));
    }
    public function save_project(request $request)
    {
        $validated = $request->validate([
            'p_name' => 'required|max:255',
            'p_desc' => 'required',
            'p_category_id' => 'required',
            'p_price' => 'required',
            'p_status' => 'required',
            // 'p_f_img' => 'required',
        ]);

        if ($validated) {
            $data = new Product;
            $color = new ProductImage;

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
            $data['p_featured'] = $request->p_featured;
            $data['p_flash_sell'] = $request->p_flash_sell;
            $data['status'] = 1;
            $data->save();
            $data->id;
            $product_id =  Product::where('id',$data->id)->first();
                if ($product_id) {
                    $notification = array(
                        'message' => 'Successfully Product Uploaded ',
                        'alert-type' => 'success',
                    );
                    return Redirect::to('edit-product/'.$data->id)->with($notification);
                } else {
                    $notification = array(
                        'message' => 'Error ',
                        'alert-type' => 'error',
                    );
                    return Redirect::to('/admin-products')->with($notification);
                }



        }
    }
    public function view_product($id)
    {
        $viewProduct = Product::find($id);
        $fetchCategory = Category::find($viewProduct->p_category_id);
        $fetchSubCategory = SubCategory::where('category_id', $fetchCategory->id)->first();
        $fetchBrand = Brand::find($viewProduct->p_brand_id);
        return view('backend/admin/product/view')->with('viewProduct', $viewProduct)->with('category', $fetchCategory)->with('brand', $fetchBrand)->with('fetchSubCategory', $fetchSubCategory);

    }
    public function edit_product($id)
    {
        $p_images = ProductImage::where('product_id',$id)->get();
        $fetchProduct = Product::find($id);
        $fetchCategory = Category::all();
        $ProductColor = ProductColor::all();
        $fetchSubcategory = SubCategory::all();
        $fetchBrand = Brand::all();
        return view('backend/admin/product/edit')->with('subcategories', $fetchSubcategory)->with('categories', $fetchCategory)->with('brands', $fetchBrand)
            ->with('fetchProduct', $fetchProduct)->with('ProductColor', $ProductColor)->with('p_images', $p_images);
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

        $old_p_f_img = $request->old_p_f_img;
        $old_p_img1 = $request->old_p_img1;
        $old_p_img2 = $request->old_p_img2;
        $old_p_img3 = $request->old_p_img3;
        $old_p_img4 = $request->old_p_img4;

        if ($p_f_img) {
            unlink($old_p_f_img);
            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;
        }

        if ($p_img1) {
            unlink($old_p_img1);
            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;
        }

        if ($p_img2) {
            unlink($old_p_img2);
            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;
        }

        if ($p_img3) {
            $image_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image_path)) {
                unlink($old_p_img3);
            }

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;
        }

        if ($p_img4) {
            $image_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image_path)) {
                unlink($old_p_img4);
            }

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

        if ($p_f_img && $p_img1) {
            unlink($old_p_f_img);
            unlink($old_p_img1);

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;
        }

        if ($p_f_img && $p_img2) {
            unlink($old_p_f_img);
            unlink($old_p_img2);

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;
        }

        if ($p_f_img && $p_img3) {

            $image_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image_path)) {
                unlink($old_p_img3);
            }

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;
        }

        if ($p_f_img && $p_img4) {

            $image_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image_path)) {
                unlink($old_p_img4);
            }

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

        if ($p_img1 && $p_img2) {
            unlink($old_p_img1);
            unlink($old_p_img2);

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;
        }

        if ($p_img1 && $p_img3) {

            $image_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image_path)) {
                unlink($old_p_img3);
            }

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;
        }

        if ($p_img1 && $p_img4) {

            $image_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image_path)) {
                unlink($old_p_img4);
            }

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

        if ($p_img2 && $p_img3) {
            $image_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image_path)) {
                unlink($old_p_img3);
            }

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;
        }

        if ($p_img2 && $p_img4) {
            $image_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image_path)) {
                unlink($old_p_img4);
            }

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

        if ($p_img3 && $p_img4) {
            $image_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image_path)) {
                unlink($old_p_img3);
            }

            $image_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image_path)) {
                unlink($old_p_img4);
            }

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

        if ($p_f_img && $p_img1 && $p_img2) {
            unlink($old_p_f_img);
            unlink($old_p_img1);
            unlink($old_p_img2);

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;
        }

        if ($p_f_img && $p_img1 && $p_img2 && $p_img3) {
            unlink($old_p_f_img);
            unlink($old_p_img1);
            unlink($old_p_img2);

            $image_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image_path)) {
                unlink($old_p_img3);
            }

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;
        }

        if ($p_f_img && $p_img1 && $p_img2 && $p_img4) {
            unlink($old_p_f_img);
            unlink($old_p_img1);
            unlink($old_p_img2);

            $image_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image_path)) {
                unlink($old_p_img4);
            }

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

        if ($p_f_img && $p_img1 && $p_img2 && $p_img3 && $p_img4) {
            unlink($old_p_f_img);
            unlink($old_p_img1);
            unlink($old_p_img2);

            $image3_path = public_path() . '/' . $old_p_img3;
            if (@getimagesize($image3_path)) {
                unlink($old_p_img3);
            }

            $image4_path = public_path() . '/' . $old_p_img4;
            if (@getimagesize($image4_path)) {
                unlink($old_p_img4);
            }

            $featured = hexdec(uniqid()) . '.' . $p_f_img->getClientOriginalExtension();
            Image::make($p_f_img)->resize(280, 350)->save('productImage/' . $featured);
            $data['p_f_img'] = 'productImage/' . $featured;

            $project_image1 = hexdec(uniqid()) . '.' . $p_img1->getClientOriginalExtension();
            Image::make($p_img1)->resize(280, 350)->save('productImage/' . $project_image1);
            $data['p_img1'] = 'productImage/' . $project_image1;

            $project_image2 = hexdec(uniqid()) . '.' . $p_img2->getClientOriginalExtension();
            Image::make($p_img2)->resize(280, 350)->save('productImage/' . $project_image2);
            $data['p_img2'] = 'productImage/' . $project_image2;

            $project_image3 = hexdec(uniqid()) . '.' . $p_img3->getClientOriginalExtension();
            Image::make($p_img3)->resize(280, 350)->save('productImage/' . $project_image3);
            $data['p_img3'] = 'productImage/' . $project_image3;

            $project_image4 = hexdec(uniqid()) . '.' . $p_img4->getClientOriginalExtension();
            Image::make($p_img4)->resize(280, 350)->save('productImage/' . $project_image4);
            $data['p_img4'] = 'productImage/' . $project_image4;
        }

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

    public function save_p_image(request $request)
    {
        $data = new ProductImage;
        $data['product_id'] = $request->product_id;
        $data['color'] = $request->color;
        $data['status'] = $request->status;

        $image = $request->image;
        $featured = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(280, 350)->save('productImage/' . $featured);
        $data['image'] = 'productImage/' . $featured;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'successfull',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('admin-products')->with($notification);
        }


    }
    public function delete_p_image($id)
    {

        $product = ProductImage::find($id);
        $success = $product->delete();
        if ($success) {
            $notification = array(
                'message' => 'successfull',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function delete_product($id)
    {
        $product = Product::find($id);

        $p_f_img = $product->p_f_img;
        $p_img1 = $product->p_img1;
        $p_img2 = $product->p_img2;
        $p_img3 = $product->p_img3;
        $p_img4 = $product->p_img4;

        $image_f_path = public_path() . '/' . $p_f_img;
        if (@getimagesize($image_f_path)) {
            unlink($p_f_img);
        }

        $image1_path = public_path() . '/' . $p_img1;
        if (@getimagesize($image1_path)) {
            unlink($p_img1);
        }

        $image2_path = public_path() . '/' . $p_img2;
        if (@getimagesize($image2_path)) {
            unlink($p_img2);
        }

        $image3_path = public_path() . '/' . $p_img3;
        if (@getimagesize($image3_path)) {
            unlink($p_img3);
        }

        $image4_path = public_path() . '/' . $p_img4;
        if (@getimagesize($image4_path)) {
            unlink($p_img4);
        }

        $success = $product->delete();
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
        $products = Product::where('p_flash_sell', 1)->get();
        return view('backend/admin/product/flashSell')->with('products', $products);
    }
    // public function save_test(request $request)
    // {
    //     if ($request->ajax()) {

    //         $image = $request->first_name;
    //         $color = $request->last_name;
    //         for ($count = 0; $count < count($color); $count++) {
    //             $data = array(
    //                 'image' => $image[$count],
    //                 'color' => $color[$count],
    //             );
    //             $insert_data[] = $data;
    //         }

    //         ProductImage::insert($insert_data);
    //         return response()->json([
    //             'success' => 'Data Added successfully.',
    //         ]);
    //     }
    // }
}
