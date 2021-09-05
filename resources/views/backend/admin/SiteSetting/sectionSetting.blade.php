 @php
     $id = 1;
     $category = DB::table('categories')->get();
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
                             <h4 class="page-title">Section Setting</h4>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-right">
                             <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                             <li class="breadcrumb-item active">Section Setting</li>
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
                             <h5 class="modal-title">Add Section One Content</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-8">
                                     <form action="{{ url('update-section-setting') }}" method="POST"
                                         enctype="multipart/form-data">
                                         @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="text" class="form-control" name="sec1Text" placeholder="Heading" value="{{$sectionSetting->sec1Text}}" required>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <select class="form-control select2" data-placeholder="Choose Category" name="sec1catName">
                                                    <option label="Choose Category"></option>
                                                    @foreach($category as $row)
                                                    <option value="{{ $row->name }}" <?php if ($row->name == $sectionSetting->sec1catName) {
                                                        echo "selected";
                                                    } ?> >{{ $row->name }}</option>
                                                    @endforeach
                                                  </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file" class="form-control" name="sec1Image">
                                                 <input type="hidden" value="{{$sectionSetting->sec1Image}}" name="oldimg">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="file" class="form-control" name="sec1BtnLink" placeholder="button Link" value="{{$sectionSetting->sec1BtnLink}}" required>
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="col-lg-4">
                                     <img src="{{asset($sectionSetting->sec1Image) ?? 'nothing' }}" class="float-right w-50">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card m-b-30">
                         <div class="card-body">
                             <h5 class="modal-title">Add Section Two Content</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-8">
                                     <form action="{{ url('update-section-setting') }}" method="POST"
                                         enctype="multipart/form-data">
                                         @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="text" class="form-control" name="sec2Heading" placeholder="Heading" value="{{$sectionSetting->sec2Heading}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="text" class="form-control" name="sec2Text" placeholder="test" value="{{$sectionSetting->sec2Text}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file" class="form-control" name="sec2Image">
                                                 <input type="hidden" value="{{$sectionSetting->sec2Image}}" name="oldimg2">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="file" class="form-control" name="sec2BtnLink" placeholder="button link" value="{{$sectionSetting->sec2BtnLink}}">
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="col-lg-4">
                                     <img src="{{ $sectionSetting->sec2Image ?? 'nothing' }}" class="float-right w-50">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card m-b-30">
                         <div class="card-body">
                             <h5 class="modal-title">Add Section Three Content</h5>
                             <hr>
                             <div class="row mt-2">
                                 <div class="col-lg-8">
                                     <form action="{{ url('update-section-setting') }}" method="POST"
                                         enctype="multipart/form-data">
                                         @csrf
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="text" class="form-control" name="sec3Text" placeholder="Heading" value="{{$sectionSetting->sec3Text}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file"  class="form-control" name="sec3Image">
                                                 <input type="hidden" value="{{$sectionSetting->sec3Image}}" name="oldimg3">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" class="form-control" name="sec3BtnLink" placeholder="Button Link" value="{{$sectionSetting->sec3BtnLink}}">
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit"
                                                 class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="col-lg-4">
                                     <img src="{{ $sectionSetting->sec3Image ?? 'nothing' }}" class="float-right w-50">
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="modal-title">Add Section Four Content</h5>
                            <hr>
                            <div class="row mt-2">
                                <div class="col-lg-8">
                                    <form action="{{ url('update-section-setting') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="text" class="form-control"  name="sec4Heading" placeholder="heading" value="{{$sectionSetting->sec4Heading}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="text" class="form-control"  name="sec4Text" placeholder="sub-heading" value="{{$sectionSetting->sec4Text}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control"  name="sec4Image">
                                                <input type="hidden" value="{{$sectionSetting->sec4Image}}" name="oldimg4">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control"  name="sec2BtnLink" placeholder="button link" value="{{$sectionSetting->sec2BtnLink}}">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{ $sectionSetting->sec4Image ?? 'nothing' }}" class="float-right w-50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="modal-title">Add Section five Content</h5>
                            <hr>
                            <div class="row mt-2">
                                <div class="col-lg-8">
                                    <form action="{{ url('update-section-setting') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="text" class="form-control"  name="sec5Heading" placeholder="heading"  value="{{$sectionSetting->sec5Heading}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="text" class="form-control"  name="sec5Text" placeholder="sub-heading"  value="{{$sectionSetting->sec5Text}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="file" id="file" class="form-control"  name="sec5Image">
                                                <input type="hidden" value="{{$sectionSetting->sec5Image}}" name="oldimg5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="file" class="form-control" name="sec5BtnLink" placeholder="button link">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{ $sectionSetting->sec5Image ?? 'nothing' }}" class="float-right w-50">
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>

             </div>
             <!-- container-fluid -->
         </div>
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
