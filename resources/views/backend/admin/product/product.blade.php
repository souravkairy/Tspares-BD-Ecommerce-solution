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
                        <h4 class="page-title">All Product Table</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">All Product</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title btn btn-success waves-effect waves-light mb-5 mt-2 ml-2"><a
                                    class="text-white font-weight-bold" href="{{ url('admin-add-product') }}">Add
                                    Product</a></h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>image</th>
                                        <th>Name</th>
                                        <th>Name(Arabic)</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($products as $item)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>
                                            <img src="{{$item->p_f_img}}" height="50px" width="80px">
                                        </td>
                                        <td>{{$item->p_name}}</td>
                                        <td class="text-right" >{{$item->p_name_arabic}}</td>
                                        <td>{{$item->p_category_id}}</td>
                                        <td>{{$item->p_brand_id}}</td>
                                        <td>
                                            @if ($item->status == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">In-Active</span>
                                            @endif
                                        </td>

                                                <td>
                                                    <div>
                                                        <a href="{{'view-product/'.$item->id}}" class="btn btn-sm btn-secondary" title="Inactive"><i
                                                            class="fa fa-eye"></i></a>
                                                        {{-- <a href="{{'make-product-active/'.$item->id}}" class="btn btn-sm btn-danger" title="Inactive"><i
                                                            class="fa fa-thumbs-down"></i></a> --}}
                                                        <a title="Edit" href="{{'edit-product/'.$item->id}}" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-edit"></i></a>
                                                        <a title="Delete" href="{{'delete-product/'.$item->id}}" class="btn btn-danger btn-sm" id="delete"><i
                                                            class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                    </tr>
                                    @empty

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
