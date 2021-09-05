<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductColor;

class ProductColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $p_color = ProductColor::all();
        return view('backend/admin/productColor/p_color')->with('p_color', $p_color);
    }
    public function save_p_color(request $request)
    {
        $validatedData = $request->validate([
            'color' => ['required', 'unique:product_images'],
        ]);
        if ($validatedData) {
            $data = new ProductColor;
            $data['color'] = $request->color;
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
    public function edit_p_color($id)
    {
        $p_color = ProductColor::find($id);
        return view('backend/admin/productColor/edit')->with('p_color', $p_color);

    }
    public function update_p_color(request $request)
    {
        $id = $request->id;
        $data = ProductColor::find($id);
        $data['color'] = $request->color;

        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Updated successfully',
                'alert-type' => 'success',
            );
            return Redirect('admin-product-color')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('admin-product-color')->with($notification);
        }
    }
    public function delete_p_color($id)
    {
        $flight = ProductColor::find($id);
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
