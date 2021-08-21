@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
<div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Reviews</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
    <li class="breadcrumb-item active">Reviews</li>
</ol>
</div>
</div> <!-- end row -->
</div>
<!-- end page-title -->
<div class="row">
<div class="col-12">
<div class="card m-b-30">
<div class="card-body">
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
	        <tr>
	            <th>ID</th>
	            <th>Product</th>
	            <th>Reviewer Name</th>
	            <th>Rating</th>
	            <th>Status</th>
	            <th>Date</th>
	            <th>Action</th>
	            <th>Comment</th>
	        </tr>
        </thead>
     
        <tbody>
	        <tr>
	            <td>111</td>
	            <td>Smart TV</td>
	            <td>Jhon Doe</td>
	            <td>5 Star</td>
	            <td>
                  <span class="badge badge-success">Approved</span>
                </td>
	            <td>1 month ago</td>
	            <td>
	            	<a href="" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	            </td>
	            <td>5 Star btn btn-sm btn-success btn btn-sm btn-success btn btn-sm btn-success btn btn-sm btn-success btn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-success</td>
	        </tr>
	        <tr>
	            <td>111</td>
	            <td>Smart TV</td>
	            <td>Jhon Doe</td>
	            <td>5 Star</td>
	            <td>
                  <span class="badge badge-danger">Pending</span>
                </td>
	            <td>1 month ago</td>
	            <td>
	            	<a href="" class="btn btn-sm btn-success" title="active"><i class="fa fa-thumbs-up"></i></a>
                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	            </td>
	            <td>5 Star btn btn-sm btn-success btn btn-sm btn-success btn btn-sm btn-success btn btn-sm btn-success btn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-successbtn btn-sm btn-success</td>
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