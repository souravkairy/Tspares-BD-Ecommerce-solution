@include('frontend.elements.header')
<!-- =====================================================
 ******* Register Part Start *******
========================================================-->
<section id="register_part">
<div class="container">
<div class="row mt-5 mb-4">
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="register_form">
        <div class="register_head">
            <h5>Register to Lomabox</h5>
            <a href="{{url('/login-panel')}}">Sign in here <i class="fas fa-angle-right"></i> </a>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row register_inner">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" class="form-control m-0" id="first_name" placeholder="Gareth" name="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-danger p-0 mb-2 ml-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" class="form-control m-0" id="last_name" placeholder="Barry" name="last_name" value="{{ old('last_name') }}">
                        @error('last_name')
                            <span class="text-danger p-0 mb-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control m-0" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger p-0 m-0">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-0">
                        <label for="phone" class="form-label">Phone number</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">+966</span>
                            <input type="tel" class="form-control" id="phone" aria-describedby="inputGroupPrepend" placeholder="000 000 000" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger p-0 mb-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control m-0" id="password" placeholder="****" name="password">
                        @error('password')
                            <span class="text-danger p-0 mb-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="password_confirmation" class="form-label">Repeat password</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="****" name="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-check">
                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <input class="form-check-input m-0" type="checkbox" value="0" id="agreed" name="agreed" value="{{ old('agreed') }}">
                            <label class="form-check-label" for="agreed">
                                Agree about Terms & Privacy on Lomabox
                            </label>
                        </div>
                        @error('agreed')
                            <span class="text-danger p-0 mb-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="reg_button text-center">
                    <button type="submit">Create Lomabox account</button>
                </div>

                <div class="reg_last text-center">
                    <a class="last_butt" href="#"> <i style="font-size: 13px; color: #fff; background: #637381;" class="fab fa-google"></i> Register with Google</a>
                    <a class="butt_b" href="#"><i class="fab fa-twitter-square"></i></a>
                    <a class="butt_b" href="#"><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
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
 ******* Header Part End *******
========================================================-->


@include('frontend.elements.footer')