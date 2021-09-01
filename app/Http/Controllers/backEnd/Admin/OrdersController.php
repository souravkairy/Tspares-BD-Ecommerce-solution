<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\order_detail;
use App\Models\shipping;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function pending_orders()
    {
        $pendingOrders = Order::where('status',1)->orderBy('id','desc')->get();
        return view('backend/admin/orders/pendingOrders')->with('pendingOrders',$pendingOrders);
    }
    public function accepted_orders()
    {
        $acceptedOrders = Order::where('status',2)->get();
        return view('backend/admin/orders/acceptedOrders')->with('acceptedOrders',$acceptedOrders);
    }
    public function processing_orders()
    {
        $procesingOrders = Order::where('status',3)->get();
        return view('backend/admin/orders/processingOrders')->with('procesingOrders',$procesingOrders);
    }
    public function delivered_orders()
    {
        $deliveredOrders = Order::where('status',4)->get();
        return view('backend/admin/orders/deliveredOrders')->with('deliveredOrders',$deliveredOrders);
    }
    public function decline_order_list()
    {
        $declineOrders = Order::where('status',5)->get();
        return view('backend/admin/orders/declineOrders')->with('declineOrders',$declineOrders);
    }
    public function view_order($id)
    {
        $viewOrder = Order::find($id);
        $user = User::where('id',$viewOrder->user_id)->first();
        $shipping = shipping::where('order_id', $viewOrder->id)->first();
        $orderDetails = order_detail::where('order_id', $viewOrder->id)->get();
        return view('backend/admin/orders/view')->with('viewOrder',$viewOrder)->with('shipping',$shipping)->with('orderDetails',$orderDetails)->with('user',$user);
    }
    public function accept_order()
    {
        $data = Order::find($id);
        $data['status'] = 2;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Updated successfully',
                'alert-type' => 'success',
            );
            return Redirect('pending-orders')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('pending-orders')->with($notification);
        }
    }
    public function pending_to_accept($id)
    {
        $data = Order::find($id);
        $data['status'] = 2;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Order Accepted',
                'alert-type' => 'success',
            );
            return Redirect('pending-orders')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('pending-orders')->with($notification);
        }

    }
    public function accept_to_processing($id)
    {
        $data = Order::find($id);
        $data['status'] = 3;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Order Going to processing',
                'alert-type' => 'success',
            );
            return Redirect('accepted-orders')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('accepted-orders')->with($notification);
        }
    }
    public function processing_to_done($id)
    {
        $data = Order::find($id);
        $data['status'] = 4;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Order Delivered',
                'alert-type' => 'success',
            );
            return Redirect('processing-orders')->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect('processing-orders')->with($notification);
        }
    }
    public function decline_order($id)
    {
        $data = Order::find($id);
        $data['status'] = 5;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Order Declined',
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
