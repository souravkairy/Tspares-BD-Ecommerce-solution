@include('frontend.elements.header')

<!-- =====================================================
     ******* Product Details Part Start *******
========================================================-->
<section id="product_details_page">
<div class="container">
<div class="row product_details_mble_version">
		<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 p-5" id="content-wrapper">
			<div style="" class="column">
   			<div class="product_image mb-3">
   				<img height="400" id=featured class="image" src="{{$product_details->p_f_img}}" alt="images">
   			</div>
   		</div>
   		<div class="">
   			<div class="product_image_logo" id="slide-wrapper">
   				<img id="slideLeft" class="arrow" src="{{ asset('frontend/assets/image/arrow-left.png')}}">
   				<div class="d-flex flex-row image_list" id="slider">
				  <div class="p-3 logo_image"><img class="image thumbnail active" src="{{$product_details->p_f_img}}" alt="images"></div>
				  <div class="p-3 logo_image"><img class="image thumbnail active" src="{{$product_details->p_img1}}"alt="images"></div>
				  <div class="p-3 logo_image"><img class="image thumbnail active" src="{{$product_details->p_img2}}"alt="images"></div>
				  <div class="p-3 logo_image"><img class="image thumbnail active" src="{{$product_details->p_f_img}}"alt="images"></div>
				</div>
   				<img id="slideRight" class="arrow" src="{{ asset('frontend/assets/image/arrow-right.png')}}">
   			</div>
			</div>
   		
		</div> 
		<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 p-5">
			<div class="product_details">
            <div class="">
                <p class="name">{{$product_details->p_name}}</p>
                <div class="d-flex flex-row mb-3">
				  <div class="px-0 text-muted">4.00</div>
				  <div class="px-3"><img style="vertical-align: unset;height: 15px" src="{{ asset('frontend/assets/image/icon/Vector.png')}}" alt="images"></div>
				  <div class="px-2" style="color: #F77866">8 Reviews</div>
				  <div class="px-2 text-muted">104 Order</div>
				</div>
				<p>
          @if($product_details->p_o_price == NULL)
              <span class="price">${{$product_details->p_price}}</span>
          @else
              <span class="price">${{$product_details->p_price}}</span>$<del class="text-muted">{{$product_details->p_o_price}}</del>
          @endif
        </p>
            </div>
            <div class="mt-4">
            <p class="color_head">Colour</p>
            <div class="d-flex flex-row">
      				  <div class="p-1"><button class="px-3 py-1 btn button_select" style=""><span class="selected">Multi</span></button></div>
      				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">Red</span></button></div>
      				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">Blue</span></button></div>
      				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">White</span></button></div>
				    </div>
            </div>
            <div class="mt-4">
                <p class="color_head">Size</p>
                <div class="d-flex flex-row">
				  <div class="p-1"><button class="px-3 py-1 btn button_select"><span class="selected">S</span></button></div>
				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">M</span></button></div>
				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">XL</span></button></div>
				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">2XL</span></button></div>
				  <div class="p-1"><button class="px-3 py-1 btn btn-outline-none color_button"><span class="text-muted">3XL</span></button></div>
				</div>
            </div>
            <div class="mt-4">
            <p class="color_head">QTY</p>
    				<div class="input-group plus-minus-input">
    				  <div class="input-group-button">
    				    <button type="button" class="button btn btn-outline-none hollow circle1" data-quantity="minus" data-field="quantity">
    				      <i class="fa fa-minus" aria-hidden="true"></i>
    				    </button>
    				  </div>
    				  <input class="input-group-field btn btn-outline-none" style="background: #F4F6F8;border:2px solid #EDEDED" type="number" name="quantity" value="0">
    				  <div class="input-group-button">
    				    <button type="button" class="button btn btn-outline-none hollow circle2" data-quantity="plus" data-field="quantity">
    				      <i class="fa fa-plus" aria-hidden="true"></i>
    				    </button>
    				  </div>
    				</div>
            </div>
            <div class="mt-4">
                <div class="d-flex flex-row">
				  <div><button class="px-5 py-2 btn buy_now_button">Buy Now</button></div>
				 <a href="{{ url('/add-to-cart') }}"><div><button class="px-5 py-2 btn add_cart_button">Add To Cart</button></div></a>
				</div>
            </div>
            <div class="mt-4">
                <div class="d-flex flex-row mb-3">
				  <div class="p-1"><img src="{{ asset('frontend/assets/image/icon/Wishlist.png')}}" alt="images"></div>
				  <a href=""><div class="p-1 selected" style="margin-right: 20px">Add To Wishlist</div></a>
				  <div class="p-1"><img src="{{ asset('frontend/assets/image/icon/share.png')}}" alt="images"></div>
				  <a href=""><div class="p-1 selected">Share</div></a>
				</div>
            </div>
        </div>
		</div> 
