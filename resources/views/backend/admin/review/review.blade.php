@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
@php
    $id =1 ;
@endphp
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
	            <th>Comments</th>
	            <th>start</th>
	            <th>Status</th>
	            <th>Action</th>
	        </tr>
        </thead>

        <tbody>
            @forelse ($reviews as $item)
            @php
               $product =  DB::table('products')->where('id',$item->product_id)->select('p_name')->first();
            @endphp
            <tr>
	            <td>{{$id}}</td>
	            <td>{{$product->p_name}}</td>
	            <td>{{$item->user_name}}</td>
                <td>{{$item->rating}}</td>
	            <td>{{$item->ratingstar}}*</td>
	            <td>
                    @if ($item->status == 2)
                    <span class="badge badge-warning">pending</span>
                    @else
                    <span class="badge badge-success">Approved</span>
                    @endif
                </td>
	            <td>
                    @if ($item->status == 2)
	            	<a href="{{url('review-active/'.$item->id)}}" class="btn btn-sm btn-success" title="Make Active"><i class="fa fa-thumbs-up"></i></a>
                    @else
                    <a href="{{url('review-Deactive/'.$item->id)}}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @endif
                    <a title="Delete" href="{{url('review-delete/'.$item->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
	            </td>
	        </tr>
            @php
                $id++;
            @endphp
            @empty
                <h2>No Review Found</h2>
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

