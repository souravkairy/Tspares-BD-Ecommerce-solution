@include('frontend.elements.header')

<!-- =====================================================
         ******* Sign Part Start *******
========================================================-->
<section id="signin_part">
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="sign_inner">
                <div class="sign_head">
                    <h5>Sign in to Lomabox</h5>
                    <a href="{{ url('/registration') }}">Sign Up <i class="fas fa-angle-right"></i> </a>
                </div>

                <div class="sign_form">
                    <form>
                        <label for="validationCustom01" class="form-label">Username or Email</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Gareth Barry"
                            required>
                    </form>

                    <form>
                        <label for="inputPassword2" class="form-label">Password </label><span>Forgot
                            Password</span>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="****">
                    </form>

                    <div class="sign_button text-center">
                        <a href="#">Sign In</a>
                    </div>

                    <div class="sign_last text-center">
                        <a class="last_sign" href="#"> <i
                                style="font-size: 13px; color: #fff; background: #637381;"
                                class="fab fa-google"></i> Register with Google</a>
                        <a class="sign_b" href="#"><i class="fab fa-twitter-square"></i></a>
                        <a class="sign_b" href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
            <div class="register_img" style="background: url(frontend/assets/image/giorgio-trovato-b9KdwnKWhRk-unsplash.jpg) no-repeat center; background-size: cover;">

                <div class="img_slide">
                    <div class="text_img">
                        <h5>Discount 25% for <span>New Member</span></h5>
                        <p>Register now and subscribe our Newsletter
                        <span>to get and claim the 25% discount.</span></p>
                    </div>

                    <div class="text_img">
                        <h5>Discount 25% for <span>New Member</span></h5>
                        <p>Register now and subscribe our Newsletter
                        <span>to get and claim the 25% discount.</span></p>
                    </div>

                    <div class="text_img">
                        <h5>Discount 25% for <span>New Member</span></h5>
                        <p>Register now and subscribe our Newsletter
                        <span>to get and claim the 25% discount.</span></p>
                    </div>
                </div>



            </div>
        </div>


    </div>
</div>
</section>
<!-- =====================================================
         ******* Sign Part End *******
========================================================-->


@include('frontend.elements.footer')