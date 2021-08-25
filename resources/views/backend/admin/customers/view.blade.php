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
                            <li class="breadcrumb-item"><a href="{{ url('admin-products') }}">Products</a></li>
                            <li class="breadcrumb-item active">view Product</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">View Product</h4><br>
                            <table class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <th>#</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td>{{$viewCustomer->first_name ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>{{$viewCustomer->last_name ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>{{$viewCustomer->phone ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$viewCustomer->email ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Post Code</td>
                                        <td>{{$viewCustomer->post_code ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td>{{$viewCustomer->city ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Streen Name</td>
                                        <td>{{$viewCustomer->street_name ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td>{{$viewCustomer->country ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>district</td>
                                        <td>{{$viewCustomer->district ?? 'not found'}}</td>
                                    </tr>
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
