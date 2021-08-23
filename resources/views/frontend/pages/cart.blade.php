@include('frontend.elements.header')

<!-- =====================================================
     ******* Shopcart Part Start *******
========================================================-->
<section id="shopcart_part">
<div class="container">
<div class="row cart_head">
    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  d-none d-md-block d-lg-block">
        <div class="cart_txt">
            <h2>7 Items in your Shopping Cart</h2>
        </div>
    </div>

    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-none d-md-block d-lg-block">
        <div class="cart_right">
            <a href="#"><i class="far fa-trash-alt"></i>Remove</a>
        </div>
    </div>
</div>

<div class="row cart_inner">
    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-none d-md-block d-lg-block">
        <div class="row single_cart">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box" style="margin-top: 33px;">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/image 1@3x 3.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance text-start">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row single_cart">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box" style="margin-top: 33px;">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/kisspng-colored-gold-watch-strap-diamond-5b68f9f88feed4.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance text-start">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row single_cart">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box" style="margin-top: 33px;">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/image 1@3x 3.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance text-start">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row single_cart">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box" style="margin-top: 33px;">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/kisspng-colored-gold-watch-strap-diamond-5b68f9f88feed4.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-none d-md-block d-lg-block">
        <div class="summury_part">
            <div class="order_head">
                <h3>Order Summary</h3>
            </div>

            <div class="price_inner">
                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 class="pt-2">Sub total</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>$2099</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4>Shipping Fee <span>(Dhaka to sylhet.)</span></h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>$28</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 class="pt-2">Cupon</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p style="color: #00B707;">-$28</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 style="color: #5E616A; font-size: 24px;" class="pt-2">Total</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>$1778</p>
                        </div>
                    </div>
                </div>

                <div class="cart_button text-center">
                    <a href="#">Checkout </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>



<!-- ============= Mobile Version =============== -->

<div class="row cart_head">
    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  d-block d-md-none">
        <div class="cart_txt">
            <h2>7 Items in your Shopping Cart</h2>
        </div>
    </div>

    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-block d-md-none">
        <div class="cart_right">
            <a href="#"><i class="far fa-trash-alt"></i>Remove</a>
        </div>
    </div>
</div>

<div class="row cart_inner d-block d-md-none">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row shop_cart" style="margin-left: -15px">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/image 1@3x 3.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            

            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row shop_cart" style="margin-left: -15px">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/kisspng-colored-gold-watch-strap-diamond-5b68f9f88feed4.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            

            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row shop_cart" style="margin-left: -15px">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/image 1@3x 3.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            

            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row shop_cart" style="margin-left: -15px">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <div class="check_box">
                        <a href="#"></a>
                    </div>
                    <div class="cart_thumb">
                        <img src="{{ asset('frontend/assets/image/kisspng-colored-gold-watch-strap-diamond-5b68f9f88feed4.png')}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">New Aluminum Magnesium Sunglasses Aluminum</h3>
                        <p>Size:<span>Medium</span></p>
                        <p style="display: block;">Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="item_quant">
                    <button type="button" class="quantity-left-minus"  data-type="minus" data-field="">
                        <span>-</span>
                    </button>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="2" min="1" max="100">
                    
                    <button type="button" class="quantity-right-plus" data-type="plus" data-field="">
                        <span>+</span>
                    </button>
                </div>
            </div>
            

            <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_balance">
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row icon_bar text-center">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_icon_part">
                    <a href="#"><i class="fas fa-home"></i>
                    <span>Home</span></a>
                </div>
            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_icon_part">
                    <a href="#"><i class="fas fa-home"></i>
                    <span>Catagory</span></a>
                </div>
            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_icon_part">
                    <a href="#"><i class="fas fa-cart-plus"></i>
                    <span>Cart</span></a>
                </div>
            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_icon_part">
                    <a href="#"><i class="far fa-user-circle"></i>
                    <span>Profile</span></a>
                </div>
            </div>
        </div>
        <div class="summury_part">
            <div class="order_head">
                <h3>Order Summary</h3>
            </div>

            <div class="price_inner">
                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 class="pt-2">Sub total</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>$2099</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4>Shipping Fee <span>(Dhaka to sylhet.)</span></h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>$28</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 class="pt-2">Cupon</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p style="color: #00B707;">-$28</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 style="color: #5E616A; font-size: 18px;" class="">Total</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>$1778</p>
                        </div>
                    </div>
                </div>

                <div class="cart_button text-center">
                    <a href="#">Checkout </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>




</div>
</section>

<!-- =====================================================
     ******* Shopcart Part Start *******
========================================================-->



@include('frontend.elements.footer')