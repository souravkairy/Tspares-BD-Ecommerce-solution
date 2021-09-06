@include('frontend.elements.header')
<section id="wishlist_part">
    <div class="container px-lg-0">
        <div class="row">
            <div class="col p-3 border-lg rounded m-3 bg-white">
                <h3 class="text-center pb-3">{{ $pageData->name }}</h3>
                <p class="text-center">{!! $pageData->description !!}</p>
            </div>
        </div>
    </div>
</section>
</div>





@include('frontend.elements.footer')
