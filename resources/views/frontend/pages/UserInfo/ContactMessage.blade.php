@include('frontend.elements.header')

<!-- =====================================================
     ******* User Info Part Start *******
========================================================-->
<section id="myaccount_part">
<div class="container">
<div class="row">
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-none d-md-block ">
        <div class="account_head">
            <h2>User Info</h2>
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
    <div class="col-md-9 d-none d-md-block">
        <div class="info_inner_form">
            <div class="userinfo_head">
                <h3>Contact Message</h3>
            </div>
            <form action="{{ url('/message-send') }}" method="post">
            	@csrf
	            <div class="row form_part">
	                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	                    <input  type="text" class="form-control p-2" placeholder="Your Name" aria-label="Name" name="name" value="{{ $user->first_name }}">
	                </div>
	                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	                    <input  type="email" class="form-control p-2" placeholder="Your Email" aria-label="Your Email" name="email" value="{{ $user->email }}">
	                </div>

	                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	                    <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message Details" required></textarea>
	                </div>
	                
	                <div class="form_button text-end text-center mt-3">
	                    <button style="background: #F77866;outline: none;border:none;" class="px-4 py-2 rounded text-white">Send Message</button>
	                </div>
	            </div>
            </form>
        </div>
    </div>
    
    
    <!-- Mobile Version -->
    
    <div class="col-12 d-block d-md-none">
        <div class="info_inner_form">
            <div class="userinfo_head">
                <h3><a href="{{ url('/profile') }}"><i class="fas fa-arrow-left"></i></a> <span>Contact</span></h3>
            </div>

            <form action="{{ url('/message-send') }}" method="post">
            	@csrf
	            <div class="row form_part">
	                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-1">
	                    <input type="text" class="form-control p-2" placeholder="Your Name" aria-label="Name" name="name" value="{{ $user->first_name }}">
	                </div>
	                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-1">
	                    <input type="email" class="form-control p-2" placeholder="Your Email" aria-label="Your Email" name="email" value="{{ $user->email }}">
	                </div>

	                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	                    <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message Details" required></textarea>
	                </div>
	                
	                <div class="form_button text-end text-center mt-3">
	                    <button style="background: #F77866;outline: none;border:none;" class="px-4 py-2 rounded text-white">Send Message</button>
	                </div>
	            </div>
            </form>
        </div>
    </div>
    
</div>
</div>
</section>
<!-- =====================================================
     ******* User Info Part Start *******
========================================================-->


@include('frontend.elements.footer')