@include('backend.admin.elements.header')
@include('backend.admin.elements.sidebar')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Update Product</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin-products') }}">Products</a></li>
                            <li class="breadcrumb-item active">Update Product</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Update Product</h4><br>
                            <form action="{{ url('update-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Product Name In English<span style="color: red">*</span></label>
                                            <input type="text" name="p_name" required="" class="form-control" required
                                                value="{{ $fetchProduct->p_name }}">
                                            <input type="hidden" name="id" value="{{ $fetchProduct->id }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Product Name In Arabic</label>
                                            <input type="text" name="p_name_arabic" required="" class="form-control"
                                                style="text-align:right;"
                                                value="{{ $fetchProduct->p_name_arabic }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label>Product Description In English <span
                                                    style="color: red">*</span></label>
                                            <div>
                                                <textarea class="summernote" name="p_desc" required
                                                    value="{{ $fetchProduct->p_desc }}">{{ $fetchProduct->p_desc }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label>Product Description In Arabic</label>
                                            <div>
                                                <textarea class="summernote" name="p_desc_arabic"
                                                    value="{{ $fetchProduct->p_desc_arabic }}">{{ $fetchProduct->p_desc_arabic }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Category<span style="color: red">*</span></label>
                                            <select class="form-control" name="p_category_id" required=""
                                                value="{{ $fetchProduct->p_category_id }}">
                                                <option value="">Selcet Category</option>
                                                @forelse ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @empty
                                                    No Catgory Available
                                                @endforelse

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Sub-Category</label>
                                            <select class="form-control" name="p_sub_category_id"
                                                value="{{ $fetchProduct->p_sub_category_id }}">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Price <span style="color: red">*</span></label>
                                            <input type="number" name="p_price" class="form-control" required
                                                value="{{ $fetchProduct->p_price }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Offer Price</label>
                                            <input type="number" name="p_o_price" class="form-control"
                                                value="{{ $fetchProduct->p_o_price }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Brand<span style="color: red">*</span></label>
                                            <select class="form-control" name="p_brand_id" required=""
                                                value="{{ $fetchProduct->p_brand_id }}">
                                                <option label="Choose Brand"></option>
                                                @forelse ($brands as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @empty
                                                    No brand Available
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Offer Price Start Date</label>
                                            <input type="date" name="p_o_p_s_date" class="form-control"
                                                value="{{ $fetchProduct->p_o_p_s_date }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-2">
                                        <div class="form-group">
                                            <label>Offer Price End Date</label>
                                            <input type="date" name="p_o_p_e_date" class="form-control"
                                                value="{{ $fetchProduct->p_o_p_e_date }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="p_color" class="form-control"
                                                value="{{ $fetchProduct->p_color }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" name="p_size" class="form-control"
                                                value="{{ $fetchProduct->p_size }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <div class="form-group">
                                            <label>Stock Availability<span style="color: red">*</span></label>
                                            <input type="number" name="p_stock" class="form-control" required
                                                value="{{ $fetchProduct->p_stock }}">
                                        </div>
                                    </div>
                                    <div class="border col-lg-6">
                                        <div class="row m-3">
                                            <div class="col-lg-8">
                                                <label>Featured Image<span style="color: red">*</span><span>(Size:
                                                        338×293)</span></label><br>
                                                <input type="file" id="file" class="form-control" name="p_f_img"
                                                    onchange="readURL1(this);" accept="image"
                                                    value="{{ $fetchProduct->p_f_img }}" required><br>
                                                <img src="" id="one">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="col-lg-4"> <label>previous Image</label><br>
                                                <img src="{{ $fetchProduct->p_f_img }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border col-lg-6">
                                        <div class="row m-3">
                                            <div class="col-lg-8">
                                                <label>Product Image1<span style="color: red">*</span><span>(Size:
                                                        1140×480)</span></label><br>
                                                <input type="file" id="file" class="form-control" name="p_img1"
                                                    onchange="readURL2(this);" accept="image"
                                                    value="{{ $fetchProduct->p_img1 }}" required><br>
                                                <img src="" id="two">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="col-lg-4"> <label>previous Image</label><br>
                                                <img src="{{ $fetchProduct->p_img1 }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border col-lg-6">
                                        <div class="row m-3">
                                            <div class="col-lg-8">
                                                <label>Product Image2<span style="color: red">*</span><span>(Size:
                                                        1140×480)</span></label><br>
                                                <input type="file" id="file" class="form-control" name="p_img2"
                                                    onchange="readURL3(this);" accept="image"
                                                    value="{{ $fetchProduct->p_img2 }}" required><br>
                                                <img src="" id="three">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="col-lg-4"> <label>previous Image</label><br>
                                                <img src="{{ $fetchProduct->p_img2 }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border col-lg-6">
                                        <div class="row m-3">
                                            <div class="col-lg-8">
                                                <label>Product Image3<span>(Size:
                                                        1140×480)</span></label><br>
                                                <input type="file" id="file" class="form-control" name="p_img3"
                                                    onchange="readURL4(this);" accept="image"
                                                    value="{{ $fetchProduct->p_img3 }}" ><br>
                                                <img src="" id="four">
                                                <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="col-lg-4"> <label>previous Image</label><br>
                                                <img src="{{ $fetchProduct->p_img3 }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border col-lg-6">
                                        <div class="row m-3">
                                            <div class="col-lg-8">
                                            <label>Product Image4</span><span>(Size:
                                                    1140×480)</span></label><br>
                                            <input type="file" id="file" class="form-control" name="p_img4"
                                                onchange="readURL5(this);" accept="image"
                                                value="{{ $fetchProduct->p_img4 }}" ><br>
                                            <img src="" id="five">
                                            <span class="font-13 text-muted"></span>
                                            </div>
                                            <div class="col-lg-4"> <label>previous Image</label><br>
                                                <img src="{{ $fetchProduct->p_img4 }}" class="w-50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 pt-3">
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="p_featured" id="customCheck1"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2"
                                                        value="1">
                                                    <label class="custom-control-label" for="customCheck1">Add To
                                                        Featured</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="p_flash_sell" id="customCheck2"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2"
                                                        value="1">
                                                    <label class="custom-control-label" for="customCheck2">Add To Flash
                                                        Sale</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="p_status"
                                                        id="customCheck3" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2" value="1" required>
                                                    <label class="custom-control-label"
                                                        for="customCheck3">Status</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="submit"
                                        class="btn btn-success btn-lg btn-block waves-effect waves-light">Update
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
            $('select[name="p_category_id"]').on('change', function() {
                var p_category_id = $(this).val();
                if (p_category_id) {
                    $.ajax({
                        url: "{{ url('/get/subcategory/') }}/" + p_category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="p_sub_category_id"]').empty();
                            $.each(data, function(key, value) {

                                $('select[name="p_sub_category_id"]').append(
                                    '<option value="' +
                                    value.id + '">' + value.sub_cat_name +
                                    '</option>');
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
