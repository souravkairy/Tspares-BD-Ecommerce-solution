@include('frontend.elements.header')

<!-- =====================================================
         ******* Wishlist Part Start *******
========================================================-->
<section id="wishlist_part">
<div class="container px-lg-0">
    <div class="row wish_head">
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <div class="wish_txt">
                <h2>4 Items in your wishlist</h2>
            </div>
        </div>

        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="wish_right">
                <a href="#"><i class="far fa-trash-alt"></i>Remove</a>
            </div>
        </div>
    </div>


    <div class="wish_inner">
        <div class="row wish_cart">
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

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant" style="margin-left: 11px">
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
                    <a class="d-none d-md-block" style="margin-right: 10px;" href="#"><i class="fas fa-cart-plus" ></i></a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row wish_cart">
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
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant" style="margin-left: 11px">
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
                    <a class="d-none d-md-block" style="margin-right: 10px;" href="#"><i class="fas fa-cart-plus" ></i></a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row wish_cart">
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
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant" style="margin-left: 11px">
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
                    <a class="d-none d-md-block" style="margin-right: 10px;" href="#"><i class="fas fa-cart-plus" ></i></a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row wish_cart">
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
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant" style="margin-left: 11px">
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
                    <a class="d-none d-md-block" style="margin-right: 10px;" href="#"><i class="fas fa-cart-plus" ></i></a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="row wish_cart">
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
                        <p >Size:<span>Medium</span></p>
                        <p >Color:<span>Gray</span></p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="cart_price">
                    <h5>$566</h5>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="item_quant" style="margin-left: 11px">
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
                    <a class="d-none d-md-block" style="margin-right: 10px;" href="#"><i class="fas fa-cart-plus" ></i></a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
    
</div>
</section>

    
    <!-- =====================================================
         ******* Wishlist Part End *******
========================================================-->


<!-- =====================================================
         ******* like Product Part Start *******
========================================================-->
<div class="container px-lg-0">
<div class="row like_part">
    <div class="like_head">
        <h3>You may also like</h3>
    </div>
    
    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
        <div class="product_item">
            <div class="item_head">
                <h4>New</h4>
            </div>
            <div class="item_img">
                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
        <div class="product_item">
            <div class="item_head">
                <h4>New</h4>
            </div>
            <div class="item_img">
                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
        <div class="product_item">
            <div class="item_head">
                <h4>New</h4>
            </div>
            <div class="item_img">
                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>


    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pb-3">
        <div class="product_item">
            <div class="item_head">
                <h4>New</h4>
            </div>
            <div class="item_img">
                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
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
                <a href="#">Add to cart</a>
            </div>

        </div>
    </div>
</div>

<div class="product_button text-center mt-3">
    <a class="btn btn-theme" href="#">View All</a>
</div>
</div>

<!-- =====================================================
         ******* like Product Part End *******
========================================================-->




@include('frontend.elements.footer')