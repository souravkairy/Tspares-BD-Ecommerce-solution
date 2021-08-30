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
        <div class="row mb-3">
            @forelse($products as $product)
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="product_item">
                    <div class="item_head">
                        <h4>New</h4>
                    </div>
                    <div class="item_img">
                        <a href="{{ route('product.view',$product->id) }}"><img src="{{asset(( $product->p_f_img)) }}" alt=""></a>
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
                <h2>No Product Found</h2>
            @endforelse


        </div>




        <div class="product_button text-center">
            <a class="btn btn-theme" href="#">Load More</a>
        </div>
    </div>
</div>
</section>

<!-- =====================================================
         ******* Product Part End *******
========================================================-->

@include('frontend.elements.footer')
