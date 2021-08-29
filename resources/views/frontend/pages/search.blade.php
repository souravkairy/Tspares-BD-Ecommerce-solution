@include('frontend.elements.header')
    <!-- =====================================================
                 ******* Search Result Part End *******
    ========================================================-->
<section id="search_result_part">
    <div class="container">
        <div class="row serc_result_head">
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-none d-md-block">
                <h3>Search Result for “Drone” <span>(66 Products)</span></h3>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-none d-md-block">
                <p>Sort By: <a href="#">Relevance<i class="fas fa-chevron-down" style="font-size: 13px; margin-left: 13px;"></i></a></p>
            </div>
        </div>

        <!-- mobile responsive version start -->
        <div class="mobile_part_filter">
            <h3 class="d-block d-md-none">Found ‘5’ results</h3>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-block d-md-none">
                    <a class="filt_left pr-2" href="#">Short By <i class="fas fa-chevron-down"></i></a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-block d-md-none ">
                    <a class="filter_icon" data-bs-toggle="offcanvas" href="#offcanvasExample2" role="button" aria-controls="offcanvasExample">
                        <i class="fas fa-filter"></i>Filter
                      </a>
                      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                            <div class="filt_offcav">
                                <h4>Brand</h4>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Samsung</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Xiaomi</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Realme</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Vivo</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Vivo shop</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Oppo </p>
                                </div>
                            </div>

                            <div class="filt_offcav">
                                <h4>Service</h4>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Samsung</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Xiaomi</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Realme</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Vivo</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Vivo shop</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Oppo </p>
                                </div>
                            </div>

                            <div class="filt_offcav">
                                <h4>Location</h4>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Samsung</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Xiaomi</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Realme</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Vivo</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Vivo shop</p>
                                </div>
                                <div class="box">
                                    <a href="#"></a>
                                    <p>Oppo </p>
                                </div>
                            </div>

                            <div class="price_part">
                                <h5>Price</h5>
                                <div class="price_button">
                                    <a href="#">Low</a>
                                    <a href="#">Up</a>
                                </div>
                            </div>

                            <div class="reset_button text-center">
                                <a href="#">Reset</a>
                            </div>
                          </div>
                </div>
            </div>
        </div>

        <!-- mobile responsive version end -->


        <div class="row serc_result_inner ">
            <div class=" filter_side col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-none d-md-block">
                <div class="inner_head ">
                    <h2>Filter</h2>
                </div>
                <div class="inner_brand">
                    <h3>Brand Name</h3>

                    <div class="brand_n">
                     @forelse($brands as $row)
                        <a href="#">{{ $row->name }}</a>
                     @empty
                     @endforelse
                    </div>
                </div>

                <div class="range_part">
                    <div class="range_h">
                        <h3>Price Range</h3>
                    </div>
                    <input class="range-example-input" type="text" min="$5" max="$1500" value="5" name="points" step="0.01">
                </div>

                <div class="product_color">
                    <h3>Product Colour</h3>
                    <div class="clor_top">
                        <a style="background-color: #FFC107;" href="#"></a>
                        <a style="background-color: #BFFBFF;" href="#"></a>
                        <a style="background-color: #3A5EDE;" href="#"></a>
                        <a style="background-color: #FF0000;" href="#"></a>
                    </div>

                    <div class="clor_top">
                        <a style="background-color: #E0E0E0;" href="#"></a>
                        <a style="background-color: #D0FFBF;" href="#"></a>
                        <a style="background-color: #CCEBF8;" href="#"></a>
                        <a style="background-color: #FEF0F3;" href="#"></a>
                    </div>

                    <div class="clor_top">
                        <a style="background-color: #50B83C;" href="#"></a>
                        <a style="background-color: #47C1BF;" href="#"></a>
                        <a style="background-color: #0EAAA6;" href="#"></a>
                    </div>
                </div>


                <div class="ratings_part">
                    <h3>Customer Raitings</h3>
                    <div class="rating_first">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>

                        <div class="rat_icon">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rating_first">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>

                        <div class="rat_icon">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rating_first">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>

                        <div class="rat_icon">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rating_first">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>

                        <div class="rat_icon">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rating_first">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>

                        <div class="rat_icon">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="discount_part">
                    <h3>Discounts</h3>
                    <div class="dis_inner">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>
                        <div class="dis_txt">
                            <p>Discount items</p>
                        </div>
                    </div>

                    <div class="dis_inner">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>
                        <div class="dis_txt">
                            <p>Non-Discount items</p>
                        </div>
                    </div>
                </div>

                <div class="Shipping_part">
                    <h3>Shipping</h3>
                    <div class="dis_inner">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>
                        <div class="dis_txt">
                            <p>Free Shipping</p>
                        </div>
                    </div>

                    <div class="dis_inner">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>
                        <div class="dis_txt">
                            <p>Paid Shipping</p>
                        </div>
                    </div>

                    <div class="dis_inner">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>
                        <div class="dis_txt">
                            <p>Home Delivery</p>
                        </div>
                    </div>

                    <div class="dis_inner">
                        <div class="check_box mb-2">
                            <a href="#"></a>
                        </div>
                        <div class="dis_txt">
                            <p>Store Delivery</p>
                        </div>
                    </div>
                </div>
                

                <div class="filter_button text-center">
                    <a href="#">Reset</a>
                </div>
            </div>

            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div class="row filter_right">
                    @forelse($products as $pro)
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 pb-2">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG.png')}}" alt="">
                            </div>
                            <p>Beurir Beauty</p>
                            <a href="#">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a class="btn btn-theme" href="#">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    @empty 
                        <h2>No Product Found</h2>
                    @endforelse

                    <div class="filter_last_button text-center">
                        <a class="btn btn-theme" href="#">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- =====================================================
                 ******* Search Result Part End *******
    ========================================================-->

@include('frontend.elements.footer')