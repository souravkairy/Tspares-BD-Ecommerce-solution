@php
// echo "<pre>";
// print_r($viewOrder);
// exit();
$i = 1;
@endphp
@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        {{-- <h4 class="page-title">Add Product</h4> --}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('pending-orders') }}">Pending Order</a>
                            </li>
                            <li class="breadcrumb-item active">View Order</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            @if ($viewOrder->status ==1)
                            <h4 class="mt-3 header-title float-left"><strong> Order Status : Pending</strong></h4>
                            <a href="{{url('pending_to_accept/'.$viewOrder->id)}}" class="btn btn-success btn-lg float-right">Accept Order</a>
                            @elseif($viewOrder->status ==2)
                            <h4 class="mt-3 header-title float-left"><strong> Order Status : Accepted</strong></h4>
                            <a href="{{url('accept_to_processing/'.$viewOrder->id)}}" class="btn btn-success btn-lg float-right">Processing Order</a>
                            @elseif($viewOrder->status ==3)
                            <h4 class="mt-3 header-title float-left"><strong> Order Status : Processing</strong></h4>
                            <a href="{{url('processing_to_done/'.$viewOrder->id)}}" class="btn btn-success btn-lg float-right">Make It Done</a>
                            @else
                            <h4 class="mt-3 header-title float-left"><strong> Order Status : Delivered</strong></h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Order Details</h4><br>
                            <table class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <th>#</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cuatomer </td>
                                        <td>{{$user->first_name}} {{$user->last_name ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>{{$user->phone ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Total</td>
                                        @if ($viewOrder->coupon)
                                        <td>{{$viewOrder->total + $viewOrder->coupon ?? null}}</td>
                                        @else
                                        <td>{{$viewOrder->total ?? null}}</td>
                                        @endif

                                    </tr>
                                    <tr>
                                        <td>Discount (If Have)</td>
                                        <td>{{$viewOrder->coupon ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Charge</td>
                                        <td>{{$viewOrder->shipping_charge ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>{{$viewOrder->total ?? null}}</td>

                                    </tr>
                                    <tr>
                                        <td>Payment Method</td>
                                        <td>{{$viewOrder->payment_method ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tx Id</td>
                                        <td>{{$viewOrder->txnID ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Order Id</td>
                                        <td>{{$viewOrder->tracking_code ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Order date</td>
                                        <td>{{$viewOrder->created_at ?? null}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Shipping Details</h4><br>
                            <table class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <th>#</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$shipping->shipping_name ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$shipping->shipping_email ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile </td>
                                        <td>{{$shipping->shipping_m_num ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td>{{$shipping->shipping_city ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Division</td>
                                        <td>{{$shipping->division ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{$shipping->shipping_address ?? null}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Products</h4><br>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Qty</th>
                                    <th>Single Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orderDetails as $item)
                                @php
                                    $image = DB::table('products')->where('id',$item->product_id)->first();
                                @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td><img src="{{asset($image->p_f_img)}}" height="50px" width="80px"></td>

                                    <td>{{$item->product_name ?? null}}</td>
                                    <td>{{$item->size ?? null}}</td>
                                    <td>{{$item->color ?? null}}</td>
                                    <td>{{$item->qty ?? null}}</td>
                                    <td>{{$item->single_price ?? null}}</td>
                                    <td>{{$item->total_price ?? null}}</td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                                @empty
                                    <h6 class="text-center text-danger">No data found</h6>
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
    @include('backend.admin.elements.footer')
