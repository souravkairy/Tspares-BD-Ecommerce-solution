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
                       {{-- <h4 class="page-title">Coupons</h4> --}}
                   </div>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-right">
                       <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                       <li class="breadcrumb-item active">Update Coupon</li>
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
                    <h4 class="mt-0 header-title">Update Coupon</h4><br>
                    <form action="{{ url('update_coupon') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9  mb-2">
                                <input class="form-control" type="text" name="coupon_name" id="example-text-input" required="" value="{{$coupon->coupon_name}}">
                                <input type="hidden" name="id" value="{{$coupon->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Coupon Code</label>
                            <div class="col-sm-9  mb-2">
                                <input class="form-control" type="text" name="coupon_code" id="example-text-input" required="" value="{{$coupon->coupon_code}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Discoount Type</label>
                            <div class="col-sm-9  mb-2">
                                <select name="discount_type" id="" value="{{$coupon->discount_type}}" class="form-control" required>
                                    <option value="">Select Types</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Percentage</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Value(percentage/flat)</label>
                            <div class="col-sm-9  mb-2">
                                <input class="form-control" type="text" name="value" id="example-text-input" required="" value="{{$coupon->value}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Minimum Shopping Ammount</label>
                            <div class="col-sm-9  mb-2">
                                <input class="form-control" type="text" name="minimum_ammount" id="example-text-input" required="" value="{{$coupon->minimum_ammount}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9  mb-2">
                                <input class="form-control" type="date" name="start_date" id="example-text-input" required="" value="{{$coupon->start_date}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9  mb-2">
                                <input class="form-control" type="date" name="end_date" id="example-text-input" required="" value="{{$coupon->end_date}}">
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit"
                                class="btn btn-success btn-lg btn-block waves-effect waves-light">Update
                                Coupon</button>
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
