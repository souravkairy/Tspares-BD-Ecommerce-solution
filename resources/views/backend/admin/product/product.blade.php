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
    <h4 class="mt-0 header-title btn btn-success waves-effect waves-light mb-5 mt-2 ml-2"><a class="text-white font-weight-bold" href="{{ url('admin-add-product') }}">Add Product</a></h4>

    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
	        <tr>
	            <th>Serial No.</th>
	            <th>Project Title</th>
	            <th>Category</th>
	            <th>Project Title</th>
	            <th>Price</th>
	            <th>Brand</th>
	            <th>Color</th>
	            <th>Brand</th>
	            <th>Color</th>
	            <th>Size</th>
	            <th>Status</th>
	            <th>Action</th>
	            <th>Featured Image</th>
	            <th>Image1</th>
	            <th>Image2</th>
	            <th>Image3</th>
	            <th>Image4</th>
	            <th>Details</th>
	        </tr>
        </thead>
     
        <tbody>
	        <tr>
	            <td>1</td>
	            <td>bangladesh</td>
	            <td>bangladesh</td>
	            <td>cat</td>
	            <td>111</td>
	            <td>cat</td>
	            <td>111</td>
	            <td>cat</td>
	            <td>red</td>
	            <td>xl</td>
	            <td>
                  <span class="badge badge-danger">Inactive</span>
                </td>
	            <td>
	            	<div>
	                      <a href="" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
	                 
	                    <a title="Edit" href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
	                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	           		</div>
	            </td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td>fgsdgsdfgdfsgdf</td>
	        </tr>
	        <tr>
	            <td>1</td>
	            <td>bangladesh</td>
	            <td>bangladesh</td>
	            <td>cat</td>
	            <td>111</td>
	            <td>cat</td>
	            <td>111</td>
	            <td>cat</td>
	            <td>red</td>
	            <td>xl</td>
	            <td>
                  <span class="badge badge-success">active</span>
                </td>
	            <td>
	            	<div>
	                      <a href="" class="btn btn-sm btn-success" title="active"><i class="fa fa-thumbs-up"></i></a>
	                 
	                    <a title="Edit" href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
	                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	           		</div>
	            </td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td>fgsdgsdfgdfsgdf</td>
	        </tr>
	        <tr>
	            <td>1</td>
	            <td>bangladesh</td>
	            <td>bangladesh</td>
	            <td>cat</td>
	            <td>111</td>
	            <td>cat</td>
	            <td>111</td>
	            <td>cat</td>
	            <td>red</td>
	            <td>xl</td>
	            <td>
                  <span class="badge badge-danger">Inactive</span>
                </td>
	            <td>
	            	<div>
	                      <a href="" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
	                 
	                    <a title="Edit" href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
	                    <a title="Delete" href="" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	           		</div>
	            </td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td><img src="backend/assets/images/flags/spain_flag.jpg" height="100px" width="140px"></td>
	            <td>fgsdgsdfgdfsgdf</td>
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