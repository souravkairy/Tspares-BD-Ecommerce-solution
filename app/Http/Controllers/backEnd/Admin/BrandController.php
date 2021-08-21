<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $brands = Brand::all();
        return view('backend/admin/brand/brand')->with('brands',$brands);
    }
    public function save_brand(request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:brands'],
            'logo' => ['required'],
        ]);
        if ($validatedData) {
            $data = new Brand;
            $data['name'] = $request->name;
            $fileNameone = $request->file('logo')->getClientOriginalName();
            $fileName1 =  $fileNameone;
            $path = 'logo' . "/" ;
            $destinationPath = $path; // upload path

            $request->file('logo')->move($destinationPath, $fileName1);
            $data['logo'] = '/logo/' . $fileName1;
            $insert = $data->save();
            if ($insert) {
                $notification=array(
                    'message'=>'successfull',
                    'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }
            else{
                $notification=array(
                    'message'=>'error',
                    'alert-type'=>'error'
                    );
                return Redirect()->back()->with($notification);
            }
        } else {

        }

    }
    public function edit_brand($id)
    {
        $brand = Brand::find($id);
        return view('backend/admin/brand/edit')->with('brand',$brand);

    }
    public function update_brand(request $request)
    {

        $id = $request->id;
        $data = Brand::find($id);
        $data['name'] = $request->name;
        $fileNameone = $request->file('logo')->getClientOriginalName();
        $fileName1 =  $fileNameone;
        $path = 'logo' . "/" ;
        $destinationPath = $path; // upload path

        $request->file('logo')->move($destinationPath, $fileName1);
        $data['logo'] = '/logo/' . $fileName1;
        $insert = $data->save();
        if ($insert) {
            $notification=array(
                'message'=>'Updated successfully',
                'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
    public function delete_brand($id)
    {
        $flight = Brand::find($id);
        $delete = $flight->delete();
        if ($delete) {
            $notification=array(
                'message'=>'successfull',
                'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }

    public function Tag()
    {
    	return view('backend/admin/tags/tags');
    }
}
