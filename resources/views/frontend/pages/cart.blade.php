@include('frontend.elements.header')

<!-- =====================================================
     *** Shopcart Part Start ***
========================================================-->
@php
    $cart_total=Cart::Subtotal();
    $total = (float) str_replace(',', '', $cart_total);
    if(Session::has('coupon_code')){
        $cart_coupon_total = Session::get('coupon_code')['balance'];
        $coupon_total = (float) str_replace(',', '', $cart_coupon_total);
    }
@endphp
<section id="shopcart_part">
<div class="container">
<div class="row cart_head">
    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  d-none d-md-block d-lg-block">
        <div class="cart_txt">
            @if($total_cart_product)
                <h2>{{$total_cart_product}} Items in your Shopping Cart</h2>
            @endif
        </div>
    </div>

    <!-- <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-none d-md-block d-lg-block">
        <div class="cart_right">
            <a href="#"><i class="far fa-trash-alt"></i>Remove</a>
        </div>
    </div> -->
</div>

<div class="row cart_inner">
    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-none d-md-block d-lg-block">
        @forelse($cart_products as $cart_product)
        <div class="row single_cupon">
            <div class="col-6 col-sm-6 col-md-5 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <!-- <div class="check_box">
                        <a href="#"></a>
                    </div> -->
                    <div class="cart_thumb">
                        <img src="{{ asset($cart_product->options->image)}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">{{ $cart_product->name }}</h3>
                        <p>Size:<span>{{ $cart_product->options->size }}</span></p>
                        <p style="display: block;">Color:<span>{{ $cart_product->options->color }}</span></p>
                    </div>
                </div>
            </div>

            <div class="col-5 col-sm-5 col-md-6 col-lg-5 col-xl-5">
                <form class="d-flex justify-content-between" method="post" action="{{ route('update.cartitem') }}">
                    @csrf
                    @method('PUT')
                    <div class="item_quant">

                        <button type="button" id="sub" class="quantity-left-minus sub"  data-type="minus" data-field="">
                            -
                        </button>
                        <input type="number" id="1" name="p_stock" class="form-control input-number" value="{{ $cart_product->qty }}" min="1" max="10">
                        <button type="button" id="add" class="quantity-right-plus add" data-type="plus" data-field="">
                            +
                        </button>

                        <input type="hidden" name="product_id" value="{{ $cart_product->id }}">
                        <input type="hidden" name="productid" value="{{ $cart_product->rowId }}">
                    </div>

                    <div class="cart_price">
                        <h5>${{ $cart_product->price }}</h5>
                    </div>

                    <div class="cart_balance text-start cart-update-btn">
                        <a><button type="submit"><i class="fas fa-shopping-cart d-none d-md-block"></i></button></a>
                    </div>
                </form>
            </div>

            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                <div class="cart_balance text-start">
                    <a class="mobile_t cursor-pointer" onclick="deleteCartProduct({{ $cart_product->id }})"><i class="far fa-trash-alt d-none d-md-block"></i></a>
                    <form id="delete-form-{{ $cart_product->id }}" action="{{ route('cart.product.delete',$cart_product->rowId) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>

        </div>
        @empty
            <h2>No Items In Cart</h2>
        @endforelse

        @if(Session::has('coupon_code'))
        @else
            <div class="coupon">
                <form class="d-flex justify-content-end" action="{{ route('apply.coupon') }}" method="post">
                    @csrf
                    <input type="text" class="" name="coupon_code">
                    <button type="submit">Add Coupon</button>
                </form>
            </div>
        @endif
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
                            <h4 class="pt-2">Subtotal</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>${{ $total }}</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4>Shipping Fee</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>${{ $shipping_crg->shipping_crg }}</p>
                        </div>
                    </div>
                </div>

                @if(Session::has('coupon_code'))
                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 class="pt-2">Total Subtotal</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>${{ $total + $shipping_crg->shipping_crg }}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if(Session::has('coupon_code'))
                    <div class="row bottom_line">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="summury_inner">
                                <h4 class="pt-2">Cupon</h4>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="price_count">
                                <p style="color: #00B707;">-${{ Session::get('coupon_code')['discount'] }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if(Session::has('coupon_code'))
                    <div class="row bottom_line">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="summury_inner">
                                <h4 class="pt-2">Coupon Name : {{ Session::get('coupon_code')['discount_type'] }}</h4>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="price_count">
                                <div class="price_count">
                                    <p><a href="{{ route('coupon.remove') }}">Remove</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 style="color: #5E616A; font-size: 24px;" class="pt-2">Total</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        @if(Session::has('coupon_code'))
                            <div class="price_count">
                                <p>${{ $coupon_total + $shipping_crg->shipping_crg }}</p>
                            </div>
                            <!-- <li class="last">Total<span>{{ $cart_coupon_total }}.00Tk</span></li> -->
                        @else
                            <div class="price_count">
                                <p>${{ $total + $shipping_crg->shipping_crg }}</p>
                            </div>
                            <!-- <li class="last">Total<span>{{ $cart_total }}Tk</span></li> -->
                        @endif
                    </div>
                </div>

                <div class="cart_button text-center">
                    <a href="{{ route('shipping') }}">Checkout </a>
                </div>
            </div>
        </div>
    </div>
    </div>


<!-- ============= Mobile Version =============== -->

<div class="row cart_head">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  d-block d-md-none text-center">
        <div class="cart_txt">
            <h2>{{ $total_cart_product }} Items in your Shopping Cart</h2>
        </div>
    </div>

    <!-- <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-block d-md-none">
        <div class="cart_right">
            <a href="#"><i class="far fa-trash-alt"></i>Remove</a>
        </div>
    </div> -->
</div>

<div class="row cart_inner d-block d-md-none">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        @forelse($cart_products as $cart_product)
        <div class="row shop_cart" style="margin-left: -15px">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="cart_first">
                    <!-- <div class="check_box">
                        <a href="#"></a>
                    </div> -->
                    <div class="cart_thumb">
                        <img src="{{ asset($cart_product->options->image)}}" alt="">
                    </div>
                    <div class="cart_des mr-0">
                        <h3 class="mb-0">{{ $cart_product->name }}</h3>
                        <p>Size:<span>{{ $cart_product->options->size }}</span></p>
                        <p style="display: block;">Color:<span>{{ $cart_product->options->color }}</span></p>
                        <div class="cart_price_mbl">
                            <h5>${{ $cart_product->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <form method="post" action="{{ route('update.cartitem') }}">
                    @csrf
                    @method('PUT')

                    <div class="item_quant">

                        <button type="button" id="sub" class="quantity-left-minus sub"  data-type="minus" data-field="">
                            -
                        </button>
                        <input type="number" id="1" name="p_stock" class="form-control input-number" value="{{ $cart_product->qty }}" min="1" max="10">
                        <button type="button" id="add" class="quantity-right-plus add" data-type="plus" data-field="">
                            +
                        </button>
                        <div class="d-flex justify-content-center align-items-center" style="margin-left: 5px;">
                            <button style="background-color: #F9F9F9;" type="submit"><i class="fas fa-cart-plus" style="color: #F7787C;"></i></button>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $cart_product->id }}">
                        <input type="hidden" name="productid" value="{{ $cart_product->rowId }}">
                    </div>
                </form>
            </div>


            <!-- <div class="col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3">
                <div class="cart_price">
                    <h5>${{ $cart_product->price }}</h5>
                </div>
            </div> -->

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end">
                <div class="cart_balance text-start">
                    <a class="mobile_t cursor-pointer" onclick="deleteCartProduct({{ $cart_product->id }})"><i class="far fa-trash-alt"></i></a>
                    <form id="delete-form-{{ $cart_product->id }}" action="{{ route('cart.product.delete',$cart_product->rowId) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
        @empty
            <h2>No Items In Cart</h2>
        @endforelse
    </div>


    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="summury_part">
            <!-- @if(Session::has('coupon_code'))
            @else
                <div class="row" style="margin-top: 10px; margin-bottom: 20px;">
                    <form class="d-flex justify-content-center" action="{{ route('apply.coupon') }}" method="post">
                        @csrf
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <input type="" class="form-control" name="coupon_code">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <button type="submit" class="btn btn-danger">Add Coupon</button>
                        </div>
                    </form>
                </div>
            @endif -->
            @if(Session::has('coupon_code'))
            @else
                <div class="coupon-mbl">
                    <form class="d-flex justify-content-end" action="{{ route('apply.coupon') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="coupon_code">
                        <button type="submit" class="form-control">Add Coupon</button>
                    </form>
                </div>
            @endif

            <div class="order_head text-center">
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
                            <p>${{ $total }}</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4>Shipping Fee</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>${{ $shipping_crg->shipping_crg }}</p>
                        </div>
                    </div>
                </div>

                @if(Session::has('coupon_code'))
                <div class="row bottom_line">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4>Total Subtotal</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="price_count">
                            <p>${{ $total + $shipping_crg->shipping_crg }}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if(Session::has('coupon_code'))
                    <div class="row bottom_line">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="summury_inner">
                                <h4>Cupon</h4>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="price_count">
                                <p style="color: #00B707;">-${{ Session::get('coupon_code')['discount'] }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if(Session::has('coupon_code'))
                    <div class="row bottom_line">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="summury_inner">
                                <h4>Coupon Name : 1</h4>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="price_count">
                                <p style="color: #00B707;"><a href="{{ route('coupon.remove') }}">Remove</a></p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="summury_inner">
                            <h4 style="color: #5E616A; font-size: 20px;">Total</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        @if(Session::has('coupon_code'))
                            <div class="price_count">
                                <p>${{ $coupon_total + $shipping_crg->shipping_crg }}</p>
                            </div>
                            <!-- <li class="last">Total<span>{{ $cart_coupon_total }}.00Tk</span></li> -->
                        @else
                            <div class="price_count">
                                <p>${{ $total + $shipping_crg->shipping_crg }}</p>
                            </div>
                            <!-- <li class="last">Total<span>{{ $cart_total }}Tk</span></li> -->
                        @endif
                    </div>
                </div>

                <div class="cart_button text-center">
                    <a href="{{ route('shipping') }}">Checkout </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- =====================================================
     *** Shopcart Part Start ***
========================================================-->

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


@include('frontend.elements.footer')
