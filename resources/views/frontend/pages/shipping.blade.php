@include('frontend.elements.header')
    <div class="payment____order__info">
        <div class="container">
            <div class="row">
                <div class="order-summary col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card">
                        <h3 class="mb-4">Your Address</h3>
                        <div class="row address_inner_text">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="text_p">
                                    <h3>Sylhet</span></h3>
                                    <p>34/8,sheikh villa,sylhet Bangladesh
                                        <span>Phone:+55667766567</span>
                                        <span>Email:demomail44@gmail.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row address_inner_text">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="text_p">
                                    <h3>Sylhet</span></h3>
                                    <p>34/8,sheikh villa,sylhet Bangladesh
                                        <span>Phone:+55667766567</span>
                                        <span>Email:demomail44@gmail.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card payment-info">
                        <h3 class="mb-4">Choise your address</h3>
                        <form action="{{ route('checkout') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <select class="form-select">
                                        <option>Address 1</option>
                                        <option>Address 2</option>
                                        <option>Address 3</option>
                                        <option>Address 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="submit-btn" data-bs-toggle="modal" data-bs-target="#exampleModalTwo">
                                <input type="submit" value="Make Payment">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('frontend.elements.footer')