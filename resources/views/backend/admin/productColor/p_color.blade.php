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
                            <h4 class="page-title">All Product Color Table || Total : {{$p_color->count('id')}}</h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Product Color</li>
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
                            <h4 class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Add Product Color</h4>
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
							                    <h5 class="modal-title mt-0" >Add Product Color</h5>
							                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                        <span aria-hidden="true">&times;</span>
							                    </button>
							                </div>

							                <div class="modal-body">
							                <form action="{{url('save_product_color')}}"  method="post">
							                @csrf
							                    <div class="card-body">
							                        <div class="form-group row">
							                            <div class="col-sm-12  mb-2">
                                                            <label for="example-text-input">Color Name</label>
							                                <input class="form-control" type="text" name="color" id="example-text-input" required="">
							                            </div>
							                        </div>
							                        <div class="text-center m-t-15">
							                            <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Submit</button>
							                        </div>
							                    </div>
							                </form>
							                </div>
							            </div><!-- /.modal-content -->
							        </div><!-- /.modal-dialog -->
							    </div><!-- /.modal -->
							</div>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Color</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($p_color as $item)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <td>{{$item->color}}</td>
                                            <td>
                                                <a title="Edit" href="{{url('edit-producy-color/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                <a title="Delete" href="{{url('delete-product_color/'.$item->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
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
                            </div>
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
