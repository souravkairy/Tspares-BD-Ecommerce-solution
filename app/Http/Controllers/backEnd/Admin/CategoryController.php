<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $categories = Category::all();
        return view('backend/admin/category/category')->with('categories', $categories);
    }
    public function save_category(request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:categories'],
            'cat_logo' => ['required'],
        ]);
        if ($validatedData) {
            $data = new Category;
            $data['name'] = $request->name;
            $fileNameone = $request->file('cat_logo')->getClientOriginalName();
            $fileName1 = $fileNameone;
            $path = 'cat_logo' . "/";
            $destinationPath = $path; // upload path
            $request->file('cat_logo')->move($destinationPath, $fileName1);
            $data['cat_logo'] = '/cat_logo/' . $fileName1;
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
    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('backend/admin/category/edit')->with('category', $category);

    }
    public function update_category(request $request)
    {
        $id = $request->id;
        $data = Category::find($id);
        $data['name'] = $request->name;
        if ($request->file('cat_logo')) {
            $fileNameone = $request->file('cat_logo')->getClientOriginalName();
            $fileName1 = $fileNameone;
            $path = 'cat_logo' . "/";
            $destinationPath = $path; // upload path
            $request->file('cat_logo')->move($destinationPath, $fileName1);
            $data['cat_logo'] = '/cat_logo/' . $fileName1;
        }

        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Updated successfully',
                'alert-type' => 'success',
            );
            return Redirect('admin-category')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('admin-category')->with($notification);
        }
    }
    public function delete_category($id)
    {
        $flight = Category::find($id);
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
