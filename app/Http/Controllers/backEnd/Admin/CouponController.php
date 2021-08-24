<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $coupons = Coupon::all();
        return view('backend/admin/coupon/coupon')->with('coupons', $coupons);
    }
    public function save_coupon(request $request)
    {
        $validatedData = $request->validate([
            'coupon_name' => ['required', 'unique:coupons'],
            'coupon_code' => ['required', 'unique:coupons'],
            'discount_type' => ['required'],
            'value' => ['required'],
            'minimum_ammount' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);
        if ($validatedData) {
            $data = new Coupon;
            $data['coupon_name'] = $request->coupon_name;
            $data['coupon_code'] = $request->coupon_code;
            $data['discount_type'] = $request->discount_type;
            $data['value'] = $request->value;
            $data['minimum_ammount'] = $request->minimum_ammount;
            $data['start_date'] = $request->start_date;
            $data['end_date'] = $request->end_date;
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
    public function edit_coupon($id)
    {
        $coupon = Coupon::find($id);
        return view('backend/admin/coupon/edit')->with('coupon', $coupon);

    }
    public function update_coupon(request $request)
    {
        $id = $request->id;
        $data =Coupon::find($id);
        $data['coupon_name'] = $request->coupon_name;
        $data['coupon_code'] = $request->coupon_code;
        $data['discount_type'] = $request->discount_type;
        $data['value'] = $request->value;
        $data['minimum_ammount'] = $request->minimum_ammount;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['status'] = 1;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Updated successfully',
                'alert-type' => 'success',
            );
            return Redirect('admin-coupons')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('admin-coupons')->with($notification);
        }
    }
    public function delete_coupon($id)
    {
        $flight =Coupon::find($id);
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
