@include('frontend.elements.header')
@php
    $id= 1;
@endphp
<!-- =====================================================
     ******* Order Part Start *******
========================================================-->
<section id="myaccount_part">
<div class="container">
<div class="row">
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
        <div class="account_head">
            <h2>My Account</h2>
        </div>
    </div>
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
        <div class="account_right text-end">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i>Go to Homepage</a>
        </div>
    </div>
</div>
<div class="row account_inner">
    <div class="col-md-3 d-none d-md-block">
        <div class="ac_inner_head">
            <div class="image_sector">
                <div class="ac_inn_img">
                    <img height="70" src="{{ asset('frontend/assets/image/icon/user.svg')}}" alt="usr-profile">

                    <div class="img_icon">
                        <a href="#"><i class="fas fa-camera"></i></a>
                    </div>
                </div>
                {{-- <h3>{{ $user->first_name }} {{ $user->last_name }}</h3> --}}
            </div>
            <div class="list_sector">
                <div class="info_list">
                    <a class="{{ request()->is('profile*') ? 'activate' : '' }}" href="{{ url('/profile') }}"><i class="fas fa-info-circle"></i>User Info</a>
                    <a class="{{ request()->is('order-details*') ? 'activate' : '' }}" href="{{ url('/order-details') }}"><i class="fas fa-receipt"></i>Order Details</a>
                    <a class="{{ request()->is('user-address*') ? 'activate' : '' }}" href="{{ url('/user-address') }}"><i class="fas fa-globe"></i>Address</a>
                    <a class="{{ request()->is('contact-message*') ? 'activate' : '' }}" href="{{ url('/contact-message') }}"><i class="fas fa-envelope"></i>Message</a>
                    <a class="{{ request()->is('setting*') ? 'activate' : '' }}" href="{{ url('/setting') }}"><i class="fas fa-cog"></i>Setting</a>
                </div>
            </div>

            <div class="last_inner text-center">
                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Log Out</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>


    <div class="col-md-9 order_part text-center d-none d-md-block">
        <form action="{{ url('store-review')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row address_modal_form">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <input type="hidden" name="product_id" value="{{$dd}}">
                        <select name="ratingstar" id="" class="form-control" >
                            <option value="5">*****</option>
                            <option value="4">****</option>
                            <option value="3">***</option>
                            <option value="2">**</option>
                            <option value="1">*</option>
                        </select>
                    </div>
                </div>
                <div class="row address_modal_form mt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <textarea name="rating" id="" cols="30" rows="5"  class="form-control" placeholder="Review ........."></textarea>
                </div>
                </div>
            </div>
            <div class="modal_last">
                <div class="modal-footer">
                    <button type="submit" class="btn w-100 f-bold" style="color: #FF1411; background: #FEF1F0;">Give Review</button>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
</section>
<!-- =====================================================
     ******* Order Part End *******
========================================================-->

@include('frontend.elements.footer')

