@include('frontend.elements.header')
@php
// echo '<pre>';
// print_r($Orders);
// exit();
@endphp
<div class="order____tracking__info">
    <div class="container">
        <div class="main-div">
            @forelse ($Orders as $item)
                @php
                    $date = $item->order_date;
                    $delivery_date = date('d-m-Y', strtotime($date . ' + 5 days'));
                @endphp
                <div class="delivert-progress-destop">
                    <div class="delivert-progress-info">
                        <div class="row">
                            <div class="delivery-time-info col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <div class="d-flex">
                                    <div class="delivery-time">
                                        <div>
                                            <i class="fas fa-truck"></i>
                                        </div>
                                        <div class="delivery-info">
                                            <p>Delivery time</p>
                                            <span>Approximate {{$delivery_date }}</span>
                                        </div>
                                    </div>

                                    <div class="delivery-order-number">
                                        <p>Order Number</p>
                                        <span>{{ $item->tracking_code }}</span>
                                    </div>

                                    <div class="delivery-order-status">
                                        <p>Order Status</p>
                                        <span class="d-flex align-items-center"><i class="fas fa-circle"></i>
                                            @if ($item->status == 1)
                                                Pending
                                            @elseif($item->status == 2)
                                            {
                                                Accepted
                                            }
                                            @elseif($item->status == 3)
                                            {
                                                On Shipping
                                            }
                                            @elseif($item->status == 4)
                                            {
                                                Delivered
                                            }
                                            @endif

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="other-icon-info col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="other-icon d-flex justify-content-end">
                                    <div class="single-icon d-flex flex-column justify-content-center">
                                        <i class="far fa-file-alt text-center"></i>
                                        <span onclick="window.print(); return false">Invoice</span>
                                    </div>
                                    {{-- <div class="single-icon d-flex flex-column justify-content-center">
                                        <i class="far fa-file-alt text-center"></i>
                                        <span>Warranty</span>
                                    </div> --}}
                                    <div class="single-icon d-flex flex-column justify-content-center">
                                        <i class="far fa-file-alt text-center"></i>
                                        <span onclick="window.print(); return false">Download</span>
                                    </div>
                                    <div class="single-icon d-flex flex-column justify-content-center">
                                        <i class="far fa-file-alt text-center"></i>
                                        <span onclick="window.print(); return false">Print</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivert-progress-bar">
                        <article>
                            <div class="track">
                                @if ($item->status == 1)
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-check"></i>
                                        </span> <span class="text">Order Pending</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-user"></i> </span> <span
                                            class="text">Payment Accepted</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span
                                            class="text">Delivery Progress</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span
                                            class="text">Delivery Done</span></div>
                                @elseif($item->status == 2)
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-check"></i>
                                        </span> <span class="text">Order Pending</span> </div>
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-user"></i> </span>
                                        <span class="text">Payment Accepted</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span
                                            class="text">Delivery Progress</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span
                                            class="text">Delivery Done</span></div>
                                @elseif($item->status == 3)
                                    <div class="step active_bar "> <span class="icon"> <i class="fa fa-check"></i>
                                        </span> <span class="text">Order Pending</span> </div>
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-user"></i> </span>
                                        <span class="text">Payment Accepted</span> </div>
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-truck"></i>
                                        </span> <span class="text">Delivery Progress</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span
                                            class="text">Delivery Done</span></div>
                                @elseif($item->status == 4)
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-check"></i>
                                        </span> <span class="text">Order Pending</span> </div>
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-user"></i> </span>
                                        <span class="text">Payment Accepted</span> </div>
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-truck"></i>
                                        </span> <span class="text">Delivery Progress</span> </div>
                                    <div class="step active_bar"> <span class="icon"> <i class="fa fa-box"></i> </span>
                                        <span class="text">Delivery Done</span></div>

                                @endif
                            </div>
                        </article>
                    </div>
                </div>
            @empty
                <h6 class="text-center text-danger">No Order placed</h6>
            @endforelse


            <div class="delivert-progress-mobile">
                <div class="d-flex justify-content-between">
                    <div class="delivery-order-number">
                        <p>Order Number</p>
                        <span>012345678902</span>
                    </div>

                    <div class="delivery-order-status">
                        <p>Order Status</p>
                        <span class="d-flex align-items-center"><i class="fas fa-circle"></i> Processing</span>
                    </div>
                </div>
                <div class="delivery-time">
                    <div>
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="delivery-info">
                        <p>Delivery time</p>
                        <span>Approximate 03 Jan, 2020</span>
                    </div>
                </div>

                <div class="other-icon-info">
                    <div class="other-icon">
                        <div class="single-icon d-flex flex-column justify-content-center">
                            <i class="far fa-file-alt text-center"></i>
                            <span>Invoice</span>
                        </div>
                        <div class="single-icon d-flex flex-column justify-content-center">
                            <i class="far fa-file-alt text-center"></i>
                            <span>Warranty</span>
                        </div>
                        <div class="single-icon d-flex flex-column justify-content-center">
                            <i class="far fa-file-alt text-center"></i>
                            <span>Download</span>
                        </div>
                        <div class="single-icon d-flex flex-column justify-content-center">
                            <i class="far fa-file-alt text-center"></i>
                            <span>Print</span>
                        </div>
                    </div>
                </div>

                <div class="mobile-progress">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <strong>Payment Done</strong><span>10.00 -12.00</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <strong>Order Picked</strong><span>10.00 -12.00</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <strong>Order On the way</strong><span>10.00 -12.00</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <strong>Payment Done</strong><span>10.00 -12.00</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 0%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <strong>Payment Done</strong><span>10.00 -12.00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="order-lists">
            <h4 class="destop-view">Your Order</h4>
            <div class="row">
                <div class="all-products col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="all-products-div">
                        <h4 class="mobile-view">Your Order</h4>
                        <div class="single-order-list row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 d-flex">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png') }}"
                                        alt="product-img">
                                </div>
                                <div class="product-name d-flex flex-column">
                                    <h4>New Aluminum Magnesium askings Sunglasses Aluminum collection 2k20</h4>
                                    <div class="dasktop">
                                        <p><b>Size:</b> <span>Medium</span></p>
                                        <p><b>Color:</b> <span>Gray</span></p>
                                    </div>
                                    <div class="mobile">
                                        <p class="d-flex justify-content-between"><span>Quantity:</span> <b>02</b></p>
                                        <p class="d-flex justify-content-between"><span>Price:</span> <b>$200</b></p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="other-quantity col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex align-items-center justify-content-between">
                                <div class="price">
                                    <span>$255</span>
                                </div>
                                <div class="qty">
                                    <span>2pic</span>
                                </div>
                                <div class="total-price">
                                    $510
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="order-details">
                        <h4>Order Details</h4>
                        <div class="d-flex justify-content-between details-title">
                            <p>Order Details</p>
                            <p>#1234546</p>
                        </div>
                        <div class="order-details-product">
                            <div class="order-details-single-product d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png') }}"
                                            alt="product-img">
                                    </div>
                                    <span class="product-name">LED floodlight 10W</span>
                                </div>
                                <div class="product-price">
                                    <span>$577</span>
                                </div>
                            </div>

                            <div class="order-details-single-product d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png') }}"
                                            alt="product-img">
                                    </div>
                                    <span class="product-name">LED floodlight 10W</span>
                                </div>
                                <div class="product-price">
                                    <span>$577</span>
                                </div>
                            </div>

                            <div class="order-details-single-product d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png') }}"
                                            alt="product-img">
                                    </div>
                                    <span class="product-name">LED floodlight 10W</span>
                                </div>
                                <div class="product-price">
                                    <span>$577</span>
                                </div>
                            </div>

                            <div class="order-details-single-product d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{ asset('frontend/assets/image/Helly-Hansen-Verglas-Down-Jacket-PNG (1).png') }}"
                                            alt="product-img">
                                    </div>
                                    <span class="product-name">LED floodlight 10W</span>
                                </div>
                                <div class="product-price">
                                    <span>$577</span>
                                </div>
                            </div>
                        </div>
                        <div class="total-price-count">
                            <div class="subtotal d-flex justify-content-between">
                                <span>Subtotal</span>
                                <strong>$270</strong>
                            </div>

                            <div class="shipping d-flex justify-content-between">
                                <span>Shipping</span>
                                <strong>$20</strong>
                            </div>

                            <div class="coupon d-flex justify-content-between">
                                <span>Coupon</span>
                                <strong>$30</strong>
                            </div>
                        </div>
                        <div class="total d-flex justify-content-between">
                            <span>Total</span>
                            <strong>$1120</strong>
                        </div>
                        <div>
                            <a href="#" class="cancel-btn">
                                <span>Cancel Order</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="helps-div">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="helps-lists">
                        <h4>Do you need help ?</h4>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Can I return the item?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Can I return the item?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Can I return the item?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting.</div>
                                </div>
                            </div>
                        </div>
                        <a class="read-more" href="#">read more</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="information">
                        <div class="other-question">
                            <h4>Other question ?</h4>
                            <p><i class="far fa-envelope"></i> lamobax@gmail.com</p>
                            <p><i class="fas fa-phone-volume"></i> ++0123456789</p>
                            <div class="customer-support-btn-dasktop">
                                <p class="customer-support-btn">Customer support</p>
                            </div>
                        </div>

                        <div class="customer-care">
                            <h4>Your Customer Care</h4>
                            <div class="d-flex">
                                <div class="user-img">
                                    <img src="{{ asset('frontend/assets/image/PikPng.png') }}">
                                </div>
                                <div class="user-info">
                                    <p><b>Alex rasel</b></p>
                                    <p>+0123456789</p>
                                    <p><span>lamobax@gmail.com</span></p>
                                    <div class="chat-btn-mobile">
                                        <p class="chat-btn">Chat <i class="far fa-comment-dots"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-btn-dasktop">
                                <p class="chat-btn">Chat <i class="far fa-comment-dots"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====================================================
         ******* Naeem order tracking Part end *******
========================================================-->

@include('frontend.elements.footer')
