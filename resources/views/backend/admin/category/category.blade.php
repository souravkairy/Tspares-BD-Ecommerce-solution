 @php
     $id = 1;
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
                        <div class="row">
                            <h4 class="page-title">All Categories Table || Total : {{$categories->count('id')}}</h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Add Categories</h4>
                            <h4 class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-centers">Add Sub-Categories</h4><br>
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
							<div class="col-sm-6 col-md-3 m-t-30">
							    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
							        <div class="modal-dialog modal-dialog-centered">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title mt-0" >Add Brand</h5>
							                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                        <span aria-hidden="true">&times;</span>
							                    </button>
							                </div>

							                <div class="modal-body">
							                <form action="{{url('save_category')}}"  method="post" enctype="multipart/form-data">
							                @csrf
							                    <div class="card-body">
							                        <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="text" name="name" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Logo</label>
							                            <div class="col-sm-9">
							                                <input type="file" id="file" class="" name="cat_logo" onchange="readURL1(this);" accept="image" required="" ><br>
                											<img src="" id="one">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-3 col-form-label">Hot Category</label>
							                            <div class="col-sm-9">
							                                <input type="checkbox" id="file" class="" name="hot" value="1"><br>
                											<img src="" id="one">
							                            </div>
							                        </div>
							                        <div class="text-center m-t-15">
							                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
							                        </div>
							                    </div>
							                </form>
							                </div>
							            </div><!-- /.modal-content -->
							        </div><!-- /.modal-dialog -->
							    </div><!-- /.modal -->
							</div>
                            <div class="col-sm-6 col-md-3 m-t-30">
							    <div class="modal fade bs-example-modal-centers" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
							        <div class="modal-dialog modal-dialog-centered">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title mt-0" >Add Sub Category</h5>
							                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                        <span aria-hidden="true">&times;</span>
							                    </button>
							                </div>

							                <div class="modal-body">
							                <form action="{{url('save_sub_category')}}"  method="post">
							                @csrf
							                    <div class="card-body">
							                        <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Sub-Category</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="text" name="sub_cat_name" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Category</label>
							                            <div class="col-sm-9  mb-2">
                                                            <select name="category_id" id="" class="form-control" required>
                                                                <option value="">Select Category</option>
                                                                @forelse ($categories as $item)
                                                                 <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @empty

                                                                @endforelse

                                                            </select>
							                            </div>
							                        </div>
							                        <div class="text-center m-t-15">
							                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
							                        </div>
							                    </div>
							                </form>
							                </div>
							            </div><!-- /.modal-content -->
							        </div><!-- /.modal-dialog -->
							    </div><!-- /.modal -->
							</div>
                            {{-- <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Logo</th>
                                            <th>Name</th>
                                            <th>Hot</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($categories as $item)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <td><img src="{{$item->cat_logo}}" height="40px" width="60px"></td>
                                            <td>{{$item->name}}</td>
                                            @if ($item->hot)
                                            <td>Yes</td>
                                            @else
                                            <td>No</td>
                                            @endif

                                            <td>
                                                <a title="Edit" href="{{url('edit-category/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                <a title="Delete" href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @php
                                            $id++;
                                        @endphp
                                        @empty
                                            <h3>No data found</h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div> --}}

                            @forelse($categories as $cat)
                            <ul class="cat_menu">
                                <li>
                                    <a href="#">{{ $cat->name }}</a>
                                    <a title="Edit" href="{{url('edit-category/'.$cat->id)}}" class="btn-sm text-info px-1"><i class="fa fa-edit"></i></a>
                                    <a title="Delete" href="{{url('delete-category/'.$cat->id)}}" class="btn-sm px-0 text-danger" id="delete"><i class="fa fa-trash"></i></a>
                                    @php
                                        $subcat = DB::table('sub_categories')
                                            ->where('sub_categories.category_id', $cat->id)
                                            ->get();
                                    @endphp
                                    <ul class="cate_slide_menu">
                                        @forelse($subcat as $sub)
                                            <li>
                                                <a href="#">{{ $sub->sub_cat_name }}</a>
                                                <a title="Edit" href="{{url('edit-sub-category/'.$sub->id)}}" class="btn-sm text-info px-1"><i class="fa fa-edit"></i></a>
                                                <a title="Delete" href="{{url('delete-sub-category/'.$sub->id)}}" class="btn-sm px-0 text-danger" id="delete"><i class="fa fa-trash"></i></a>
                                            </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </li>
                            </ul>
                            @empty
                            @endforelse








                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->

<script type="text/javascript">
    function readURL1(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#one')
            .attr('src', e.target.result)
            .width(130)
            .height(90);
    };
    reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@include('backend.admin.elements.footer')
