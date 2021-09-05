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
                        <h4 class="page-title">All Sub Admin Table || Total : {{$admin->count('id')}}</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">All Admin</li>
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
                                    class="text-white font-weight-bold" href="{{ url('/add-sub-admin') }}">Add
                                    Admin</a></h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Access Section</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($admin as $row)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>
                                          @if($row->products == 1)
                                             <span class="badge badge-danger">Products</span>
                                          @else
                                          @endif

                                          @if($row->sales == 1)
                                             <span class="badge badge-success">Sales</span>
                                          @else
                                          @endif 

                                          @if($row->flash_sales == 1)
                                             <span class="badge badge-info">Flash Sales</span>
                                          @else
                                          @endif 

                                          @if($row->coupons == 1)
                                             <span class="badge badge-warning">Coupons</span>
                                          @else
                                          @endif 

                                          @if($row->page_content_setting == 1)
                                             <span class="badge badge-primary">Content Setting</span>
                                          @else
                                          @endif

                                          @if($row->users == 1)
                                             <span class="badge badge-success">Users</span>
                                          @else
                                          @endif

                                          @if($row->role == 1)
                                             <span class="badge badge-info">Role</span>
                                          @else
                                          @endif

                                          @if($row->settings == 1)
                                             <span class="badge badge-warning">Settings</span>
                                          @else
                                          @endif

                                          @if($row->pages == 1)
                                             <span class="badge badge-danger">Pages</span>
                                          @else
                                          @endif

                                        </td>
                                        <td>
                                          <div>
                                             <a title="Delete" href="{{ url('delete-admin/'.$row->id) }}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
                                          </div>
                                        </td>
                                       
                                    </tr>
                                    @php
                                        $i++
                                    @endphp
                                    
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
