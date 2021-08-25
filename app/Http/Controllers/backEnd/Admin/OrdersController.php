<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function pending_orders()
    {
        return view('backend/admin/orders/pendingOrders');
    }
    public function accepted_orders()
    {
        return view('backend/admin/orders/acceptedOrders');
    }
    public function processing_orders()
    {
        return view('backend/admin/orders/processingOrders');
    }
    public function on_shipping_orders()
    {
        return view('backend/admin/orders/onShippingOrders');
    }
    public function delivered_orders()
    {
        return view('backend/admin/orders/deliveredOrders');
    }
}
