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
                       <h4 class="page-title">Sub Category</h4>
                   </div>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-right">
                       <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                       <li class="breadcrumb-item active">Update Sub Category</li>
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
                    <h4 class="mt-0 header-title">Update Sub Category</h4><br>
                    <form action="{{ url('update_sub_category') }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label>Name<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" value="{{$subcategory->sub_cat_name}}" name="sub_cat_name">
                                    <input type="hidden" name="id" value="{{$subcategory->id}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label>Select Category<span style="color: red">*</span></label>
                                    <select name="category_id" id="" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @forelse ($categories as $item)
                                         <option value="{{$item->id}}">{{$item->name}}</option>
                                        @empty

                                        @endforelse

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit"
                                class="btn btn-success btn-lg btn-block waves-effect waves-light">Update
                                Sub Category</button>
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
@include('backend.admin.elements.footer')
