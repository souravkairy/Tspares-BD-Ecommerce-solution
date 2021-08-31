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
                             <h4 class="page-title">Site Setting</h4>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-right">
                             <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                             <li class="breadcrumb-item active">Site Setting</li>
                         </ol>
                     </div>
                 </div>
                 <!-- end row -->
             </div>
             <!-- end page-title -->

             <div class="row">
                 <div class="col-lg-6">
                     <div class="card m-b-30">
                         <div class="card-body">
                             <h5 class="modal-title">Add Logo</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-8">
                                     <form action="{{url('update-setting')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file" class="form-control" name="siteLogo" required>
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="col-lg-4">
                                     <img src="{{$siteSetting->siteLogo ?? 'nothing'}}" class="float-right">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="modal-title">Add Shipping Charge</h5>
                            <hr>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <form action="{{url('update-setting')}}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="file" class="form-control" name="shipping_crg" value="{{$siteSetting->shipping_crg}}" required>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="card m-b-30">
                         <div class="card-body">
                             <h5 class="modal-title">Add Contact Information</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-12">
                                    <form action="{{url('update-setting')}}" method="POST">
                                        @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Mobile</label>
                                                 <input type="text" class="form-control" name="mobile"
                                                     value="{{$siteSetting->mobile ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Email</label>
                                                 <input type="text" class="form-control" name="email"
                                                     value="{{$siteSetting->email ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="modal-title">Add Address</h5>
                            <hr>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <form action="{{url('update-setting')}}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label>Reg-Number</label>
                                                <input type="text" class="form-control" name="reg_number"
                                                    value="{{$siteSetting->reg_number ?? 'nothing'}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label>Address</label>
                                                <textarea name="address" id="" cols="30" class="form-control" rows="6" value="{{$siteSetting->address}}" required>{{$siteSetting->address ?? 'nothing'}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label>Bank details</label>
                                                <textarea name="bankDetails" id="" cols="30" class="form-control" rows="6" value="{{$siteSetting->bankDetails}}" required>{{$siteSetting->bankDetails ?? 'nothing'}}</textarea>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="card m-b-30">
                         <div class="card-body">
                             <h5 class="modal-title">Add Social Link</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-12">
                                    <form action="{{url('update-setting')}}" method="POST">
                                        @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Facebook</label>
                                                 <input type="text" class="form-control" name="facebook"
                                                     value="{{$siteSetting->facebook ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Twitter</label>
                                                 <input type="text" class="form-control" name="twitter"
                                                     value="{{$siteSetting->twitter ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Instagram</label>
                                                 <input type="text" class="form-control" name="linkdein"
                                                     value="{{$siteSetting->linkdein ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Youtube</label>
                                                 <input type="text" class="form-control" name="youtube"
                                                     value="{{$siteSetting->youtube ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card m-b-30">
                         <div class="card-body">
                             <h5 class="modal-title">Add App Link</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-12">
                                    <form action="{{url('update-setting')}}" method="POST">
                                        @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Android App link</label>
                                                 <input type="text" class="form-control" name="androidAppLink"
                                                     value="{{$siteSetting->androidAppLink ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <label>Ios App link</label>
                                                 <input type="text" class="form-control" name="iosAppLink"
                                                     value="{{$siteSetting->iosAppLink ?? 'nothing'}}" required>
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
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
                 reader.onload = function(e) {
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
