@include('frontend.elements.header')
<!-- =====================================================
     ******* Order Part Start *******
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


    <div class="col-md-9 order_part text-center d-none d-md-block">
        <div class="row order_h">
            <div class="col-md-3">
                <h4>Order Id</h4>
            </div>
            <div class="col-md-3">
                <h4>Date</h4>
            </div>
            <div class="col-md-3">
                <h4>Price</h4>
            </div>
            <div class="col-md-3">
                <h4>Status</h4>
            </div>
        </div>
        
        <div class="row order_list_p">
            <div class="col-md-3">
                <p>#7788965</p>
            </div>
            <div class="col-md-3">
                <p>10 june 2021</p>
            </div>
            <div class="col-md-3">
                <p>$788</p>
            </div>
            <div class="col-md-3">
                <a style="color: #63D1E0; background: #E8F8FA;" href="#">Shipped</a>
            </div>

            <div class="col-md-3">
                <p>#7788965</p>
            </div>
            <div class="col-md-3">
                <p>10 june 2021</p>
            </div>
            <div class="col-md-3">
                <p>$788</p>
            </div>
            <div class="col-md-3">
                <a style="color: #62D72B; background: #E7F9DF;"  href="#">Complated</a>
            </div>

            <div class="col-md-3">
                <p>#7788965</p>
            </div>
            <div class="col-md-3">
                <p>10 june 2021</p>
            </div>
            <div class="col-md-3">
                <p>$788</p>
            </div>
            <div class="col-md-3">
                <a style="color: #62D72B; background: #E7F9DF;"  href="#">Complated</a>
            </div>

            <div class="col-md-3">
                <p>#7788965</p>
            </div>
            <div class="col-md-3">
                <p>10 june 2021</p>
            </div>
            <div class="col-md-3">
                <p>$788</p>
            </div>
            <div class="col-md-3">
                <a style="color: #F77866; background: #FEEBE8;"  href="#">Proccessing</a>
            </div>

            <div class="col-md-3">
                <p>#7788965</p>
            </div>
            <div class="col-md-3">
                <p>10 june 2021</p>
            </div>
            <div class="col-md-3">
                <p>$788</p>
            </div>
            <div class="col-md-3">
                <a style="color: #F77866; background: #FEEBE8;"  href="#">Shipped</a>
            </div>

        </div>
    </div>
    
    
    <!-- Mobile Version -->
    

    <div class="col-12 d-block d-md-none">
        <div class="order_form">
            <div class="order_head">
                <h3><a href="#"><i class="fas fa-arrow-left"></i></a> <span>Order Details</span></h3>
            </div>

            <div class="order_part">
               <div class=" row id_part ">
                   <div class="col-6 col-sm-6">
                       <h4>Order Id</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>#7788965</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Date</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>10 june 2021</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Price</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>$788</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Status</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <a style="color: #63D1E0; background: #E8F8FA;" href="#">Shipped</a>
                   </div>
                </div>
                
                
                <div class=" row id_part ">
                   <div class="col-6 col-sm-6">
                       <h4>Order Id</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>#7788965</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Date</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>10 june 2021</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Price</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>$788</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Status</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <a style="color: #62D72B; background: #E7F9DF;"  href="#">Complated</a>
                   </div>
                </div>
                
                
                <div class=" row id_part ">
                   <div class="col-6 col-sm-6">
                       <h4>Order Id</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>#7788965</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Date</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>10 june 2021</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Price</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>$788</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Status</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <a style="color: #F77866; background: #FEEBE8;"  href="#">Proccessing</a>
                   </div>
                </div>
                
                
                <div class=" row id_part ">
                   <div class="col-6 col-sm-6">
                       <h4>Order Id</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>#7788965</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Date</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>10 june 2021</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Price</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <p>$788</p>
                   </div>
                   <div class="col-6 col-sm-6">
                       <h4>Status</h4>
                   </div>
                   <div class="col-6 col-sm-6 text-end">
                       <a style="color: #F77866; background: #FEEBE8;"  href="#">Shipped</a>
                   </div>
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
     ******* Order Part End *******
========================================================-->

@include('frontend.elements.footer')