</div>
</div>
</section>
<!-- =====================================================
     ******* Product Details Part End *******
========================================================-->


<!-- =====================================================
     ******* Product Details Part Start *******
========================================================-->
<section id="details_desc_review" style="background: #F9F9F9">
<div class="container">
<div class="row details_card">
    <div class="col-md-12 col-sm-12 p-4 product_details">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#details">Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#description">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#review">Customer Reviews</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div id="details" class="container tab-pane active"><br>
          <div class="details_heading_card">
            <div class="details_heading">
                <p class="product_details_heading">Product Details</p>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-4">
              <div class="details_heading_font"><img class="details_heading_img" src="{{ asset('frontend/assets/image/icon/Ellipse 334.png')}}" alt="images">Material</div>
              <div class="details_heading_font">Silicone,Glass</div>
            </div>
          </div>
        </div>

        <div id="description" class="container tab-pane fade"><br>
          <div class="details_heading_card">
            <div class="details_heading">
                <p class="product_details_heading">Product Description</p>
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-1">
              <div class="details_heading_font">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like.<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              </div>
            </div>
          </div>
        </div>

        <div id="review" class="container tab-pane fade"><br>
          <div class="details_heading_card">
             <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="d-flex flex-row icon_star">
                      <div class="px-0 icon_star_title">4.5</div>
                      <div class="px-3 py-3 pro_icon_star">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="icon_star_para"><p class="">Average rating based on 2345 reviews</p></div>
                    <div class="row icons">
                      <div class="side">
                        <div>5<i class="fas fa-star"></i></div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-5"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>150</div>
                      </div>
                      <div class="side">
                        <div>4<i class="fas fa-star"></i></div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-4"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>63</div>
                      </div>
                      <div class="side">
                        <div>3<i class="fas fa-star"></i></div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-3"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>15</div>
                      </div>
                      <div class="side">
                        <div>2<i class="fas fa-star"></i></div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-2"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>6</div>
                      </div>
                      <div class="side">
                        <div>1<i class="fas fa-star"></i></div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-1"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>20</div>
                      </div>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="review_right">
                      <div class="px-0 review_right_title">Reviewer Recommendation</div>
                      <p>98%</p>
                      <div class="col-md-5 review_right_cmnt">Recommend by 6 reviewers who responded,5 would recommend this product.</div>
                    </div>
                 </div>
             </div>
          </div>

          <div class="details_heading_card">
            <div class="details_heading">
                <p class="product_details_heading">Customer Review</p>
                <hr class="hr1">
            </div>
            <div class="details_heading d-flex justify-content-between px-5 py-1" id="review_section">
              <div class="details_heading_font mb-5">
                <div class="col-md-12 col-sm-12 mb-3">
                  <div class="d-flex reviewer_img">
                    <div>
                        <img class="img-fluid rounded-circle avater" src="https://www.w3schools.com/howto/img_avatar.png" alt="usr-profile">
                    </div>
                    <div>
                        <p class="text-dark name">Barabar Lis</p>
                        <div class="pro_icon_star_review">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment_card" style="font-size: 13px">
                       <p>August 26, 2021</p>
                    </div>
                  </div>
                  <p class="text-muted reviewer_review">It is a long established fact that a reader will be distracted by the readable content It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

                  <div class="d-flex mt-4">
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="p-2 m-2 comment_card">
                        <div class="d-flex">
                            <img class="mt-1 like" src="{{ asset('frontend/assets/image/icon/like.svg')}}" alt="usr-profile">
                            <p><a class="text-dark" href="">20</a></p>
                            <img class="mt-1 comment" src="{{ asset('frontend/assets/image/icon/like.svg')}}" alt="usr-profile">
                            <p><a class="text-dark" href="">6</a></p>
                        </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 col-sm-12 mb-3">
                  <div class="d-flex reviewer_img">
                    <div>
                        <img class="img-fluid rounded-circle avater" src="https://www.w3schools.com/howto/img_avatar.png" alt="usr-profile">
                    </div>
                    <div>
                        <p class="text-dark name">Barabar Lis</p>
                        <div class="pro_icon_star_review">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment_card" style="font-size: 13px">
                       <p>August 26, 2021</p>
                    </div>
                  </div>
                  <p class="text-muted reviewer_review">It is a long established fact that a reader will be distracted by the readable content It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

                  <div class="d-flex mt-4">
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="p-2 m-2 comment_card">
                        <div class="d-flex">
                            <img class="mt-1 like" src="{{ asset('frontend/assets/image/icon/like.svg')}}" alt="usr-profile">
                            <p><a class="text-dark" href="">20</a></p>
                            <img class="mt-1 comment" src="{{ asset('frontend/assets/image/icon/like.svg')}}" alt="usr-profile">
                            <p><a class="text-dark" href="">6</a></p>
                        </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 col-sm-12 mb-3">
                  <div class="d-flex reviewer_img">
                    <div>
                        <img class="img-fluid rounded-circle avater" src="https://www.w3schools.com/howto/img_avatar.png" alt="usr-profile">
                    </div>
                    <div>
                        <p class="text-dark name">Barabar Lis</p>
                        <div class="pro_icon_star_review">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment_card" style="font-size: 13px">
                       <p>August 26, 2021</p>
                    </div>
                  </div>
                  <p class="text-muted reviewer_review">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its  long established fact that a reader will be distracted by the readable content of a page when looking at its layoutlayout. It is a long established fact that a reader will be distracted by the readable content It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                  <div class="d-flex mt-4">
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="m-2 avater1">
                        <img class="img-fluid mt-1 avater2" src="{{ asset('frontend/assets/image/icon/bakaimg.png')}}" alt="usr-profile">
                    </div>
                    <div class="p-2 m-2 comment_card">
                        <div class="d-flex">
                            <img class="mt-1 like" src="{{ asset('frontend/assets/image/icon/like.svg')}}" alt="usr-profile">
                            <p><a class="text-dark" href="">20</a></p>
                            <img class="mt-1 comment" src="{{ asset('frontend/assets/image/icon/like.svg')}}" alt="usr-profile">
                            <p><a class="text-dark" href="">6</a></p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="product_button text-center mt-5">
                    <a class="btn btn-theme" href="#">Load More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-sm-12 p-0 product_details product_details_card">
      <div id="product_part">
        <div class="container">
            <div class="row">
                <div class="product_txt">
                    <h2>You may also like</h2>
                </div>
            </div>
            <div class="product_inner">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="product_item">
                            <div class="item_head">
                                <h4>New</h4>
                            </div>
                            <div class="item_img">
                                <img src="{{ asset('frontend/assets/image/image 49 1.png')}}" alt="">
                            </div>
                            <p class="mt-3">Beurir Beauty</p>
                            <a href="{{ url('/product-details') }}">
                                <h2>New Aluminum Magnesium Sunglasses</h2>
                            </a>
                            <div class="pro_icon">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><p>(36)</p>
                                    </li>
                                </ul>
                                
    
                                <a href="#">
                                    <div class="pro_last">
                                        <div class="last_pr">
                                            <h3><del>$1080</del><span>$780</span></h3>
                                        </div>
                                        <div class="last_tag">
                                            <p>-30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="pro_button text-center">
                                <a href="{{ url('/add-to-cart') }}">Add to cart</a>
                            </div>
    
                        </div>
                    </div>

                  </div>
                <div class="product_button text-center mt-4">
                    <a class="btn btn-theme" href="#">Load More</a>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>
<!-- =====================================================
     ******* Product Details Part End *******
========================================================-->

@include('frontend.elements.footer')