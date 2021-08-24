@include('frontend.elements.header')
<!-- =====================================================
         ******* My Account Part Start *******
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
        <div class="col-md-3">
            <div class="ac_inner_head">
                <div class="image_sector">
                    <div class="ac_inn_img">
                        <img height="70" src="{{ asset('frontend/assets/image/icon/user.svg')}}" alt="usr-profile">

                        <div class="img_icon">
                            <a href="#"><i class="fas fa-camera"></i></a>
                        </div>
                    </div>
                    <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
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
        <div class="col-md-9 d-block d-md-block">
            <div class="details_head">
                <div class="details_img d-none d-md-block">
                    <img height="70" src="{{ asset('frontend/assets/image/icon/user.svg')}}" alt="usr-profile">

                    <div class="img_icon">
                        <a href="#"><i class="fas fa-camera"></i></a>
                    </div>
                </div>
                <div class="details_txt d-none d-md-block">
                    <h4>{{ $user->first_name }} {{ $user->last_name }}<!-- <span>Ui/Ux Designer</span> --></h4>
                </div>
            </div>

            <div class="details_info">
                <div class="row">
                    <div class="col-md-4">
                        <h5>First Name <span>{{ $user->first_name }}</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Last Name <span>{{ $user->last_name }}</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Mobile <span>+{{ $user->phone }}</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>E-mail <span>{{ $user->email }}</span></h5>
                    </div>
                    @if( $user->country != NULL)
                    <div class="col-md-4">
                        <h5>Country <span>{{ $user->country }}</span></h5>
                    </div>
                    @else
                    @endif
                    @if( $user->city != NULL)
                    <div class="col-md-4">
                        <h5>Town/city <span>{{ $user->city }}</span></h5>
                    </div>
                    @else
                    @endif
                </div>

                <div class="details_button text-end mt-4">
                    <a href="{{ url('/edit-user-info/'.$user->id) }}">Edit information</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!-- =====================================================
         ******* My Account Part End *******
========================================================-->

@include('frontend.elements.footer')