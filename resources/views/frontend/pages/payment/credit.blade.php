@include('frontend.elements.header')
    <div class="payment____order__info">
        <div class="container">
            <div class="row">
                <div class="order-summary col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card">
                        <h3>Cradit Payment</h3>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card payment-info">
                        <p class="payment">Cradit Payment</p>
                        <form action="#" method="post">
                    		@csrf
                            <div class="field-info">
                                <input type="text" name="name" placeholder="Name On Card">
                            </div>
                            <div class="field-info">
                                <input type="text" name="cart-number" placeholder="Card Number">
                            </div>
                            <div class="row multi-fields">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="field-info">
                                        <input type="text" name="cvv" placeholder="cvv">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="field-info">
                                        <input type="text" name="date" placeholder="Expire Date: dd:mm:yy">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn" data-bs-toggle="modal" data-bs-target="#exampleModalTwo">
                                <input type="submit" value="Pay Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('frontend.elements.footer')