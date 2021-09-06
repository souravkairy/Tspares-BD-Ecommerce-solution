<!DOCTYPE html>
<html lang="en">
@php
$info = DB::table('site_settings')->first();
$category = DB::table('categories')->get();
@endphp

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
    <link href="{{ asset('frontend/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/asRange.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flip-clock.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- =========== Css link Start =========== -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>

<body>
    @php
        $total_cart_product = Cart::content()->count();
        $cart_products = Cart::content()->take(4);
        $userid = Auth::id();
        $wishlist_products = DB::table('wishlist')
            ->join('products', 'wishlist.product_id', 'products.id')
            ->select('products.*', 'wishlist.user_id')
            ->where('wishlist.user_id', $userid)
            ->limit(4)
            ->get();
    @endphp


    <!-- header part start  -->
    <section id="header_part">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="header_left text-start d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="#">
                                <span>EN </span>/
                                <span>USD</span><i class="fas fa-chevron-down"></i>
                            </a>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">
                                    <div class="hedaer_inner">
                                        <div class="button_left">
                                            <h6>Language</h6>
                                            <form action="#">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected value="en">English</option>
                                                    <option value="ar">العربية</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="button_right">
                                            <h6>USD</h6>
                                            <form action="#">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected value="USD">USD</option>
                                                    <option value="SAR">SAR</option>
                                                    <option value="AED">AED</option>
                                                    <option value="QAR">QAR</option>
                                                    <option value="KWD">KWD</option>
                                                    <option value="OMR">OMR</option>
                                                    <option value="BHD">BHD</option>
                                                    <option value="JOD">JOD</option>
                                                    <option value="GBP">GBP</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="ILS">ILS</option>
                                                    <option value="CNY">CNY</option>
                                                    <option value="BRL">BRL</option>
                                                    <option value="AUD">AUD</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="CHF">CHF</option>
                                                    <option value="HKD">HKD</option>
                                                    <option value="NZD">NZD</option>
                                                    <option value="JPY">JPY</option>
                                                    <option value="RUB">RUB</option>
                                                    <option value="CLP">CLP</option>
                                                    <option value="NOK">NOK</option>
                                                    <option value="DKK">DKK</option>
                                                    <option value="SEK">SEK</option>
                                                    <option value="MXN">MXN</option>
                                                    <option value="ARS">ARS</option>
                                                    <option value="PLN">PLN</option>
                                                    <option value="MYR">MYR</option>
                                                    <option value="THB">THB</option>
                                                    <option value="IDR">IDR</option>
                                                    <option value="INR">INR</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header_button text-center">
                                        <a class="button" href="#">Save</a>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="menu_icon text-center d-none d-md-block">
                    <a href="{{ url('/') }}"><img height="30px" width="40px"
                            src="{{ asset('frontend/assets/image/image 58.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 ">
                <div class="header_right justify-content-center ">
                    <div class="search_div">
                        <button class="search_part" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop">
                            <a class="d-none d-md-block" href="#"><i class="fas fa-search"></i></a>
                        </button>

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                            aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                            </div>
                            <div class="container">
                                <div class="col-lg-6 m-auto">
                                    <div class="offcanvas-body">
                                        <div class="button_part text-end">
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="search_box">
                                            <input class="search_text" type="text" placeholder="Serach...">
                                            <a class="search_btn" href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @guest
                        <div class="profile_div d-none d-md-block">
                            <a href="{{ url('/login-panel') }}"><i class="fas fa-user"></i></a>
                        </div>
                    @else
                        <div class="profile_div d-none d-md-block">
                            <a href="{{ url('/profile') }}"><i class="fas fa-user"></i></a>
                        </div>
                    @endguest

                    <div class="cart_div">
                        <button class="cart_icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight"><i class="fas fa-cart-plus d-none d-md-block"></i></button>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">Your Cart</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile_cart">
                                    <div class="cart_thumbbb">
                                        <img src="assets/image/image 1@3x 3.png" alt="">
                                    </div>
                                    <div class="cart_dest">
                                        <h3>New Aluminum Magnesium Sunglasses Aluminum</h3>
                                        <p>Size:<span>Medium</span></p>
                                        <p>Color:<span>Medium</span></p>
                                    </div>
                                    <div class="item_quanty mobile_quant">
                                        <button type="button" class="quantity-left-minus" data-type="minus"
                                            data-field="">
                                            <span>-</span>
                                        </button>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="2" min="1" max="100">

                                        <button type="button" class="quantity-right-plus" data-type="plus"
                                            data-field="">
                                            <span>+</span>
                                        </button>
                                    </div>
                                    <div class="cart_balanced">
                                        <span>$566</span>
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#" class="mobile_t"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- =============== Mobile version ========== -->
        <div class="container d-block d-md-none">
            <div class="row mobile_version">
                <div class="col-4">
                    <div class="mobile_part_left">
                        <div class="mobile_menu">
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
                                            <a href="#">My Account</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="mobile_side_menu text-start">
                                        @forelse($category as $cat)
                                            <ul>
                                                <li><a href="#" id="Click"><i
                                                            class="fas fa-user-secret"></i>{{ $cat->name }}</a><i
                                                        class="fas fa-chevron-right"></i>
                                                    @php
                                                        $subcat = DB::table('sub_categories')
                                                            ->join('categories', 'sub_categories.category_id', 'categories.id')
                                                            ->where('sub_categories.category_id', $cat->id)
                                                            ->get();
                                                    @endphp
                                                    <ul class="mobile_side_cate hide one">
                                                        <li><a href="#" id="Click"><i
                                                                    class="fas fa-chevron-left"></i>Aparel</a></li>

                                                        @forelse($subcat as $sub)
                                                            <li><a id="" href="#">{{ $sub->sub_cat_name }}</a>
                                                            </li>
                                                        @empty
                                                        @endforelse
                                                    </ul>
                                                </li>
                                            </ul>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="search_div">
                            <button class="search_part" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                aria-controls="offcanvasTop">
                                <a href="#"><i class="fas fa-search"></i></a>
                            </button>

                            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                aria-labelledby="offcanvasTopLabel">
                                <div class="offcanvas-header">
                                </div>
                                <div class="container">
                                    <div class="col-lg-6 m-auto">
                                        <div class="offcanvas-body">
                                            <div class="button_part text-end">
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="search_box">
                                                <input class="search_text" type="text" placeholder="Serach...">
                                                <a class="search_btn" href="#"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="menu_icon text-center">
                        <a href="{{ url('/') }}"><img height="30px" width="40px"
                                src="{{ asset('frontend/assets/image/image 58.png') }}" alt="logo"></a>
                    </div>
                </div>


                <div class="col-4">
                    <div class="mobile_part_right">
                        @guest
                            <div class="profile_div">
                                <a href="{{ url('/login-panel') }}"><i class="fas fa-user"></i></a>
                            </div>
                        @else
                            <div class="profile_div">
                                <a href="{{ url('/profile') }}"><i class="fas fa-user"></i></a>
                            </div>
                        @endguest

                        <div class="cart_div">
                            <button class="cart_icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight"><i class="fas fa-cart-plus"></i></button>

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel">Your Cart</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="mobile_cart">
                                        <div class="cart_thumbbb">
                                            <img src="assets/image/image 1@3x 3.png" alt="">
                                        </div>
                                        <div class="cart_dest">
                                            <h3>New Aluminum Magnesium Sunglasses Aluminum</h3>
                                            <p>Size:<span>Medium</span></p>
                                            <p>Color:<span>Medium</span></p>
                                        </div>
                                        <div class="item_quanty mobile_quant">
                                            <button type="button" class="quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <span>-</span>
                                            </button>
                                            <input type="text" id="quantity" name="quantity"
                                                class="form-control input-number" value="2" min="1" max="100">

                                            <button type="button" class="quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <span>+</span>
                                            </button>
                                        </div>
                                        <div class="cart_balanced">
                                            <span>$566</span>
                                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#" class="mobile_t"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>

                                    <div class="mobile_cart">
                                        <div class="cart_thumbbb">
                                            <img src="assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG.png" alt="">
                                        </div>
                                        <div class="cart_dest">
                                            <h3>New Aluminum Magnesium Sunglasses Aluminum</h3>
                                            <p>Size:<span>Medium</span></p>
                                            <p class="ms-5">Color:<span>Medium</span></p>
                                        </div>
                                        <div class="item_quanty mobile_quant">
                                            <button type="button" class="quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <span>-</span>
                                            </button>
                                            <input type="text" id="quantity" name="quantity"
                                                class="form-control input-number" value="2" min="1" max="100">

                                            <button type="button" class="quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <span>+</span>
                                            </button>
                                        </div>
                                        <div class="cart_balanced">
                                            <span>$566</span>
                                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#" class="mobile_t"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="mobile_cart">
                                        <div class="cart_thumbbb">
                                            <img src="assets/image/image 1@3x 3.png" alt="">
                                        </div>
                                        <div class="cart_dest">
                                            <h3>New Aluminum Magnesium Sunglasses Aluminum</h3>
                                            <p>Size:<span>Medium</span></p>
                                            <p class="ms-5">Color:<span>Medium</span></p>
                                        </div>
                                        <div class="item_quanty mobile_quant">
                                            <button type="button" class="quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <span>-</span>
                                            </button>
                                            <input type="text" id="quantity" name="quantity"
                                                class="form-control input-number" value="2" min="1" max="100">

                                            <button type="button" class="quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <span>+</span>
                                            </button>
                                        </div>
                                        <div class="cart_balanced">
                                            <span>$566</span>
                                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#" class="mobile_t"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class=" mobile_cart">
                                        <div class="cart_thumbbb">
                                            <img src="assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG.png" alt="">
                                        </div>
                                        <div class="cart_dest">
                                            <h3>New Aluminum Magnesium Sunglasses Aluminum</h3>
                                            <p>Size:<span>Medium</span></p>
                                            <p class="ms-5">Color:<span>Medium</span></p>
                                        </div>
                                        <div class="item_quanty mobile_quant">
                                            <button type="button" class="quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <span>-</span>
                                            </button>
                                            <input type="text" id="quantity" name="quantity"
                                                class="form-control input-number" value="2" min="1" max="100">

                                            <button type="button" class="quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <span>+</span>
                                            </button>
                                        </div>
                                        <div class="cart_balanced">
                                            <span>$566</span>
                                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                                            <a href="#" class="mobile_t"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============== Mobile version End ========== -->
    </section>
    <!-- header part End  -->

    <!-- =========== Menu Part Start ========= -->
    <div class="menu_part d-none d-md-block">
        <div class="container px-lg-0">
            <div class="row">
                <div class="main_menu ">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Women's Clothing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-shoes" type="button" role="tab" aria-controls="pills-shoes"
                                aria-selected="false">Shoes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-plus" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Women's Plus Size</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-men-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-men" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Men's Clothing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-jewelry-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Jewelry" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Jewelry&Accessories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-bag-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bag" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Bags</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-garden-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-garden" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Homes&Garden</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-kid-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-kid" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Kids Fashion</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-beauty-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-beauty" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Beauty</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pc-menu" id="pills-baby-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-baby" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Baby&Mom</button>
                        </li>
                    </ul>



                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Dress</h4>
                                                <ul>
                                                    <li>Dresses</li>
                                                    <li>Skirts</li>
                                                    <li>Denim Dress</li>
                                                    <li>Evening Dress</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Two Piece Sets</h4>
                                                <ul>
                                                    <li>Pant Suits</li>
                                                    <li>Shirt Suits</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Tops</h4>
                                                <ul>
                                                    <li>T-Shirts</li>
                                                    <li>Blouses</li>
                                                    <li>Sweatshirts&Hoodies</li>
                                                    <li>Sweaters</li>
                                                    <li>Tanks</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Bottom</h4>
                                                <ul>
                                                    <li>Jump Suits</li>
                                                    <li>Denim Pants</li>
                                                    <li>Casual Pants</li>
                                                    <li>Leggings</li>
                                                    <li>Wideleg Pant</li>
                                                    <li>Short</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Pajamas</h4>
                                                <ul>
                                                    <li>Sleep Sets</li>
                                                    <li>Sleep Dresses</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Active Wear</h4>
                                                <ul>
                                                    <li>Leggings</li>
                                                    <li>Active Tracksuits</li>
                                                    <li>Active Pants</li>
                                                    <li>Active Tanks</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Coat & Jackets</h4>
                                                <ul>
                                                    <li>Blazers</li>
                                                    <li>Casual Jacket</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Arabian Clothing</h4>
                                                <ul>
                                                    <li>Arabian Clothing</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Lingerie</h4>
                                                <ul>
                                                    <li>Secret</li>
                                                    <li>Bras/Sets</li>
                                                    <li>Carsets & Shapewear</li>
                                                    <li>Panties</li>
                                                    <li>Camisoles</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Swimsuits</h4>
                                                <ul>
                                                    <li>Swimsuits</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-shoes" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Women's Shoes</h4>
                                                <ul>
                                                    <li>Slippers</li>
                                                    <li>Sandals</li>
                                                    <li>Heels</li>
                                                    <li>Sneakers</li>
                                                    <li>Casual Shoes</li>
                                                    <li>Flats</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Men's Shoes</h4>
                                                <ul>
                                                    <li>Sneakers</li>
                                                    <li>Casual Shoes</li>
                                                    <li>Slippers</li>
                                                    <li>Sandals</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-plus" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Women's Plus Size Dresses</h4>
                                                <ul>
                                                    <li>Plus Size Dresses</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Women's Plus Size Tops</h4>
                                                <ul>
                                                    <li>Plus Size Blouses</li>
                                                    <li>Plus Size T-shirt</li>
                                                    <li>Plus Size Camisoles</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Women's Plus Size Bottoms</h4>
                                                <ul>
                                                    <li>Plus Size Jumpsuits</li>
                                                    <li>Plus Size Pants</li>
                                                    <li>Plus Size Jeans</li>
                                                    <li>Plus Size Leggings</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Women's Plus Size Bottoms</h4>
                                                <ul>
                                                    <li>Plus Size Dresses</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Women's Plus Size Tops</h4>
                                                <ul>
                                                    <li>Plus Size Blouses</li>
                                                    <li>Plus Size T-shirt</li>
                                                    <li>Plus Size Camisoles</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-men" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Men Tops</h4>
                                                <ul>
                                                    <li>T-shirt</li>
                                                    <li>Shirt</li>
                                                    <li>Polo Shirt</li>
                                                    <li>Tanks</li>
                                                    <li>Sweatshirts</li>
                                                    <li>Knitwear</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Sets</h4>
                                                <ul>
                                                    <li>Two Piece Sets</li>
                                                    <li>Blazers & Suits</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>UnderPantes&Sleepwear</h4>
                                                <ul>
                                                    <li>Men's Payjamas</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Bottoms</h4>
                                                <ul>
                                                    <li>Pants</li>
                                                    <li>Jeans</li>
                                                    <li>Shorts</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Activewear</h4>
                                                <ul>
                                                    <li>Active Sets</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Coats</h4>
                                                <ul>
                                                    <li>Jackets</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-Jewelry" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Women's Jewelry</h4>
                                                <ul>
                                                    <li>Necklaces</li>
                                                    <li>Bracelets</li>
                                                    <li>Earrings</li>
                                                    <li>Rings</li>
                                                    <li>Jewelry Sets</li>
                                                    <li>Body Chains</li>
                                                    <li>Chokers</li>
                                                    <li>Anklet</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Women's Accessories</h4>
                                                <ul>
                                                    <li>Watches</li>
                                                    <li>Eyewear</li>
                                                    <li>Belts</li>
                                                    <li>Hair Accessories</li>
                                                    <li>Socks</li>
                                                    <li>Hats</li>
                                                    <li>Scarves</li>
                                                    <li>Brooch</li>
                                                    <li>Gloves</li>
                                                    <li>Keychains</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-bag" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Women's Bags</h4>
                                                <ul>
                                                    <li>Shoulder Bags</li>
                                                    <li>Handbags</li>
                                                    <li>Backpacks</li>
                                                    <li>Crossbody Bags</li>
                                                    <li>Bag Sets</li>
                                                    <li>Purses/Wallet</li>
                                                    <li>Waist Bags</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-garden" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Home Decor</h4>
                                                <ul>
                                                    <li>Cushion Cover</li>
                                                    <li>Rugs&Carpets</li>
                                                    <li>Artificial Flower</li>
                                                    <li>Lightings&Lamp</li>
                                                    <li>Wall Stickers</li>
                                                    <li>Wall Shelves&Hangings</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Home Linens</h4>
                                                <ul>
                                                    <li>Curtains&Accessories</li>
                                                    <li>Bath Linens</li>
                                                    <li>Slipcover</li>
                                                    <li>Bedding Sets</li>
                                                    <li>Duvets&Duet Covers</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Kitchen & Dining</h4>
                                                <ul>
                                                    <li>Drinkware</li>
                                                    <li>Dining</li>
                                                    <li>Kitchen Tools</li>
                                                    <li>Kitchen Linens</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Storage & Organization</h4>
                                                <ul>
                                                    <li>Jewelry Organizers</li>
                                                    <li>Hangers&Clothing Storages</li>
                                                    <li>Storages Bags&Cases</li>
                                                    <li>Storage Baskets</li>
                                                </ul>
                                            </div>

                                            <div class="dress">
                                                <h4>Home Essentials</h4>
                                                <ul>
                                                    <li>Home Slippers</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-kid" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Toddler Girls(2-7Y)</h4>
                                                <ul>
                                                    <li>Floral</li>
                                                    <li>Lace</li>
                                                    <li>Polka Dot</li>
                                                    <li>Vacation</li>
                                                    <li>Casual</li>
                                                    <li>Dresses</li>
                                                    <li>Jumpsuits</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Toddler Boys(2-7Y)</h4>
                                                <ul>
                                                    <li>Floral</li>
                                                    <li>Lace</li>
                                                    <li>Polka Dot</li>
                                                    <li>Vacation</li>
                                                    <li>Casual</li>
                                                    <li>Dresses</li>
                                                    <li>Jumpsuits</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Teen Girls(7-12Y)</h4>
                                                <ul>
                                                    <li>Floral</li>
                                                    <li>Lace</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Teen Boys(7-12Y)</h4>
                                                <ul>
                                                    <li>Floral</li>
                                                    <li>Lace</li>
                                                    <li>Polka Dot</li>
                                                    <li>Vacation</li>
                                                    <li>Casual</li>
                                                    <li>Dresses</li>
                                                    <li>Jumpsuits</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Kids Accessories</h4>
                                                <ul>
                                                    <li>Floral</li>
                                                    <li>Lace</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-beauty" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Beauty Tools</h4>
                                                <ul>
                                                    <li>Makeup Brushes</li>
                                                    <li>Boxes & Bags</li>
                                                    <li>Nail Art & Tools</li>
                                                    <li>Eyelashes</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Makeup</h4>
                                                <ul>
                                                    <li>Lipstick</li>
                                                    <li>Eye Makeup</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-baby" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card_inner">
                                        <a href="#">
                                            <div class="dress">
                                                <h4>Maternity</h4>
                                                <ul>
                                                    <li>Family Matching Outfits</li>
                                                    <li>Lingerie</li>
                                                </ul>
                                            </div>
                                            <div class="dress">
                                                <h4>Baby FAshion (0-18Y)</h4>
                                                <ul>
                                                    <li>Rompers</li>
                                                    <li>Sets</li>
                                                    <li>Baby Dresses</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- =========== Menu Part end ========= -->



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
                    document.getElementById('delete-form-' + id).submit();
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
