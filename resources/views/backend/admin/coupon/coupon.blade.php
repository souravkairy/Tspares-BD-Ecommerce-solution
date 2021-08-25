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
                            <h4 class="page-title">Coupons</h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Coupons</li>
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
                            <h4 class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Add Coupon</h4><br>
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
							<div class="col-sm-8 col-md-4 m-t-30">
							    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
							        <div class="modal-dialog modal-dialog-centered">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title mt-0" >Add Coupon</h5>
							                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                        <span aria-hidden="true">&times;</span>
							                    </button>
							                </div>

							                <div class="modal-body">
							                <form action="{{url('save_coupon')}}"  method="post">
							                @csrf
							                    <div class="card-body">
							                        <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="text" name="coupon_name" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Coupon Code</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="text" name="coupon_code" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Discoount Type</label>
							                            <div class="col-sm-9  mb-2">
                                                            <select name="discount_type" id="" class="form-control" required>
                                                                <option value="">Select Types</option>
                                                                <option value="1">Flat</option>
                                                                <option value="2">Percentage</option>
                                                            </select>
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Value(percentage/flat)</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="text" name="value" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Minimum Shopping Ammount</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="text" name="minimum_ammount" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">Start Date</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="date" name="start_date" id="example-text-input" required="">
							                            </div>
							                        </div>
                                                    <div class="form-group row">
							                            <label for="example-text-input" class="col-sm-3 col-form-label">End Date</label>
							                            <div class="col-sm-9  mb-2">
							                                <input class="form-control" type="date" name="end_date" id="example-text-input" required="">
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
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Type</th>
                                            <th>Minimum Shoping Amount</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($coupons as $item)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <td>{{$item->coupon_name}}</td>
                                            <td>{{$item->coupon_code}}</td>
                                            <td>
                                                @if ($item->discount_type == 1)
                                                {{$item->value}} (FLAT)
                                                @else
                                                {{$item->value}} (%)
                                                @endif
                                            </td>
                                            <td>{{$item->minimum_ammount}}</td>
                                            <td>{{$item->start_date}}</td>
                                            <td>{{$item->end_date}}</td>
                                            <td>
                                                <a title="Edit" href="{{url('edit-coupon/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                <a title="Delete" href="{{url('delete-coupon/'.$item->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
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
