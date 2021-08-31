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


    <div class="col-md-9 order_part text-center d-none d-md-block">
        <div class="row order_h">
            <div class="col-md-3">
                <h4>Order Id</h4>
            </div>
            <div class="col-md-3">
                <h4>Date</h4>
            </div>
            <div class="col-md-2">
                <h4>Price</h4>
            </div>
            <div class="col-md-4">
                <h4>Status</h4>
            </div>
        </div>
        @forelse ($Orders as $item)

        <div class="row order_list_p">
            <div class="col-md-3">
                <p>#{{$item->tracking_code}}</p>
            </div>
            <div class="col-md-3">
                <p>{{$item->order_date}}</p>
            </div>
            <div class="col-md-2">
                <p>{{$item->total}}</p>
            </div>
                @if ($item->status == 1)
                <div class="col-md-4">
                <button type="button" class="btn" style="color: #63D1E0; background: #E8F8FA;">Pending</button>
                </div>
                @elseif($item->status == 2)
                <div class="col-md-4">
                <button type="button" class="btn" style="color: #63D1E0; background: #E8F8FA;">Accepted</button>
                </div>
                @elseif($item->status == 3)
                <div class="col-md-4">
                <button type="button" class="btn" style="color: #63D1E0; background: #E8F8FA;">Processing</button>
                </div>
                @elseif($item->status == 4)
                <div class="col-md-4">
                <a href="{{ url('order-product-details/'.$item->id) }}" type="button" class="btn" style="color: #FF1411; background: #FEF1F0;"> <i class="fas fa-eye"></i></a>
                <button type="button" class="btn" style="color: #63D1E0; background: #E8F8FA;">Delivered</button>
                </div>
                @elseif($item->status == 5)
                <div class="col-md-4">
                <a style="color: #63D1E0; background: #E8F8FA;" href="#">Declined</a>
                </div>
                @endif


        </div>
        @empty
            <h6>No Order Found</h6>
        @endforelse

    </div>


    <!-- Mobile Version -->


    <div class="col-12 d-block d-md-none">
        <div class="order_form">
            <div class="order_head">
                <h3><a href="{{ url('/profile') }}"><i class="fas fa-arrow-left"></i></a> <span>Order Details</span></h3>
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
          <!-- Modal -->
          <div class="add_model_div">
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="width: 50%">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Ratting</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/store-address/' . Auth::id()) }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row address_modal_form">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <select name="" id="" class="form-control">
                                            <option value="">*****</option>
                                            <option value="">****</option>
                                            <option value="">***</option>
                                            <option value="">**</option>
                                            <option value="">*</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row address_modal_form">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <textarea name="" id="" cols="30" rows="5"  class="form-control" placeholder="Review"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="modal_last">
                                <div class="modal-footer">
                                    <button type="button" class="modal_first_button"
                                        data-bs-dismiss="modal">Close</button>
                                    <button class="modal_last_button">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            </div>
        <!-- Modal End -->
</div>
</div>
</section>
<!-- =====================================================
     ******* Order Part End *******
========================================================-->

@include('frontend.elements.footer')

