@php
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
                        <h4 class="page-title">All Declined Order Table || Total :  {{$declineOrders->count()}} Orders</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item active">Pending </li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Customer Name</th>
                                        <th>Payment Type</th>
                                        <th>TxN Id</th>
                                        <th>Total</th>
                                        <th>Order-date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($declineOrders as $item)
                                    @php
                                        $customer = DB::table('users')->where('id',$item->user_id)->select('first_name')->first();
                                    @endphp
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$customer->first_name}}</td>
                                        <td>{{$item->payment_method}}</td>
                                        <td>{{$item->txnID}}</td>
                                        <td>{{$item->total}}</td>
                                        <td>{{$item->order_date}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-warning light sharp"
                                                    data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{url('view-order/'.$item->id)}}">View</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @php

                                    @endphp
                                    @empty
                                        <h6 class="text-center text-denger"> No Pending Orders</h6>
                                    @endforelse


                                </tbody>


                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
    @include('backend.admin.elements.footer')
