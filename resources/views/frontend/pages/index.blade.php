@include('frontend.elements.header')

@php
$cat = DB::table('categories')->limit(8)->get();
$hot_cat =  DB::table('categories')->where('hot',1)->limit(8)->get();
$section = DB::table('section_setting')->first();
$freeShp = DB::table('site_settings')->select('freeShippingAmn')->first();
@endphp
<!-- =====================================================
             ******* Discount Part Start *******
========================================================-->
<section id="discount_part">
    <div class="container-fluid px-lg-0">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-5 col-md-5 p-lg-0">
                <div class="offer_image">
                    <img src="{{ asset($section->sec1Image) }}">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-7 col-md-7 p-lg-0">
                <div class="offer_text">
                    <h1 class="text-center"><span>{{$section->sec1Text}}</span></h1>
                    <h2>{{$section->sec1catName}}</h2>
                    <a href="{{$section->sec1BtnLink}}">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
             ******* Discount Part End *******
========================================================-->



<!-- =====================================================
             ******* Shipping Part Start *******
========================================================-->
<section id="shipping_part">
    <div class="free_shipping">
        <div class="container px-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-6 p-lg-0 col-6">
                    <div class="free_left_text text-center">
                        <h2>Free Shipping <span>Over ${{$freeShp->freeShippingAmn}}</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="free_right_text text-center">
                        <h2> 15 Days Easy Return</h2>
                    </div>
                </div>
            </div>
            <!-- Free Shoping items -->
            <div class="row justify-content-center">
                @forelse ($cat as $item)
                    <div class="col-3 col-md-3 col-lg-3">
                        <div class="free_items">
                            <a href="{{ url('/products_by_cat/'.$item->id.'/'.$item->name) }}"><img src="{{ $item->cat_logo }}" alt=""></a>
                            <h2>{{ $item->name }}</h2>
                        </div>
                    </div>
                @empty
                    <p>No Category Found</p>
                @endforelse

            </div>
        </div>
    </div>
</section>
<!-- =====================================================
             ******* Shipping Part End *******
========================================================-->


<!-- =====================================================
             ******* Daily New Part Start *******
========================================================-->
<section id="daily_new">
    <div class="daily_new_collection">
        <h2>Daily New</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-6 col-md-6 pl-0 sm-pr-0 mb-2" style="padding-right: 0px">
                    <div class="daily_items">
                        <div class="daily_image">
                            <img src="{{ asset($section->sec2Image) }}"
                                alt="">
                        </div>
                        <div class="daily_item_text d-none d-md-block">
                            <p>{{$section->sec2Heading}}</p>
                            <h2>{{$section->sec2Text}}</h2>
                            <a href="{{$section->sec2BtnLink}}">Shop Now<i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="daily_item_m d-block d-md-none">
                                <h2>Top ranking</h2>
                                <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 col-md-6 pr-0 pl-0 mb-2">
                    <div class="daily_items">
                        <div class="daily_image">
                            <img src="{{ asset($section->sec3Image) }}"
                                alt="">
                        </div>
                        <div class="daily_item_text d-none d-md-block">
                            <h2>{{$section->sec2Heading}}</h2>
                            <a href="{{$section->sec3Text}}">Shop Now<i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="daily_item_m d-block d-md-none">
                            <h2>Top ranking</h2>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
             ******* Daily New Part End *******
========================================================-->



<!-- =====================================================
             ******* Style Part Start *******
========================================================-->
<section id="style_part">
    <div class="select_items">
        <h2>Select Your style</h2>
        <div class="row">
            <div class="col-md-5 col-6 col-sm-6">
                <div class="select_image">
                    <a href="#"><img
                            src="{{ asset($section->sec4Image) }}"
                            class="img-fluid w-100" alt=""></a>
                </div>
            </div>
            <div class="col-md-7 col-6 col-sm-6 pr-0">
                <div class="select_text d-none d-md-block text-center">
                    <h2><span>{{$section->sec4Heading}}</span></h2>
                    <p>{{$section->sec4Text}}</p>
                    <a href="{{$section->sec3BtnLink}}">Shop Now</a>
                </div>
                <div class="select_text d-block d-md-none">
                    <h2>Get 70% Discount  On new collection.</h2>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-5 col-6 col-sm-6 order-2 order-md-2">
                <div class="select_image">
                    <a href="#"><img
                            src="{{ asset($section->sec5Image) }}"
                            class="img-fluid w-100" alt=""></a>
                </div>
            </div>
            <div class="col-md-7 col-6 col-sm-6 order-1 order-md-1 pr-0 pl-0">
                <div class="select_text d-none d-md-block text-center">
                    <h2><span>{{$section->sec5Heading}}</span></h2>
                    <p>{{$section->sec5Text}}</p>
                    <a href="{{$section->sec5BtnLink}}">Shop Now</a>
                </div>
                <div class="select_text d-block d-md-none">
                    <h2>Get 70% Discount  On new collection.</h2>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
             ******* Style Part End *******
========================================================-->


<!-- =====================================================
             ******* Catagory Part Start *******
========================================================-->
<section id="catagory_part">
    <div class="hot_categories">
        <div class="container-fluid">
            <h2>Hot Categorie Recomenned</h2>
            <div class="row">
                @forelse ($hot_cat as $item)

                <div class="col-md-6 col-6 col-sm-6 col-lg-6">
                    <a href="{{ url('/products_by_cat/'.$item->id.'/'.$item->name) }}">
                    <div class="hot_cate_single">
                        <div class="row align-items-center cat_m_v">
                            <div class="col-md-6 col-7 col-sm-7 col-lg-6">
                                <div class="hot_cate_link">
                                    <h2>{{$item->name}}</h2>
                                    <div class="hot_cat_anchor">
                                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-5 col-sm-5 col-lg-6">
                                <div class="hot_cate_image">
                                    <img src="{{ asset($item->cat_logo) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                @empty
                    <h6>No Hot catrgory</h6>
                @endforelse

            </div>
        </div>
    </div>
