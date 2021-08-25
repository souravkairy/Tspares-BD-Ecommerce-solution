<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomabox</title>


    <!-- ========== font link start ========= -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- ========== font link End ========= -->


    <!-- =========== Css link Start =========== -->
    <link href="{{ asset('frontend/assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/asRange.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flip-clock.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">
    <!-- =========== Css link Start =========== -->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>

<body>
    <!-- =====================================================
                 ******* Header Part Start *******
    ========================================================-->
    <header class="d-none d-md-block" id="Header">
        @php
            $total_cart_product=Cart::content()->count();
            $cart_products=Cart::content()->take(4);
            $wishlist=DB::table('wishlist')->count();
            $userid = Auth::id();
            $wishlist_products=DB::table('wishlist')->join('products','wishlist.product_id','products.id')->select('products.*','wishlist.user_id')->where('wishlist.user_id',$userid)->limit(4)->get();
        @endphp
        <div class="container">
            <div class="row">
                <div class="col-sm-3 py-3 py-sm-0 text-sm-start text-center">
                    <div class="header_top_left">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-sm-9 text-sm-end text-lg-end">
                    <div class="header_top_right ">
                        <a href="{{ url('/order-tracking') }}">Order tracking</a>
                        <a href="#">Help</a>

                        <!-- Dropdown start -->
                        <div class="dropdown head_drop">
                            <button class="btn dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <a class="text-dark" href="#"><i class="fas fa-globe"></i><span
                                        style="margin-left: 8px;">English (US)</span><i class="fas fa-chevron-down"
                                        style="font-size: 13px; margin-left: 8px;"></i></a>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Bangli</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <!-- Dropdown End -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =====================================================
                 ******* Header Part End *******
    ========================================================-->





    <!-- =====================================================
                 ******* Menu Part Start *******
    ========================================================-->
    <nav id="menu_part">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <!-- Mobile Menu -->
                <div class="col-2 mobile_menu d-block d-md-none text-center">
                    <a class="mobile-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <i class="fas fa-bars"></i>
                    </a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <div class="mobile_login">
                                <span><i class="fas fa-user"></i></span>
                                <div class="user_info">
                                    <h3>Join Lomabox </h3>
                                    @guest
                                    @else
                                    <a href="{{ url('/profile') }}">My Account</a>
                                    @endguest
                                </div>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile_side_menu text-start">
                                <ul>
                                    <li><a href="#" id="Click"><i class="fas fa-user-secret"></i>Apparel</a><a href="#" id="Click"><i class="fas fa-chevron-right"></i></a>
                                        <ul class="mobile_side_cate hide one">
                                            <li><a href="#" id="Click"><i class="fas fa-chevron-left"></i>Aparel</a>
                                            </li>
                                            <li><a id="Click2" href="#">Woman</a>
                                            </li>
                                            <li><a href="#">Aparel1</a></li>
                                            <li><a href="#">Aparel2</a></li>
                                            <li><a href="#">Aparel3</a></li>
                                            <li><a href="#">Aparel4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" id="Click"><i class="fas fa-user-secret"></i>Apparel</a><a href="#" id="Click"><i class="fas fa-chevron-right"></i></a>
                                        <ul class="mobile_side_cate hide one">
                                            <li><a href="#" id="Click"><i class="fas fa-chevron-left"></i>Aparel</a>
                                            </li>
                                            <li><a id="Click2" href="#">Woman</a>
                                            </li>
                                            <li><a href="#">Aparel1</a></li>
                                            <li><a href="#">Aparel2</a></li>
                                            <li><a href="#">Aparel3</a></li>
                                            <li><a href="#">Aparel4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                @guest
                                <div class="px-2 mt-3 mb-2">
                                   <a class="text-muted" href="{{url('/login-panel')}}"><b>Sign in</b></a>
                                </div>
                                <div class="px-2">
                                   <a class="text-muted" href="{{ url('/registration') }}"><b>Register</b></a> 
                                </div>
                                @else
                                <div class="px-2 mt-3">
                                   <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-muted" href="{{ route('logout') }}"><b>Logout</b></a> 
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                                @endguest
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-2 col-2 order-1 order-md-1 m-0">
                    <div class="menu_brand">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/image/image 58.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-6 order-2 order-md-2 p-0">
                    <div class="menu_search d-none d-md-block">
                        <form class="d-flex flex-wrap justify-content-center">
                            <input class="form-control pr-0" type="search" placeholder="Search" aria-label="Search">
                            <!-- catagory -->
                            <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal">All
                                Categories<i class="fas fa-chevron-down"></i></a>
                            <!-- Modal -->
                            <div class="modal fade h-70vh" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="false" data-bs-keyboard="false"
                                tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="row ">
                                            <div class="col-8">
                                                <div class="product_categories">
                                                    <h2 class="mt-3 ms-2">product categories</h2>
                                                    <ul class="cat_menu">
                                                        <li>
                                                            <a href="#"><i class="fas fa-user-secret"></i>Apparel</a>
                                                            <ul class="cate_slide_menu">
                                                                <li><a href="#">Item-1</a></li>
                                                                <ul class="cate_slide_menu2">
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                </ul>
                                                        </li>
                                                        <li><a href="#">Item-2</a></li>
                                                        <li><a href="#">Item-3</a></li>
                                                        <li><a href="#">Item-4</a></li>
                                                        <li><a href="#">Item-5</a></li>
                                                        <li><a href="#">Item-6</a></li>
                                                        <li><a href="#">Item-7</a></li>
                                                        <li><a href="#">Item-8</a></li>
                                                        <li><a href="#">Item-9</a></li>
                                                        <li><a href="#">Item-10</a></li>
                                                        <li><a href="#">Item-11</a></li>
                                                    </ul>
                                                    </li>

                                                    <li><a href="#"><i class="fas fa-utensils"></i>Food from
                                                            restaurants</a>
                                                        <ul class="cate_slide_menu">
                                                            <li><a href="#">Item-2</a></li>
                                                            <ul class="cate_slide_menu2">
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Item-2</a></li>
                                                    <li><a href="#">Item-3</a></li>
                                                    <li><a href="#">Item-4</a></li>
                                                    <li><a href="#">Item-5</a></li>
                                                    <li><a href="#">Item-6</a></li>
                                                    <li><a href="#">Item-7</a></li>
                                                    <li><a href="#">Item-8</a></li>
                                                    <li><a href="#">Item-9</a></li>
                                                    <li><a href="#">Item-10</a></li>
                                                    <li><a href="#">Item-11</a></li>
                                                    </ul>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-tractor"></i>Toys</a>
                                                        <ul class="cate_slide_menu">
                                                            <li><a href="#">Item-1</a></li>
                                                            <ul class="cate_slide_menu2">
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Item-2</a></li>
                                                    <li><a href="#">Item-3</a></li>
                                                    <li><a href="#">Item-4</a></li>
                                                    <li><a href="#">Item-5</a></li>
                                                    <li><a href="#">Item-6</a></li>
                                                    <li><a href="#">Item-7</a></li>
                                                    <li><a href="#">Item-8</a></li>
                                                    <li><a href="#">Item-9</a></li>
                                                    <li><a href="#">Item-10</a></li>
                                                    <li><a href="#">Item-11</a></li>
                                                    </ul>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-frown-open"></i>Pet food</a>
                                                        <ul class="cate_slide_menu">
                                                            <li><a href="#">Item-1</a></li>
                                                            <ul class="cate_slide_menu2">
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                                <li><a href="#">Item</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Item-2</a></li>
                                                    <li><a href="#">Item-3</a></li>
                                                    <li><a href="#">Item-4</a></li>
                                                    <li><a href="#">Item-5</a></li>
                                                    <li><a href="#">Item-6</a></li>
                                                    <li><a href="#">Item-7</a></li>
                                                    <li><a href="#">Item-8</a></li>
                                                    <li><a href="#">Item-9</a></li>
                                                    <li><a href="#">Item-10</a></li>
                                                    <li><a href="#">Item-11</a></li>
                                                    </ul>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-bus"></i>Vehicles</a>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-baby"></i>For babies
                                                        </a></li>
                                                    <li><a href="#"><i class="fas fa-volleyball-ball"></i>Sports</a>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-socks"></i></i>Men’s
                                                            Fashion</a>
                                                        <ul class="cate_slide_menu">
                                                            <li><a href="#">T-Shirt</a></li>
                                                            <ul class="cate_slide_menu2">
                                                                <li><a href="#">T-Shirt</a></li>
                                                                <li><a href="#">Shirt</a></li>
                                                                <li><a href="#">Watch</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">vehicles</a></li>
                                                                <li><a href="#">Panth</a></li>
                                                                <li><a href="#">Bag</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Shirt</a></li>
                                                    <li><a href="#">Watch</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Panth</a></li>
                                                    <li><a href="#">Bag</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Kurtas</a></li>
                                                    <li><a href="#">Panjabi</a></li>
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Shirt</a></li>
                                                    </ul>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-lightbulb"></i>LED lamps</a>
                                                    </li>
                                                    <li><a href="#"><i class="fas fa-dumbbell"></i>Gym</a></li>
                                                    <li><a href="#"><i class="fas fa-star-of-life"></i>Women’s
                                                            Fashion</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="feature_product">
                                                    <h2 class="mt-3 ms-2">feature product</h2>
                                                    <div class="row m-0">
                                                        <div class="col-6">
                                                            <div class="single_pro_feature">
                                                                <div class="single_pro_image">
                                                                    <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="images">
                                                                </div>
                                                                <h3>Mordern Man's Jacket</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="single_pro_feature">
                                                                <div class="single_pro_image">
                                                                    <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png')}}"
                                                                        alt="images">
                                                                </div>
                                                                <h3>Mordern Man's Jacket</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="single_pro_feature">
                                                                <div class="single_pro_image">
                                                                    <img src="assets/image/image 49 1.png" alt="images">
                                                                </div>
                                                                <h3>Mordern Man's Jacket</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="single_pro_feature">
                                                                <div class="single_pro_image">
                                                                    <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png')}}"
                                                                        alt="images">
                                                                </div>
                                                                <h3>Mordern Man's Jacket</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="single_pro_feature">
                                                                <div class="single_pro_image">
                                                                    <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="images">
                                                                </div>
                                                                <h3>Mordern Man's Jacket</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="single_pro_feature">
                                                                <div class="single_pro_image">
                                                                    <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png')}}"
                                                                        alt="images">
                                                                </div>
                                                                <h3>Mordern Man's Jacket</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Mobile Search -->
                    <div class="d-block d-md-none">
                        <form class="d-flex flex-wrap justify-content-center">
                            <input class="mobile-form" type="search" placeholder="Search" aria-label="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Admin section start -->
                <div class="col-lg-5 col-md-12 col-2 order-3 order-md-3  py-4 text-start text-md-center">
                    <!-- <div class="menu_admin d-none d-md-block"> -->
                    <div class="menu_admin">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item d-none d-md-block" role=""><a class="nav-link" id="pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#adminBell" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="true" aria-hidden="true"><i
                                        class="fas fa-bell"></i></a></li>
                            <li class="nav-item d-none d-md-block" role=""><a class="nav-link" id="pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#adminCart" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="true" aria-hidden="true"><i
                                        class="fas fa-cart-plus"></i><span>{{ $total_cart_product }}</span></a></li>

                            <!--  Mobile Part  -->
                            <li class="nav-item Mobile_tab d-block d-md-none" role=""><a class=""
                                    id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#adminCart"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="true"
                                    aria-hidden="true"><i class="fas fa-cart-plus mobile_link"></i><span>3</span></a>
                            </li>
                            <!-- End Mobile Part -->

                            <li class="nav-item d-none d-md-block" role=""><a class="nav-link" id="pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#adminLove" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="true" aria-hidden="true"><i
                                        class="fas fa-heart"></i><span>{{ $wishlist }}</span></a></li>

                            @guest
                            @else    
                            <li class="nav-item d-none d-md-block" role=""><a href="{{ url('/profile') }}" class="nav-link" id="pills-profile-tab"><i
                                        class="fas fa-user"></i></a></li>
                            @endguest
                            <div class="menu_login  d-none d-md-block">
                                <h3>Join Lomabox</h3>
                                <!-- Dropdown start -->
                                <div class="dropdown head_drop">
                                    <button class="btn dropdown-toggle" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <a href="#">My Account <i class="fas fa-chevron-down"
                                                style="font-size: 14px; border: none; margin-left: 0px;"></i> </a>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @guest
                                            <li><a class="dropdown-item" href="{{url('/login-panel')}}">Sign in</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/registration') }}">Register</a></li>
                                        @else
                                            <li><i class="ti-power-off"></i><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Sign Out
                                            </a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endguest
                                    </ul>
                                </div>
                                <!-- Dropdown End -->

                            </div>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Notifaction Div -->
                            <div class="tab-pane fade" id="adminBell" role="tabpanel"
                                aria-labelledby="pills-profile-tab" aria-hidden="false">
                                <div class="notifaction_tab">
                                    <h2 class="add_tab_heading">My Notifactions</h2>
                                    <div class="single_notif">
                                        <div class="notif_thumb">
                                            <img src="{{ asset('frontend/assets/image/amazon.png')}}" alt="bag">
                                        </div>
                                        <p>Your order #500158052 is now on the way for delivery.</p>
                                        <span>10.44AM</span>
                                    </div>
                                    <div class="single_notif">
                                        <div class="notif_thumb">
                                            <img src="{{ asset('frontend/assets/image/amazon.png')}}" alt="bag">
                                        </div>
                                        <p>Your order #500158052 is now on the way for delivery.</p>
                                        <span>10.44AM</span>
                                    </div>
                                    <div class="single_notif">
                                        <div class="notif_thumb">
                                            <img src="{{ asset('frontend/assets/image/amazon.png')}}" alt="bag">
                                        </div>
                                        <p>Your order #500158052 is now on the way for delivery.</p>
                                        <span>10.44AM</span>
                                    </div>
                                    <a class="btn btn-theme" href="{{ url('/notification') }}">See All</a>
                                </div>
                            </div>
                            <!-- Cart Div -->
                            <div class="tab-pane fade cartmbel" id="adminCart" role="tabpanel"
                                aria-labelledby="pills-profile-tab" aria-hidden="falses">
                                <div class="cart_tab">
                                    <h2 class="add_tab_heading">Your Cart</h2>
                                    @forelse($cart_products as $cart_product)
                                    <div class="single_cart mobile_cart">
                                        <div class="cart_thumb">
                                            <img src="{{$cart_product->options->image}}" alt="">
                                        </div>
                                        <div class="cart_des">
                                            <h3>{{ $cart_product->name }}</h3>
                                            <p>Size:<span>{{ $cart_product->options->size }}</span> Color:<span>{{ $cart_product->options->color }}</p>
                                        </div>
                                        <form method="post" action="{{ route('update.cartitem') }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="item_quant mobile_quant">
                                                <button type="button" class="quantity-left-minus" data-type="minus"
                                                    data-field="">
                                                    <span>-</span>
                                                </button>
                                                <input type="number" id="quantity" name="quantity"
                                                    class="form-control input-number" value="{{ $cart_product->qty }}" min="1" max="15" required="true">

                                                <button type="button" class="quantity-right-plus" data-type="plus"
                                                    data-field="">
                                                    <span>+</span>
                                                </button>

                                                <button type="submit"><i class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </form>
                                        <div class="cart_balance">
                                            <span class="px-2">${{ $cart_product->price }}</span>
                                        
                                            <span class="mobile_t cursor-pointer" onclick="deleteCartProduct({{ $cart_product->id }})"><i class="far fa-trash-alt"></i></span>
                                            <form id="delete-form-{{ $cart_product->id }}" action="{{ route('cart.product.delete',$cart_product->rowId) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                    @empty 
                                        <h2>No Items In Cart</h2>
                                    @endforelse
                                    <div class="cart_mobile_button  text-center">
                                        <a href="#">See All</a>
                                    </div>
                                    <a class="btn btn-theme" href="{{ route('all.cart.product') }}">See All</a>
                                </div>
                            </div>
                            <!--=================================-->

                            <!--======================================-->
                            <!-- Love/Wish Div -->
                            <div class="tab-pane fade" id="adminLove" role="tabpanel"
                                aria-labelledby="pills-contact-tab" aria-hidden="true">
                                <div class="cart_tab">
                                    <h2 class="add_tab_heading">Your Wishlist</h2>
                                    @forelse($wishlist_products as $row)
                                    <div class="single_cart">
                                        <div class="cart_thumb">
                                            <img src="{{asset( $row->p_f_img )}}" alt="">
                                        </div>
                                        <div class="cart_des">
                                            <h3>{{ $row->p_name }}</h3>
                                        </div>
                                        <div class="cart_balance">
                                            <span style="margin-right:20px">$566</span>
                                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                                            <a href="{{ url('delete/wishlist/'.$row->id) }}"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                    @empty 
                                        <h2 class="mb-5">No Items In Wishlist</h2>
                                    @endforelse
                                    <a class="btn btn-theme" href="{{ url('/wishlist') }}">See All</a>
                                </div>
                            </div>
                            <!-- Account Div -->

                            <!-- <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="pills-contact-tab" aria-hidden="true">
                                My Account
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Admin section End -->
            </div>
        </div>
    </nav>
    <!-- =====================================================
                 ******* Menu Part End *******
    ========================================================-->

    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

    <script type="text/javascript">
        function deleteCartProduct(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger swal',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>

