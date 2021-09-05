@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Admin</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Admin</a></li>
                            <li class="breadcrumb-item active">User Role</li>
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
                            <h4 class="mt-0 header-title">Add Admin</h4><br>
                            <form action="{{ url('/store-admin') }}" method="post">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Name<span style="color: red">*</span></label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Email<span style="color: red">*</span></label>
                                            <input type="email" name="email"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Password<span style="color: red">*</span></label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>

                                   <div class="row mb-4 ml-1 mt-3">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="products" id="customCheck1"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2"
                                                        value="1">
                                                    <label class="custom-control-label" for="customCheck1">Products</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="sales" id="customCheck2"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2"
                                                        value="1">
                                                    <label class="custom-control-label" for="customCheck2">Sales</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="flash_sales"
                                                        id="customCheck3" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label"
                                                        for="customCheck3">Flash Sales</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="coupons"
                                                        id="customCheck4" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label"
                                                        for="customCheck4">Coupons</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="page_content_setting"
                                                        id="customCheck5" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label"
                                                        for="customCheck5">Page Content Setting</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="users"
                                                        id="customCheck6" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label"
                                                        for="customCheck6">Users</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="role"
                                                        id="customCheck7" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label"
                                                        for="customCheck7">User Role</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="settings"
                                                        id="customCheck8" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1" >
                                                    <label class="custom-control-label"
                                                        for="customCheck8">Settings</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="pages"
                                                        id="customCheck9" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1" >
                                                    <label class="custom-control-label"
                                                        for="customCheck9">Pages</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                    <button type="submit"
                                        class="btn btn-success btn-lg btn-block waves-effect waves-light">Save
                                        Admin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->

    @include('backend.admin.elements.footer')
