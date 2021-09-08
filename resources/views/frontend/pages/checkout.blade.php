@include('frontend.elements.header')
    @php  
	    $cart_total=Cart::Subtotal();
	    $total = (float) str_replace(',', '', $cart_total);
	    if(Session::has('coupon_code')){
            $cart_coupon_total = Session::get('coupon_code')['balance'];
            $coupon_total = (float) str_replace(',', '', $cart_coupon_total);
        }
	@endphp
    <div class="payment____order__info">
        <div class="container">
            <div class="row">
                <div class="order-summary col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card">
                        <h3>Order Summary</h3>
                        @forelse($cart_products as $cart_product)
                        <div class="main-div">
                            <div class="order-product d-flex justify-content-between">
                                <div class="d-flex justify-content-between">
                                    <div class="product-img">
                                        <img src="{{$cart_product->options->image}}" alt="product-img">
                                    </div>
                                    <div class="product-name">
                                        <h4>{{ $cart_product->name }}</h4>
                                        <p>Quantity: {{ $cart_product->qty }}</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="product-price">${{ $cart_product->price }}</span>
                                    <a onclick="deleteCartProduct({{ $cart_product->id }})" class="product-delete-icon">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
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

                        <div class="sub-total mt-3 d-flex justify-content-between align-items-center">
                            <span>Sub total</span>
                            <strong>${{ $total }}</strong>
                        </div>

                        <div class="shipping-fee mt-2 d-flex justify-content-between align-items-center">
                            <div>
                                <span>Shipping Fee</span><br>
                                <div class="location">(Dhaka to Sylhet)</div>
                            </div>
                            <strong>${{ $shipping_crg->shipping_crg }}</strong>
                        </div>

                        @if(Session::has('coupon_code'))
                            <div class="sub-total mt-2 d-flex justify-content-between align-items-center">
                                <span>Total Subtotal</span>
                                <strong>${{ $total + $shipping_crg->shipping_crg }}</strong>
                            </div>
                        @endif

                        @if(Session::has('coupon_code'))
	                        <div class="sub-total mt-2 d-flex justify-content-between align-items-center">
	                            <span>Coupon</span>
	                            <strong class="text-success">-${{ Session::get('coupon_code')['discount'] }}</strong>
	                        </div>
                        @endif

                        @if(Session::has('coupon_code'))
	                        <div class="total mt-3 d-flex justify-content-between align-items-center">
	                            <span>Total</span>
	                            <strong>${{ $coupon_total + $shipping_crg->shipping_crg }}</strong>
	                        </div>
                        @else
                        	<div class="total mt-3 d-flex justify-content-between align-items-center">
	                            <span>Total</span>
	                            <strong>${{ $total + $shipping_crg->shipping_crg }}</strong>
	                        </div>
                        @endif
                    </div>
                </div>
                <!-- Payment info -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card payment-info">
                        <h3>Payment Info</h3>
                        <p class="payment">Payment Method</p>
                        <form action="{{ URL::to('/payment/process') }}" method="post">
                    		@csrf
                            <div class="payment-method d-flex">
                            	<div class="cash" id="cash" onclick="cashOnDel()">
                                    <i class="fas fa-trash-restore-alt"></i>
                                    <span>Cash on delevary</span>
                                </div>
                                <div class="cash" id="credit" onclick="cashOnCredit()">
                                    <i class="far fa-credit-card"></i>
                                    <span>Credit cart</span>
                                </div>
                            </div>
                            <input value="" type="hidden" id="payment_type" name="payment_type">
                            <input value="{{ $shipping_crg->shipping_crg }}" type="hidden" id="shipping_crg" name="shipping_crg">
                            <input value="{{ $addreses->id }}" type="hidden" name="address_id">
                            <div class="submit-btn" data-bs-toggle="modal" data-bs-target="#exampleModalTwo">
                                <input type="submit" value="Place Order">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
	function cashOnDel() {
		var cash= document.getElementById("cash");
		removeActiveColor();
		cash.classList.add("credit-cart");
	    var y = document.getElementById("payment_type").value = "Cash";
	}

	function cashOnCredit() {
		var credit= document.getElementById("credit");
		removeActiveColor();
		credit.classList.add("credit-cart");
	    var y = document.getElementById("payment_type").value = "Cradit cart";
	}

	const removeActiveColor = () => {
		var x= document.getElementById("cash");
		var y= document.getElementById("credit");
        x.classList.remove("credit-cart");
        y.classList.remove("credit-cart");
	}
</script>
@include('frontend.elements.footer')