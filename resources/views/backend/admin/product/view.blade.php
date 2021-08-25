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
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
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
                                        <td>Name</td>
                                        <td>{{$viewProduct->p_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Name(Arabic)</td>
                                        <td>{{$viewProduct->p_name_arabic}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{$category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sub Category</td>
                                        <td>{{$fetchSubCategory->sub_cat_name ?? 'not found'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>{{$brand->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>{{$viewProduct->p_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Offer Price</td>
                                        <td>{{$viewProduct->p_o_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Offer Price Start Date</td>
                                        <td>{{$viewProduct->p_o_p_s_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Offer Price End Date</td>
                                        <td>{{$viewProduct->p_o_p_e_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>{{$viewProduct->p_color}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>{{$viewProduct->p_stock}}</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>{{$viewProduct->p_size}}</td>
                                    </tr>
                                    <tr>
                                        <td>Featured Image</td>
                                        <td><img src="{{$viewProduct->p_f_img}}" height="50px" width="80px"></td>
                                    </tr>
                                    <tr>
                                        <td>Product Image1</td>
                                        <td><img src="{{$viewProduct->p_img1}}" height="50px" width="80px"></td>
                                    </tr>
                                    <tr>
                                        <td>Product Image2</td>
                                        <td><img src="{{$viewProduct->p_img2}}" height="50px" width="80px"></td>
                                    </tr>
                                    <tr>
                                        <td>Product Image3</td>
                                        <td>
                                            @if ($viewProduct->p_img3)
                                            <img src="{{$viewProduct->p_img3}}" height="50px" width="80px">
                                            @else
                                                <p>Image not added</p>
                                            @endif

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Image4</td>
                                        <td>
                                            @if ($viewProduct->p_img4)
                                            <img src="{{$viewProduct->p_img4}}" height="50px" width="80px">
                                            @else
                                            <p>Image not added</p>
                                            @endif

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Is it a featured product?</td>
                                        <td>@if ($viewProduct->p_featured == 1)
                                            Yes
                                        @else
                                            No
                                        @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Is it a flash sell product?</td>
                                        <td>@if ($viewProduct->p_flash_sell == 1)
                                            Yes
                                        @else
                                            No
                                        @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>@if ($viewProduct->status == 1)
                                            Active
                                        @else
                                            In Avtive
                                        @endif
                                    </td>
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
