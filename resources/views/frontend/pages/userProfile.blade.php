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
            <a href="#"><i class="fas fa-home"></i>Go to Homepage</a>
        </div>
    </div>
</div>

<div class="row account_inner">
    <div class="col-md-3 d-none d-md-block">
        <div class="ac_inner_head">
            <div class="image_sector">
                <div class="ac_inn_img">
                    <img src="assets/image/amazed-beautiful-blonde-young-female-model-with-blue-eyes-looks-bewilderment-being-stunned-see-something-unexpected-wears-round-glasses-fashionable-denim-clothing.png" alt="">

                    <div class="img_icon">
                        <a href="#"><i class="fas fa-camera"></i></a>
                    </div>
                </div>
                <h3>John Alisha</h3>
            </div>
            <div class="list_sector">
                <div class="info_list">
                    <a href="#"><i class="fas fa-info-circle"></i>User Info</a>
                    <a href="#"><i class="fas fa-info-circle"></i>Order Details</a>
                    <a href="#"><i class="fas fa-info-circle"></i>Address</a>
                    <a href="#"><i class="fas fa-info-circle"></i>Message</a>
                    <a href="#"><i class="fas fa-info-circle"></i>Voucher</a>
                    <a href="#"><i class="fas fa-info-circle"></i>Wallet</a>
                    <a href="#"><i class="fas fa-info-circle"></i>Setting</a>
                </div>
            </div>

            <div class="last_inner text-center">
                <a href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a>
            </div>
        </div>
    </div>
    <div class="col-md-9 d-none d-md-block">
        <div class="info_inner_form">
            <div class="userinfo_head">
                <h3>User Info</h3>
            </div>

            <div class="row form_part">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form>
                        <input type="number" class="form-control" placeholder="Phone" aria-label="Phone">
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form>
                        <input type="e-mail" class="form-control" placeholder="email" aria-label="email">
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form>
                        <input type="#" class="form-control" placeholder="Post Code" aria-label="Post Code">
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form>
                        <input type="text" class="form-control" placeholder="Town/City" aria-label="Town/City">
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form>
                        <input type="text" class="form-control" placeholder="Streat Name/Appartment number" aria-label="Streat Name/Appartment number">
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <select id="inputState" class="form-select">
                        <option selected>Country</option>
                        <option>...</option>
                      </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <select id="inputState" class="form-select">
                        <option selected>District</option>
                        <option>...</option>
                      </select>
                </div>

                <div class="form_button text-end">
                    <a href="#">Save</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Mobile Version -->
    
    <div class="col-12 d-block d-md-none">
        <div class="info_inner_form">
            <div class="userinfo_head">
                <h3><a href="#"><i class="fas fa-arrow-left"></i></a> <span>User Info</span></h3>
            </div>

            <div class="row form_part">
                <div class="col-12 col-sm-12">
                    <form>
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" class="form-control"  aria-label="First name">
                    </form>
                </div>
                <div class="col-12 col-sm-12">
                    <form>
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" aria-label="Last name">
                    </form>
                </div>
                <div class="col-12 col-sm-12">
                    <form>
                        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                        <input type="number" class="form-control" aria-label="Phone">
                    </form>
                </div>
                <div class="col-12 col-sm-12">
                    <form>
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="e-mail" class="form-control"  aria-label="email">
                    </form>
                </div>
                <div class="col-12 col-sm-12">
                    <form>
                        <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <input type="text" class="form-control"  aria-label="#">
                    </form>
                </div>
                <div class="col-12 col-sm-12 ">
                    <form>
                        <label for="exampleFormControlInput1" class="form-label">Town/City</label>
                        <input type="text" class="form-control"  aria-label="Town/City">
                    </form>
                </div>
               

                <div class="form_button text-end">
                    <a href="#">Save</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
</section>
<!-- =====================================================
     ******* User Info Part Start *******
========================================================-->


@include('frontend.elements.footer')