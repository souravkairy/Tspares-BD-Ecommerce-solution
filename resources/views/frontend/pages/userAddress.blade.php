@include('frontend.elements.header')

<!-- =====================================================
             ******* Address Part Start *******
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
                            <img src="{{ asset('frontend/assets/image/amazed-beautiful-blonde-young-female-model-with-blue-eyes-looks-bewilderment-being-stunned-see-something-unexpected-wears-round-glasses-fashionable-denim-clothing.png')}}" alt="">

                            <div class="img_icon">
                                <a href="#"><i class="fas fa-camera"></i></a>
                            </div>
                        </div>
                        <h3>John Alisha</h3>
                    </div>
                    <div class="list_sector">
                        <div class="info_list">
                            <a href="{{ url('/profile') }}"><i class="fas fa-info-circle"></i>User Info</a>
		                    <a href="{{ url('/order-details') }}"><i class="fas fa-info-circle"></i>Order Details</a>
		                    <a href="{{ url('/user-address') }}"><i class="fas fa-info-circle"></i>Address</a>
		                    <a href="{{ url('/contact-message') }}"><i class="fas fa-info-circle"></i>Message</a>
		                    <a href="{{ url('/setting') }}"><i class="fas fa-info-circle"></i>Setting</a>
                        </div>
                    </div>

                    <div class="last_inner text-center">
                        <a href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 Address_inner">
                <div class="address_head d-none d-md-block">
                    <h3>Address book</h3>
                </div>
                
                <!-- Mobile Version Start -->
                <div class="address_head d-block d-md-none">
                        <h3><a href="#"><i class="fas fa-arrow-left"></i></a> <span>Address book</span></h3>
                    </div>
                <!-- Mobile Version Start -->
                
                <div class="row address_inner_text">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="text_p">
                            <h3>Sylhet <span><a href="#"><i class="fas fa-ellipsis-v"></i></a></span></h3>
                            <p>34/8,sheikh villa,sylhet Bangladesh
                                <span>Phone:+55667766567</span>
                                <span>Email:demomail44@gmail.com</span>
                            </p>
                        </div>
                    </div>
                </div>


<!-- Button trigger modal -->
<button type="button" class="add_button mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
Add New Address
</button>

<!-- Modal -->
<div class="add_model_div" >
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add New Address</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row address_modal_form">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">First Name</label>
                <input type="text" class="form-control" placeholder="First Name"  aria-label="First name">
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name"  aria-label="Last name">
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Country</label>
                <select id="inputState"   class="form-select">
                    <option selected>Country</option>
                    <option>...</option>
                  </select>
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-2 mr-2">
              <form>
                  <label for="exampleFormControlInput1" class="form-label d-block d-md-none">District</label>
            <select id="inputState" class="form-select">
                <option selected>District</option>
                <option>...</option>
              </select>
                  </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Post Code</label>
                <input type="text" class="form-control" placeholder="Post Code"  aria-label="Post Code">
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Town/City</label>
                <select id="inputState" class="form-select">
                    <option selected>Town/City</option>
                    <option>...</option>
                  </select>
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Streat Name/Appartment number</label>
                <input type="text" class="form-control" placeholder="Streat Name/Appartment number"  aria-label="Streat Name/Appartment number">
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <form>
                  <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Phone</label>
                <input type="number" class="form-control" placeholder="Phone" aria-label="Phone">
              </form>  
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <form>
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">email</label>
                <input type="e-mail" class="form-control" placeholder="email" aria-label="email">
            </form>
          </div>
      </div>
    </div>
    <div class="modal_last">
        <div class="modal-footer">
            <button type="button" class="modal_first_button" data-bs-dismiss="modal">Close</button>
            <button type="button" class="modal_last_button">Save</button>
          </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal End -->
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
             ******* User Info Part Start *******
========================================================-->

@include('frontend.elements.footer')