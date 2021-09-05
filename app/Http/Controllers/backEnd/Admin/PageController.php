<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function pages(){
        $pages = Page::all();
        return view('backend/admin/pages/pages',compact('pages'));
    }
    public function save_pages(request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);
        if ($validatedData) {
            $data = new Page;
            $data['name'] = $request->name;
            $data['description'] = $request->description;
            $data['status'] = 1;
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
    public function edit_pages($id)
    {
        $edit_page_data = Page::find($id);
        return view('backend/admin/pages/edit',compact('edit_page_data'));
    }
    public function update_page_data(request $request){
        $id = $request->id;
        $data = Page::find($id);
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['status'] = 1;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'successfull',
                'alert-type' => 'success',
            );
            return Redirect('pages')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('pages')->with($notification);
        }
    }
    public function delete_page($id)
    {
        $data = Page::find($id);
        $insert = $data->delete();
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
    }



}
