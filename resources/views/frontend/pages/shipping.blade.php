@include('frontend.elements.header')
    <div class="payment____order__info">
        <div class="container">
            <div class="row">
                <div class="order-summary col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card">
                        @forelse($addreses as $key=>$address)
                        <div class="row address_inner_text">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="text_p">
                                    <h3>Address {{ $key + 1  }}</span></h3>
                                    <p>34/8,{{ $address->street_name }},{{ $address->district }} {{ $address->country }}
                                        <span>Phone:+{{ $address->phone }}</span>
                                        <span>Email:{{ $address->email }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty 
                        <div class="shipping-address d-flex align-items-center justify-content-center flex-column">
                            <h2>No address found.</h2>
                            <p class="ste-address-btn"><a href="{{ url('/user-address') }}">Please set your address</a></p>
                        </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-card payment-info">
                        <h3 class="mb-4">Choise your address</h3>
                        <form action="{{ route('checkout') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <select class="form-select" required name="address_id">
                                        <option value="">Select Shipping Address</option>
                                        @forelse($addreses as $key=>$address)
                                            <option value="{{ $address->id }}"
                                                >Address {{  $key + 1 }}</option>
                                        @empty 
                                            <h2>No address found. <a href="#">Please set your address</a></h2>
                                        @endforelse
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