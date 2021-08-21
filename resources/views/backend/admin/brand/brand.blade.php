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
                            <h4 class="page-title">Brands</h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Brands</li>
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
                            <h4 class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Add Brand</h4><br>
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
							                <form action="{{url('save_brand')}}"  method="post" enctype="multipart/form-data">
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
							                                <input type="file" id="file" class="" name="logo" onchange="readURL1(this);" accept="image" required="" ><br>
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
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($brands as $item)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <td><img src="{{$item->logo}}" height="40px" width="60px"></td>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                <a title="Edit" href="{{url('edit-brand/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                <a title="Delete" href="{{url('delete-brand/'.$item->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
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
