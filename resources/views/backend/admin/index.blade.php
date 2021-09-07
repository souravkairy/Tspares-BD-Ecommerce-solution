 @include('backend.admin.elements.header')
 @include('backend.admin.elements.sidebar')

@php

@endphp
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Sales</h5>
                            </div>
                            <h3 class="mt-4">${{$orders->sum('total')}}</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Orders</h5>
                            </div>
                            <h3 class="mt-4">{{$orders->count()}}</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width:  100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Products</h5>
                            </div>
                            <h3 class="mt-4">{{$product->count()}}</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-buffer bg-danger text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Customers</h5>
                            </div>
                            <h3 class="mt-4">{{$user->count()}}</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p> --}}
                        </div>
                    </div>
                </div>

            </div>

           <div class="row">
                <div class="col-xl-6">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Line Chart</h4>
                            <p class="sub-title d-inline-block text-truncate w-100">A line chart is a way of plotting data
                                points on a line. Often, it is used to show trend data, and the
                                comparison of two data sets.</p>

                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                <li class="list-inline-item">
                                    <h5>3654</h5>
                                    <p class="text-muted">Last Month</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>954</h5>
                                    <p class="text-muted">Last week</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5>8462</h5>
                                    <p class="text-muted">Last Month</p>
                                </li>
                            </ul>

                            <canvas id="lineChart" height="300"></canvas>

                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title mb-4">Latest Orders</h4>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($latestOrder as $item)
                                    <tr>
                                        <td>{{$item->tracking_code}}</td>
                                        <td>{{$item->payment_method}}</td>
                                        <td>@if ($item->status == 1)
                                            pending
                                        @elseif($item->status == 2)
                                            Accepted
                                        @elseif($item->status == 3)
                                            On shipping
                                        @elseif($item->status == 4)
                                            Delivered
                                        @elseif($item->status == 5)
                                            Canceled
                                        @endif</td>
                                        <td>{{$item->total}}</td>

                                    </tr>
                                    @empty
                                        <h5>no order found</h5>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->


            </div> <!-- end row -->
            <!-- end row -->

            <div class="row">


                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title mb-4">Latest Reviews</h4>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($review as $item)
                                        <tr>
                                            <td>{{$item->user_name}}</td>
                                            <td>{{$item->ratingstar}}*</td>
                                        </tr>
                                        @empty
                                            <h5>no review found</h5>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->

@include('backend.admin.elements.footer')
