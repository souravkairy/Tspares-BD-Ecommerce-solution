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
                       <li class="breadcrumb-item active">Update Brand</li>
                   </ol>
               </div>
           </div>
           <!-- end row -->
       </div>
       <!-- end page-title -->


       <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Update Brand</h4><br>
                    <form action="{{ url('update_brand') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label>Name<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" value="{{$brand->name}}" name="name">
                                    <input type="hidden" name="id" value="{{$brand->id}}">
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" id="file" class="" name="logo" onchange="readURL1(this);" accept="image" value="{{$brand->logo}}" ><br>
                                    <img src="" id="one">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label>Previous Image</label><br>
                                <img src="{{$brand->logo}}" class="w-50">
                                <span class="font-13 text-muted"></span>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit"
                                class="btn btn-success btn-lg btn-block waves-effect waves-light">Update
                                Brand</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>

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
