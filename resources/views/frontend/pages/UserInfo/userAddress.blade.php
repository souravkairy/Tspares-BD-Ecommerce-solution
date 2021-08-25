@include('frontend.elements.header')

<!-- =====================================================
             ******* Address Part Start *******
========================================================-->

@php
    $address = DB::table('address')->join('users','address.user_id','users.id')->select('address.*','users.id')
             ->where('address.user_id',Auth::id())
             ->get();
    $id=1;
    @endphp


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
                        <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
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

            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 Address_inner">
                <div class="address_head d-none d-md-block">
                    <h3>Address book</h3>
                </div>

                <!-- Mobile Version Start -->
                <div class="address_head d-block d-md-none">
                        <h3><a href="{{ url('/profile') }}"><i class="fas fa-arrow-left"></i></a> <span>Address book</span></h3>
                    </div>
                <!-- Mobile Version Start -->

                <div class="row address_inner_text">
                  @forelse($address as $row)
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="text_p">
                            <h3>Address : {{$id}}  <span></span></h3>
                            <p>{{ $row->street_name }} ,{{ $row->district }} ,{{ $row->country }}
                                <span>Phone: +{{ $row->phone }}</span>
                                <span>Email: {{ $row->email }}</span>
                            </p>
                        </div>
                    </div>
                    @php
                        $id++;
                    @endphp
                  @empty
                        <h2>No Product Found</h2>
                  @endforelse
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

    <form action="{{ url('/store-address/'.Auth::id()) }}" method="post">
    @csrf
    <div class="modal-body">
      <div class="row address_modal_form">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">First Name</label>
                <input type="text" class="form-control" placeholder="First Name"  aria-label="First name" name="first_name">
                <input type="hidden" class="form-control" aria-label="First name" value="{{ Auth::id() }}" name="user_id">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name"  aria-label="Last name" name="last_name">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Country</label>
                <input type="text" class="form-control" placeholder="Country"  aria-label="Last name" name="country">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-2 mr-2">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">District</label>
                <input type="text" class="form-control" placeholder="District"  aria-label="Last name" name="district">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Post Code</label>
                <input type="text" class="form-control" placeholder="Post Code"  aria-label="Post Code" name="post_code">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Town/City</label>
                <input type="text" class="form-control" placeholder="Town/City"  aria-label="Town/City" name="city">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Streat Name/Appartment number</label>
                <input type="text" class="form-control" placeholder="Streat Name/Appartment number"  aria-label="Streat Name/Appartment number" name="street_name">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Phone</label>
                <input type="number" class="form-control" placeholder="Phone" name="phone" aria-label="Phone">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="exampleFormControlInput1" class="form-label d-block d-md-none">Email</label>
                <input type="e-mail" class="form-control" placeholder="email" name="email" aria-label="email">
          </div>
      </div>
    </div>
    <div class="modal_last">
        <div class="modal-footer">
            <button type="button" class="modal_first_button" data-bs-dismiss="modal">Close</button>
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
    </div>
</section>
<!-- =====================================================
             ******* User Info Part Start *******
========================================================-->

@include('frontend.elements.footer')
