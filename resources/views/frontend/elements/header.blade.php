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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

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
@php
    $total_cart_product=Cart::content()->count();
    $cart_products=Cart::content()->take(4);
    $userid = Auth::id();
    $wishlist_products=DB::table('wishlist')->join('products','wishlist.product_id','products.id')->select('products.*','wishlist.user_id')->where('wishlist.user_id',$userid)->limit(4)->get();
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
                    <a href="{{ url('/') }}"><img height="50px" width="60px" src="{{asset('frontend/assets/image/image 58.png')}}" alt="logo"></a>
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
                                        <div class="container-fluid">
                                            <form action="{{ route('search') }}" method="post" class="d-flex search_box">
                                            @csrf
                                              <input name="search" class="form-control search_text" required="" type="search" placeholder="Search..." aria-label="Search">
                                              <button class="search_btn" type="submit">
                                                <i class="fas fa-search"></i>
                                                </button>
                                            </form>
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
                                @forelse($cart_products as $cart_product)
                                <div class="single_cart mobile_cart">
                                    <div class="cart_thumb">
                                        <img src="{{asset($cart_product->options->image)}}" alt="">
                                    </div>
                                    <div class="cart_des">
                                        <h3>{{ $cart_product->name }}</h3>
                                        <p>Size:<span style="margin-right: 10px">{{ $cart_product->options->size }}</span> Color:<span>{{ $cart_product->options->color }}</p>
                                    </div>
                                    <form method="post" action="{{ route('update.cartitem') }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="item_quant mobile_quant">
                                            <button type="button" id="sub" class="quantity-left-minus sub">
                                                -
                                            </button>
                                            <input type="number" name="p_stock" class="form-control" value="{{ $cart_product->qty }}" min="1" max="10">
                                            <button type="button" id="add" class="quantity-right-plus add">
                                                +
                                            </button>

                                            <input type="hidden" name="product_id" value="{{ $cart_product->id }}">
                                            <input type="hidden" name="productid" value="{{ $cart_product->rowId }}">

                                           <!--  <button type="submit"><i class="fas fa-cart-plus"></i></button> -->
                                           <div class="cart_balance text-start cart-update-btn">
                                                <a><button type="submit"><i class="fas fa-shopping-cart d-none d-md-block"></i></button></a>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="cart_balance d-flex" style="color: #F77866">
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

                                @if($total_cart_product)
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-theme d-md-inline-block d-md-none text-center mb-3" href="{{ route('all.cart.product') }}">See All</a>
                                    <a class="btn btn-theme d-none d-md-inline-block" href="{{ route('all.cart.product') }}">See All</a>
                                </div>
                                @endif
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
                                            <li><a href="#" id="Click"><i class="fas fa-user-secret"></i>{{ $cat->name }}</a><i
                                                    class="fas fa-chevron-right"></i>
                                                    @php
                                                      $subcat = DB::table('sub_categories')->join('categories','sub_categories.category_id','categories.id')->where('sub_categories.category_id',$cat->id)->get();
                                                    @endphp
                                                <ul class="mobile_side_cate hide one">
                                                    <li><a href="#" id="Click"><i class="fas fa-chevron-left"></i>Aparel</a></li>

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

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="menu_icon text-center">
                        <a href="{{ url('/') }}"><img height="30px" width="40px" src="{{asset('frontend/assets/image/image 58.png')}}" alt="logo"></a>
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
@php
    $category = DB::table('categories')->limit(10)->get();
@endphp
<div class = "main-wrapper d-none d-md-block">
          <nav class = "navbar">
            <div class = "navbar-collapse">
              <ul class = "navbar-nav">
                @forelse($category as $cat)
                <li style="margin-right: 10px">
                  <a href = "{{ url('/products_by_cat/'.$cat->id.'/'.$cat->name) }}" class = "menu-link mb-2">
                    {{ $cat->name }}
                  </a>
                  <div class = "sub-menu shadow-lg" style="padding-top: 20px;padding-bottom: 350px;border-top: 2px solid #EEEEEE">
                    @php
                      $subcat = DB::table('sub_categories')->join('categories','sub_categories.category_id','categories.id')->select('sub_categories.*')->where('sub_categories.category_id',$cat->id)->get();
                    @endphp
                    @forelse($subcat as $sub)
                    <div class="col-md-2 m_w">
                      <div class = "sub-menu-item">
                        <ul class="">
                          <li style="margin-right: 30px"><a href = "{{ url('/products_by_sub/'.$sub->id.'/'.$sub->sub_cat_name) }}">{{ $sub->sub_cat_name }}</a></li>
                        </ul>
                      </div>
                    </div>
                    @empty
                    @endforelse
                  </div>
                </li>
                @empty
                @endforelse


              </ul>
            </div>
          </nav>
      </div>

<!-- =========== Menu Part end ========= -->

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

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

<script>
    $('.add').click(function () {
        if ($(this).prev().val() < 10) {
        $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function () {
            if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
            }
    });
</script>

