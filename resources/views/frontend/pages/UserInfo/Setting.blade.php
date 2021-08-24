@include('frontend.elements.header')

<!-- =====================================================
     ******* Email Part Start *******
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
    <div class="col-md-3 col-lg-3 col-xl-3 d-none d-md-block">
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
                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Log Out</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    <div class="col-md-9 col-lg-9 col-xl-9 d-none d-md-block">
        <div class="email_setting_part">
            <!-- <div class="email_inner">
                <div class="row email_part">
                    <div class="email_head">
                        <h3>Change Your E-mail</h3>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <form>
                            <input type="email" class="form-control" placeholder="Enter email" aria-label="Enter email">
                        </form>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <form>
                            <input type="email" class="form-control" placeholder="Enter new email" aria-label="Enter new email">
                        </form>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <form>
                            <input type="email" class="form-control" placeholder="Confirm new email" aria-label="Confirm new email">
                        </form>
                    </div>

                    <div class="email_button">
                        <a href="#">Save</a>
                    </div>
                </div>
            </div> -->



            <div class="pass_inner">
                <div class="row pass_part">
                    <div class="pass_head">
                        <h3>Change Your Password</h3>
                    </div>
                    <form method="POST" action="{{ route('password.updated') }}">
                        @csrf
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }} p-2" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required placeholder="Enter old password">
                            @if ($errors->has('oldpass'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('oldpass') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} p-2" name="password" required placeholder="Enter New password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input id="password-confirm" type="password" class="form-control p-2" placeholder="Confirm New Password" aria-label="Confirm New Password" name="password_confirmation" required>
                        </div>

                        <div class="pass_button mt-3 mb-5">
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Version Start -->
    
    <div class="col-12 col-sm-12 d-block d-md-none">
        <div class="emailsetting_head d-block d-md-none">
                <h3><a href="{{ url('/profile') }}"><i class="fas fa-arrow-left"></i></a> <span>Setting</span></h3>
            </div>
        <div class="email_setting_part">
            <!-- <div class="email_inner">
                <div class="row email_part">
                    <div class="email_head">
                        <h3>Change Your E-mail</h3>
                    </div>

                    <div class="col-12 col-sm-12">
                        <form>
                            <label for="exampleFormControlInput1" class="form-label">Enter email</label>
                            <input type="email" class="form-control" aria-label="Enter email">
                        </form>
                    </div>
                    <div class="col-12 col-sm-12">
                        <form>
                            <label for="exampleFormControlInput1" class="form-label">Enter new email</label>
                            <input type="email" class="form-control" aria-label="Enter new email">
                        </form>
                    </div>
                    <div class="col-12 col-sm-12">
                        <form>
                            <label for="exampleFormControlInput1" class="form-label">Confirm new email</label>
                            <input type="email" class="form-control" aria-label="Confirm new email">
                        </form>
                    </div>

                    <div class="email_button">
                        <a href="#">Save</a>
                    </div>
                </div>
            </div> -->



            <div class="pass_inner">
                <div class="row pass_part">
                    <div class="pass_head">
                        <h3>Change Your Password</h3>
                    </div>
                    <form method="POST" action="{{ route('password.updated') }}">
                        @csrf
                    <div class="col-12 col-sm-12 mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Enter password</label>
                        <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required placeholder="Enter old password">
                        @if ($errors->has('oldpass'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('oldpass') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-12 col-sm-12 mb-4">
                         <label for="exampleFormControlInput1" class="form-label">Enter New Password</label>
                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter New password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-12 col-sm-12 mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Confirm New Password</label>
                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm New Password" aria-label="Confirm New Password" name="password_confirmation" required>
                    </div>

                    <div class="pass_button">
                        <button type="submit">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Version End -->
    
    
</div>
</div>
</section>
<!-- =====================================================
     ******* Email Part Start *******
========================================================-->


@include('frontend.elements.footer')