<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $subcategories = SubCategory::join('categories','sub_categories.category_id','categories.id')->select('categories.name','sub_categories.*')->get();
        $categories = Category::all();
        return view('backend/admin/subcategory/subcategory')->with('subcategories', $subcategories)->with('categories', $categories);
    }
    public function save_sub_category(request $request)
    {
        $validatedData = $request->validate([
            'sub_cat_name' => ['required', 'unique:sub_categories'],
            'category_id' => ['required'],
        ]);
        if ($validatedData) {
            $data = new SubCategory;
            $data['sub_cat_name'] = $request->sub_cat_name;
            $data['category_id'] = $request->category_id;
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
                return Redirect()->back()->with($notification);
            }
        } else {
        }
    }
    public function edit_sub_category($id)
    {
        $subcategory = SubCategory::find($id);
        $categories = Category::all();
        return view('backend/admin/subcategory/edit')->with('subcategory', $subcategory)->with('categories', $categories);

    }
    public function update_sub_category(request $request)
    {
        $id = $request->id;
        $data = SubCategory::find($id);
        $data['sub_cat_name'] = $request->sub_cat_name;
        $data['category_id'] = $request->category_id;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Updated successfully',
                'alert-type' => 'success',
            );
            return Redirect('admin-sub-category')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('admin-sub-category')->with($notification);
        }
    }
    public function delete_sub_category($id)
    {
        $flight = SubCategory::find($id);
        $delete = $flight->delete();
        if ($delete) {
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
}
