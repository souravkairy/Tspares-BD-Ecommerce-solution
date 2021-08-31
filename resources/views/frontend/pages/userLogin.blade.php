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

                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="sign_form">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control m-0" id="email" placeholder="a@gmail.com" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger p-0 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password </label><span>Forgot Password</span>
                        <input type="text" class="form-control m-0" id="password" placeholder="****" name="password" value="{{ old('password') }}">
                        @error('password')
                            <p class="text-danger p-0 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="reg_button text-center">
                        <button type="submit">Sign in</button>
                    </div>

                    <div class="sign_last text-center">
                        <a class="last_sign" href="{{ url('/auth/redirect/google') }}"> <i
                                style="font-size: 13px; color: #fff; background: #637381;"
                                class="fab fa-google"></i> Register with Google</a>
                        <a class="sign_b" href="#"><i class="fab fa-twitter-square"></i></a>
                        <a class="sign_b" href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
                </form>
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