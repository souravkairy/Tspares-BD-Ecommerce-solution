@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Product</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Admin</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Add Product</h4><br>
                            <form action="{{ url('store_project') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Product Name In English<span style="color: red">*</span></label>
                                            <input type="text" name="" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Product Name In Arabic<span style="color: red">*</span></label>
                                            <input type="text" name="" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label>Product Description In English</label>
                                            <div>
                                                <textarea class="summernote" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label>Product Description In Arabic</label>
                                            <div>
                                                <textarea class="summernote" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Brand<span style="color: red">*</span></label>
                                            <select class="form-control" name="division" required="">
                                                <option label="Choose Brand"></option>
                                                <option value="">Brand</option>
                                                <option value="">Brand</option>
                                                <option value="">Brand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Category<span style="color: red">*</span></label>
                                            <select class="form-control" name="category" required="">
                                                <option value="">Selcet Category</option>
                                                <option value="">Phone</option>
                                                <option value="">Watch</option>
                                                <option value="">Laptop</option>
                                                <option value="">TV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Offer Price</label>
                                            <input type="number" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Offer Price Start Date</label>
                                            <input type="date" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Offer Price End Date</label>
                                            <input type="date" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Stock Availability<span style="color: red">*</span></label>
                                            <select class="form-control" name="division" required="">
                                                <option value="">In Stock</option>
                                                <option value="">Out Of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="featured"
                                                        id="customCheck1" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label" for="customCheck1">Add To
                                                        Featured</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="featured"
                                                        id="customCheck1" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1">
                                                    <label class="custom-control-label" for="customCheck1">Add To Flash
                                                        Sale</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <label>Featured Image<span style="color: red">*</span><span>(Size:
                                                338×293)</span></label><br>
                                        <input type="file" id="file" class="" name="featured_img"
                                            onchange="readURL1(this);" accept="image" required=""><br>
                                        <img src="" id="one">
                                        <span class="font-13 text-muted"></span>
                                    </div>

                                    <div class="col-xl-3">
                                        <label>Product Image1<span style="color: red">*</span><span>(Size:
                                                1140×480)</span></label><br>
                                        <input type="file" id="file" class="" name="image1" onchange="readURL2(this);"
                                            accept="image" required=""><br>
                                        <img src="" id="two">
                                        <span class="font-13 text-muted"></span>
                                    </div>

                                    <div class="col-xl-3">
                                        <label>Product Image2<span style="color: red">*</span><span>(Size:
                                                1140×480)</span></label><br>
                                        <input type="file" id="file" class="" name="image2" onchange="readURL3(this);"
                                            accept="image" required=""><br>
                                        <img src="" id="three">
                                        <span class="font-13 text-muted"></span>
                                    </div>

                                    <div class="col-xl-3">
                                        <label>Product Image3<span style="color: red">*</span><span>(Size:
                                                1140×480)</span></label><br>
                                        <input type="file" id="file" class="" name="image3" onchange="readURL4(this);"
                                            accept="image" required=""><br>
                                        <img src="" id="four">
                                        <span class="font-13 text-muted"></span>
                                    </div>

                                    <div class="col-xl-3">
                                        <label>Product Image4<span style="color: red">*</span><span>(Size:
                                                1140×480)</span></label><br>
                                        <input type="file" id="file" class="" name="image4" onchange="readURL5(this);"
                                            accept="image" required=""><br>
                                        <img src="" id="five">
                                        <span class="font-13 text-muted"></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="submit"
                                        class="btn btn-success btn-lg btn-block waves-effect waves-light">Save
                                        Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- get subcategory by ajax -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="division"]').on('change', function() {
                var division = $(this).val();
                if (division) {
                    $.ajax({
                        url: "{{ url('/get/district/') }}/" + division,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="district"]').empty();
                            $.each(data, function(key, value) {

                                $('select[name="district"]').append('<option value="' +
                                    value.id + '">' + value.district + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    <script type="text/javascript">
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(130);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#two')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(130);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#three')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(130);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#four')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(130);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#five')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(130);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    @include('backend.admin.elements.footer')
