@include('frontend.elements.header')
<!-- =====================================================
         ******* Product Part Start *******
========================================================-->

<section id="product_part">
<div class="container">
    <div class="row">
        <div class="product_txt">
            <h2>Products</h2>
        </div>
    </div>
    <div class="product_inner">
        <div class="row mb-4 g-2">
            @forelse($products as $product)
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-1">
                <div class="product_item">
                    <div class="item_head">
                        <h4>New</h4>
                    </div>
                    <div class="item_img">
                        <a href="{{ route('product.view',$product->id) }}"><img src="{{asset(( $product->image)) }}" alt=""></a>
                    </div>
                    <p class=""></p>
                        <h2><a href="{{ route('product.view',$product->id) }}">{{$product->p_name}}</a></h2>
                    <div class="pro_icon">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li>
                                <p>(36)</p>
                            </li>
                        </ul>
                        <div class="pro_last">
                            <div class="last_pr">
                                <h3>
                                    @if($product->p_o_price == NULL)
                                        <span>${{$product->p_price}}</span>
                                    @else
                                        <del class="text-left">${{$product->p_price}}</del><span class="mt-0" style="    float: right;
                                        margin-right: 6rem;">${{$product->p_o_price}}</span>
                                    @endif
                                </h3>
                            </div>
                            <div class="last_tag">
                                <!-- <p>-30%</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="pro_button text-center">
                        <a href="{{ route('product.view',$product->id) }}">Add to cart</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="eror_back">
                        <div class="eror_inner">
                            <a href="#"><i style="background: #F77866;" class="fas fa-times-circle"></i></a>
                            <h2>Sorry, no results found!</h2>
                            <p>Excepteur sint occaecat cupidatat non proident,</p>
                        </div>
                        <div class="pro_button text-center">
                            <a href="{{ url('/') }}">Search Again</a>
                        </div>
                    </div>
                </div>
                </div>
            @endforelse


        </div>




        <!-- <div class="product_button text-center">
            <a class="btn btn-theme" href="#">Load More</a>
        </div> -->
    </div>
</div>
</section>

<!-- =====================================================
         ******* Product Part End *******
========================================================-->

@include('frontend.elements.footer')
