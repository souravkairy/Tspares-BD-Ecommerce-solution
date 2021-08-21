@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
<div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Tags</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
    <li class="breadcrumb-item active">Tags</li>
</ol>
</div>
</div> <!-- end row -->
</div>
<!-- end page-title -->
<div class="row">
<div class="col-12">
<div class="card m-b-30">
<div class="card-body">
	<h4 class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Add Tag</h4><br>

	<div class="col-sm-6 col-md-3 m-t-30">
	    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	        <div class="modal-dialog modal-dialog-centered">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title mt-0" >Add Tag</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>

	                <div class="modal-body">
	                <form action=""  method="post">
	                @csrf
	                    <div class="card-body">
	                        <div class="form-group row">
	                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
	                            <div class="col-sm-9  mb-2">
	                                <input class="form-control" type="text" name="brand" id="example-text-input" required="">
	                            </div>
	                        </div>

	                        <div class="text-center m-t-15">
	                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
	                        </div>
	                    </div>
	                </form>
	                </div>
	            </div><!-- /.modal-content -->
	        </div><!-- /.modal-dialog -->
	    </div><!-- /.modal -->
	</div>
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
	        <tr>
	            <th>ID</th>
	            <th>Name</th>
	            <th>Created</th>
	            <th>Action</th>
	        </tr>
        </thead>
     
        <tbody>
	        <tr>
	            <td>1</td>
	            <td>Smart TV</td>
	            <td>1 month ago</td>
	            <td>
                    <a title="Edit" href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	            </td>
	        </tr>
	        <tr>
	            <td>1</td>
	            <td>Smart TV</td>
	            <td>1 month ago</td>
	            <td>
                    <a title="Edit" href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	            </td>
	        </tr>
	        <tr>
	            <td>1</td>
	            <td>Smart TV</td>
	            <td>1 month ago</td>
	            <td>
                    <a title="Edit" href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
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