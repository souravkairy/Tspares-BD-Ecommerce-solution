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
    <div class="col-md-9 d-none d-md-block">
        <div class="info_inner_form">
            <div class="userinfo_head">
                <h3>User Info</h3>
            </div>

            <form action="{{ url('/user-info-change/'.$user->id) }}" method="post">
            @csrf
            <div class="row form_part">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="{{$user->first_name}}" name="first_name">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" value="{{$user->last_name}}" name="last_name">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <input type="number" class="form-control" placeholder="Phone" aria-label="Phone" value="{{$user->phone}}" name="phone">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <input type="e-mail" class="form-control" placeholder="email" aria-label="email" value="{{$user->email}}" name="email">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" placeholder="Post Code" aria-label="Post Code" value="{{$user->post_code}}" name="post_code">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" placeholder="Town/City" aria-label="Town/City" value="{{$user->city}}" name="city">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <input type="text" class="form-control" placeholder="Streat Name/Appartment number" aria-label="Streat Name/Appartment number" value="{{$user->street_name}}" name="street_name">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <select id="inputState" class="form-select" name="country">
                        <option value="Soudi Arab">Soudi Arab</option>
                        <option value="Dubai">Dubai</option>
                      </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <select id="inputState" class="form-select" name="district">
                        <option value="Soudi Arab">Jeddah</option>
                        <option value="Dammam">Dammam</option>
                        <option value="Al Faisaliyah">Al Faisaliyah</option>
                      </select>
                </div>

                <div class="form_button text-end">
                    <button style="background: #F77866;outline: none;border:none;" class="px-4 py-2 rounded text-white">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    
    
    <!-- Mobile Version -->
    
    <div class="col-12 d-block d-md-none">
        <div class="info_inner_form">
            <div class="userinfo_head">
                <h3><a href="{{ url('/profile') }}"><i class="fas fa-arrow-left"></i></a> <span>User Info</span></h3>
            </div>

            <div class="row form_part">
                <form action="{{ url('/user-info-change/'.$user->id) }}" method="post">
                @csrf
                <div class="col-12 col-sm-12">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="{{$user->first_name}}" name="first_name">
                </div>
                <div class="col-12 col-sm-12">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" value="{{$user->last_name}}" name="last_name">
                </div>
                <div class="col-12 col-sm-12">
                        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                        <input type="number" class="form-control" placeholder="Phone" aria-label="Phone" value="{{$user->phone}}" name="phone">
                </div>
                <div class="col-12 col-sm-12">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="e-mail" class="form-control" placeholder="email" aria-label="email" value="{{$user->email}}" name="email">
                </div>
                <div class="col-12 col-sm-12">
                        <label for="exampleFormControlInput1" class="form-label">Post Code</label>
                        <input type="text" class="form-control" placeholder="Post Code" aria-label="Post Code" value="{{$user->post_code}}" name="post_code">
                </div>
                <div class="col-12 col-sm-12">
                        <label for="exampleFormControlInput1" class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Town/City" aria-label="Town/City" value="{{$user->city}}" name="city">
                </div>
                <div class="col-12 col-sm-12 ">
                        <label for="exampleFormControlInput1" class="form-label">Street Name</label>
                        <input type="text" class="form-control" placeholder="Streat Name/Appartment number" aria-label="Streat Name/Appartment number" value="{{$user->street_name}}" name="street_name">
                </div>
                <div class="col-12 col-sm-12 ">
                    <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <select id="inputState" class="form-select" name="country">
                        <option value="Soudi Arab">Soudi Arab</option>
                        <option value="Dubai">Dubai</option>
                      </select>
                </div>
                <div class="col-12 col-sm-12 ">
                    <label for="exampleFormControlInput1" class="form-label">District</label>
                        <select id="inputState" class="form-select" name="district">
                        <option value="Soudi Arab">Jeddah</option>
                        <option value="Dammam">Dammam</option>
                        <option value="Al Faisaliyah">Al Faisaliyah</option>
                      </select>
                </div>

               

                <div class="form_button text-end">
                    <button style="background: #F77866;outline: none;border:none;" class="px-4 py-2 rounded text-white">Update</button>
                </div>
            </form>
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