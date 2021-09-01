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
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-right">
                       <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                       <li class="breadcrumb-item active">Update Page</li>
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
                    <h4 class="mt-0 header-title">Update Page</h4><br>
                    <form action="{{ url('update-page-data') }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{$edit_page_data->name}}" name="name">
                                    <input type="hidden" name="id" value="{{$edit_page_data->id}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="summernote" value="{{$edit_page_data->description}}" cols="30" rows="10" name="description">{{$edit_page_data->description}}</textarea>
                                    
                                  <!--   <textarea class="summernote" name="p_desc" required></textarea> -->

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit"
                                class="btn btn-success btn-lg btn-block waves-effect waves-light">Update
                                Page</button>
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