</section>


<!-- =====================================================
             ******* Catagory Part End *******
========================================================-->


<!-- =====================================================
             ******* Flash Sell Part Start *******
========================================================-->
<section id="flash_cell">
    <div class="flash_item">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xl-4 d-none d-md-block flash_head">
                    <h4>Flash Sale</h4>
                </div>

                <!-- =========== -->
                <div class="col-lg-8 d-none d-md-block">
                    <div class="wrapper">
                        <h2>Ends in </h2>
                        <ul class="flip-clock-container box">
                            <li class="flip-item-seconds">20</li>
                            <li class="flip-item-minutes">30</li>
                            <li class="flip-item-hours">02</li>
                        </ul>
                    </div>
                </div>
                <!-- =============== -->


                <!-- Mobile Timer version start -->
                <div class="container">
                    <div class="row mobile_timer">
                        <div class="col-9 col-sm-9 d-block d-md-none">
                            <div class="wrapper">
                                <h2>Flash Sell</h2>
                                <ul class="flip-clock-container box">
                                    <li class="flip-item-seconds">20</li>
                                    <li class="flip-item-minutes">30</li>
                                    <li class="flip-item-hours">02</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-3 col-sm-3 d-block d-md-none">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Timer version End -->

            </div>

            <div class="row flash_slider py-2 justify-content-center">
                @forelse($plashproducts as $plashproduct)
                <div class="col-md-2 col-sm-2">
                    <div class="flash_inner">
                        <div class="flash_img">
                            <a href="{{ route('product.view', $plashproduct->id) }}"><img src="{{ $plashproduct->p_f_img }}" alt=""></a>
                            <div class="offer_tag">
                                <p>
                                    @if ($plashproduct->p_o_price == null)
                                    @else
                                    @php
                                        $min = $plashproduct->p_price- $plashproduct->p_o_price;
                                        $per = round(($plashproduct->p_price*$min)/100)
                                    @endphp
                                   {{$per}}% OFF
                                    @endif

                                </p>
                            </div>
                        </div>
                        <a href="{{ route('product.view', $plashproduct->id) }}">
                            <h2>{{ $plashproduct->p_name }}</h2>
                        </a>
                        @if ($plashproduct->p_o_price == null)
                            <span>${{ $plashproduct->p_price }}</span>
                        @else
                            <span
                                style="margin-right: 5px;">${{ $plashproduct->p_o_price }}</span>$<del>{{ $plashproduct->p_price }}</del>
                        @endif
                    </div>
                </div>
                @empty
                    <h3>No Flash Products Found</h3>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
             ******* Flash Sell Part End *******
========================================================-->



<!-- =====================================
        Recomenned Items Start
====================================== -->
<!-- <section id="recommend_part">
    <div class="recom_section">
        <div class="container-fluid">
            <h2>Recommend</h2>
            <div class="row py-2">
                @forelse($products as $product)
                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                        <div class="recom_item">
                            <div class="recom_image">
                                <img src="{{ $product->p_f_img }}" alt="">
                                <div class="offer_tag">
                                    <p>49% OFF</p>
                                </div>
                            </div>
                            <a href="{{ route('product.view', $product->id) }}">
                                <h2>{{ $product->p_name }}</h2>
                                @if ($product->p_o_price == null)
                                    <span>${{ $product->p_price }}</span>
                                @else
                                    <span>${{ $product->p_price }}</span> $<del>{{ $product->p_o_price }}</del>
                                @endif
                            </a>
                        </div>
                    </div>
                @empty
                    <h3>No Product Found</h3>
                @endforelse
            </div>


            <a class="recom_button" href="{{ url('/products') }}">View All</a>
        </div>
    </div>
</section> -->
<!-- =====================================
        Recomenned Items End
====================================== -->

<!-- =====================================
        Recomenned Items Start naeem
====================================== -->
<div class="recommend____product">
    <div class="container-fluid">
        <h2 class="text-center">Recommend</h2>
        <div class="row g-2">
            @forelse($products as $product)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="recommend-product-cart">
                    <div class="recommend-product-img-section">
                        <div class="product-img">
                            <a href="{{ route('product.view', $product->id) }}"><img class="img-fluid" src="{{ $product->p_f_img }}"></a>
                        </div>
                        {{-- <div class="product-off-percentage d-flex flex-column justify-content-center align-items-center">
                            <span>30%</span>
                            <span>Off</span>
                        </div> --}}
                    </div>
                    <div class="recommend-product-des">
                        <p><a href="{{ route('product.view', $product->id) }}">{{ $product->p_name }}</a></p>
                        <p>
                            @if($product->p_o_price == null)
                                <strong>${{ $product->p_price }}</strong>
                            @else
                                <strong>${{ $product->p_o_price }}</strong><del>${{ $product->p_price }}</del>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @empty
                <h3>No Product Found</h3>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mb-5">
            <a class="recom_button" href="{{ url('/products') }}">View All</a>
        </div>
    </div>
</div>
<!-- =====================================
        Recomenned Items End naeen
====================================== -->
@include('frontend.elements.footer')
