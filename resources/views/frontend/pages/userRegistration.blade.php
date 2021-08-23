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
        <div class="row register_inner">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <form>
                    <label for="validationCustom01" class="form-label">Your name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Gareth Barry"
                        required>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <form>
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <form>
                    <label for="validationCustomnumber" class="form-label">Phone number</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">+1</span>
                        <input type="tel" class="form-control" id="validationCustomnumber" aria-describedby="inputGroupPrepend" placeholder="000 000 000" required>
                      </div>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <form>
                    <label for="inputPassword2" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword2"
                        placeholder="****">
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <form>
                    <label for="inputPassword2" class="form-label">Repeat password</label>
                    <input type="password" class="form-control" id="inputPassword2"
                        placeholder="****">
                </form>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Agree about Terms & Privacy on Lomabox
                </label>
            </div>

            <div class="reg_button text-center">
                <a href="#">Create Lomabox account</a>
            </div>

            <div class="reg_last text-center">
                <a class="last_butt" href="#"> <i style="font-size: 13px; color: #fff; background: #637381;" class="fab fa-google"></i> Register with Google</a>
                <a class="butt_b" href="#"><i class="fab fa-twitter-square"></i></a>
                <a class="butt_b" href="#"><i class="fab fa-facebook-square"></i></a>
            </div>
        </div>
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