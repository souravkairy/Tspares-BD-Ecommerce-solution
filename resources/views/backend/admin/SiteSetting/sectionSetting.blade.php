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
                                                 <select name="sec1catName" id="" class="form-control" value="{{$sectionSetting->sec1catName}}" required>
                                                     <option value="">Select Category</option>
                                                     @forelse ($category as $item)
                                                         <option value="{{ $item->name }}">{{ $item->name }}
                                                         </option>
                                                     @empty
                                                         <p>no category found</p>
                                                     @endforelse
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file" class="form-control" name="sec1Image" required>
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
                                                 <input type="text" id="text" required class="form-control" name="sec2Heading" placeholder="Heading" value="{{$sectionSetting->sec2Heading}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="text" required class="form-control" name="sec2Text" placeholder="test" value="{{$sectionSetting->sec2Text}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file" required class="form-control" name="sec2Image" value="{{$sectionSetting->sec2Image}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="file" required class="form-control" name="sec2BtnLink" placeholder="button link" value="{{$sectionSetting->sec2BtnLink}}">
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
                                                 <input type="text" id="text" required class="form-control" name="sec3Text" placeholder="Heading" value="{{$sectionSetting->sec3Text}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="file" id="file" required class="form-control" name="sec3Image" value="{{$sectionSetting->sec3Image}}">
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-12">
                                                 <input type="text" id="file" required class="form-control" name="sec3BtnLink" placeholder="Button Link" value="{{$sectionSetting->sec3BtnLink}}">
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
                                                <input type="text" id="text" class="form-control" required name="sec4Heading" placeholder="heading" value="{{$sectionSetting->sec4Heading}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="text" class="form-control" required name="sec4Text" placeholder="sub-heading" value="{{$sectionSetting->sec4Text}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="file" id="file" class="form-control" required name="sec4Image" value="{{$sectionSetting->sec4Image}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="file" class="form-control" required name="sec2BtnLink" placeholder="button link" value="{{$sectionSetting->sec2BtnLink}}">
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
                                                <input type="text" id="text" class="form-control" required name="sec5Heading" placeholder="heading"  value="{{$sectionSetting->sec5Heading}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="text" class="form-control" required name="sec5Text" placeholder="sub-heading"  value="{{$sectionSetting->sec5Text}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="file" id="file" class="form-control" required name="sec5Image"  value="{{$sectionSetting->sec5Image}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" id="file" class="form-control" required name="sec5BtnLink" placeholder="button link">
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
