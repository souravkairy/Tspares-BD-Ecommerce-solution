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
                    <h3>John Alisha</h3>
                </div>
                <div class="list_sector">
                    <div class="info_list">
                        <a  class="activate" href="{{ url('/profile') }}"><i class="fas fa-info-circle"></i>User Info</a>
                        <a href="{{ url('/order-details') }}"><i class="fas fa-receipt"></i>Order Details</a>
                        <a href="{{ url('/user-address') }}"><i class="fas fa-globe"></i>Address</a>
                        <a href="{{ url('/contact-message') }}"><i class="fas fa-envelope"></i>Message</a>
                        <a href="{{ url('/setting') }}"><i class="fas fa-cog"></i>Setting</a>
                    </div>
                </div>
                <div class="last_inner text-center">
                    <a href=""><i class="fas fa-sign-out-alt"></i>Log Out</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 d-none d-md-block">
            <div class="details_head">
                <div class="details_img">
                    <img height="70" src="{{ asset('frontend/assets/image/icon/user.svg')}}" alt="usr-profile">

                    <div class="img_icon">
                        <a href="#"><i class="fas fa-camera"></i></a>
                    </div>
                </div>
                <div class="details_txt">
                    <h4>John Alisha <span>Ui/Ux Designer</span></h4>
                </div>
            </div>

            <div class="details_info">
                <div class="row">
                    <div class="col-md-4">
                        <h5>First Name <span>John</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Last Name <span>Alisha</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Mobile <span>+4455789000</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>E-mail <span>demomail66@gmail.com</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Country <span>Bangladesh</span></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Town/city <span>Sylhet</span></h5>
                    </div>
                </div>

                <div class="details_button text-end">
                    <a href="{{ url('/edit-user-info') }}">Edit information</a>
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