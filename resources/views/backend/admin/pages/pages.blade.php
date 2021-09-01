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
                             <h4 class="page-title">All Pages || Total : {{ $pages->count('id') }}</h4>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-right">
                             <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                             <li class="breadcrumb-item active">Pages</li>
                         </ol>
                     </div>
                 </div>
                 <!-- end row -->
             </div>
             <!-- end page-title -->

             <div class="row">
                 <div class="col-lg-12">
                     <div class="card m-b-30">
                         <div class="card-body">
                             <button type="button" class="btn btn-success waves-effect waves-light mb-2" data-toggle="modal"
                                 data-target=".bs-example-modal-lg">Add Page</button>
                             <div>
                                 @if ($errors->any())
                                     <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $error)
                                                 <li>{{ $error }}</li>
                                             @endforeach
                                         </ul>
                                     </div>
                                 @endif
                             </div>
                             <!--  Modal content for the above example -->
                             <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title mt-0">Add Page</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                 aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>

                                         <div class="modal-body">
                                             <form action="{{ url('save_pages') }}" method="post">
                                                 @csrf
                                                 <div class="card-body">
                                                     <div class="form-group row">
                                                         <div class="col-sm-12  mb-2">
                                                            <label for="example-text-input">Page Name</label>
                                                             <input class="form-control" type="text" name="name"
                                                                 id="example-text-input" required="">
                                                         </div>
                                                     </div>
                                                     <div class="form-group row">
                                                         <div class="col-sm-12  mb-2">
                                                            <label for="example-text-input">Description</label>
                                                            <textarea class="form-control" cols="30" rows="10" name="description" required=""></textarea>
                                                             {{-- <textarea class="form-control"  name="description" id="elm1"  required=""></textarea> --}}
                                                         </div>
                                                     </div>
                                                     <div class="text-center m-t-15">
							                            <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Submit</button>
							                        </div>
                                                 </div>
                                             </form>
                                         </div>
                                     </div><!-- /.modal-content -->
                                 </div><!-- /.modal-dialog -->
                             </div><!-- /.modal -->

                             <div class="table-responsive">
                                 <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                     style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                     <thead>
                                         <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     <tbody>
                                         @forelse ($pages as $item)
                                             <tr>
                                                 <td>{{ $id }}</td>
                                                 <td>{{ $item->name }}</td>
                                                 <td>
                                                     <a title="Edit" href="{{ url('edit-page/' . $item->id) }}"
                                                         class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                     <a title="Delete" href="{{ url('delete-page/' . $item->id) }}"
                                                         class="btn btn-danger btn-sm" id="delete"><i
                                                             class="fa fa-trash"></i></a>
                                                 </td>
                                             </tr>
                                             @php
                                                 $id++;
                                             @endphp
                                         @empty
                                             <h3>No data found</h3>
                                         @endforelse
                                     </tbody>
                                 </table>
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
