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
                            <li class="breadcrumb-item"><a href="{{ url('pending-orders') }}">Pending Order</a></li>
                            <li class="breadcrumb-item active">View Order</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-3 header-title float-left"><strong> Order Status : Pending</strong></h4>
                            <button class="btn btn-success btn-lg float-right">Accept Order</button>
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
                                        <td>Name</td>
                                        <td>ghjghj</td>
                                    </tr>
                                    <tr>
                                        <td>Name(Arabic)</td>
                                        <td>ykjykhjkh</td>
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
                                        <td>ghjghj</td>
                                    </tr>
                                    <tr>
                                        <td>Name(Arabic)</td>
                                        <td>ykjykhjkh</td>
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
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Sub-Total</th>
                                    <th>Total</th>
                                    <th>Order-date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>fghf</td>
                                    <td>kapor</td>
                                    <td>322</td>
                                    <td>10</td>
                                    <td>546465</td>
                                    <td>545313</td>
                                    <td>7-45-2500</td>
                                </tr>

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
