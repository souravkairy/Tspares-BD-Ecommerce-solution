<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function customers()
    {
        $all_customer = User::all();
        return view('backend/admin/customers/customers')->with('all_customer',$all_customer);
    }
    public function view_customer($id)
    {
        $viewCustomer = User::find($id);
        return view('backend/admin/customers/view')->with('viewCustomer',$viewCustomer);
    }
    public function delete_customer($id)
    {
        $delete = User::find($id);
        $insert = $delete->delete();

        if ($insert) {
            $notification = array(
                'message' => 'Delete successfully',
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
