
    <!-- =====================================================
                 ******* Footer Part Start *******
    ========================================================-->
    @php
        $info = DB::table('site_settings')->first();
        $pageLink = DB::table('pages')->limit(6)->orderBy('id', 'desc')->get();
    @endphp
    <footer id="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="foot_txt">
                        <h2>Lomabox <span>shop</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus ullamcorper facilisis
                            est.</p>
                    </div>
                    <div class="foot_social">
                        <ul>
                            <li><a href="{{$info->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$info->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$info->youtube}}"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="{{$info->linkdein}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7">
                    <div class="foot_txt">
                        <h2>Shevlad SIA</h2>
                    </div>
                    <div class="sia_num">
                        <h3>Reg. number:</h3>
                        <p>{{$info->reg_number}}</p>
                    </div>
                    <div class="sia_add">
                        <h3>Legal address:</h3>
                        <p>{{$info->address}}</p>
                    </div>
                    <div class="sia_bank">
                        <h3>Bank details:</h3>
                        <p>{{$info->bankDetails}}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-5">
                    <div class="foot_txt">
                        <h2>Information</h2>
                    </div>
                    <div class="info">
                        <ul>
                            @forelse ($pageLink as $item)
                                <li><a style="text-decoration: none; color: white" href="{{url('page/'.$item->id .'/'.$item->name)}}">{{$item->name}}</a></li>
                            @empty

                            @endforelse


                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-7">
                    <div class="foot_txt app_f_t">
                        <h2>Contact us</h2>
                    </div>
                    <div class="cont_add">
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                            <p>{{$info->email}}</p>
                        </a>

                        <a href="#">
                            <i class="fas fa-phone-alt"></i>
                            <p>{!! $info->mobile !!}</p>
                        </a>


                    </div>

                    <div class="foot_txt">
                        <h2>Download App</h2>
                    </div>
                    <div class="app_foot">
                        <ul>
                            <a href="{{$info->iosAppLink}}">
                                <li>
                                    <i class="fab fa-apple"></i>
                                    <p>Download From <span>App Store</span></p>
                                </li>
                            </a>
                            <a href="{{$info->androidAppLink}}">
                                <li>
                                    <i class="fab fa-google-play"></i>
                                    <p>Get It on <span>Google Play</span></p>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =====================================================
                 ******* Footer Part End *******
    ========================================================-->






    <!-- =========== jQuery CDN =========== -->
    <script src="{{ asset('frontend/assets/js/bootstrap/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-asRange.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/flip-clock.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    <script>
        $('.add').click(function () {
            if ($(this).prev().val() < 10) {
            $(this).prev().val(+$(this).prev().val() + 1);
            }
        });
        $('.sub').click(function () {
                if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                }
        });
    </script>
    <!-- JavaScript code for image slider -->
    <script type="text/javascript">
        let thumbnails = document.getElementsByClassName('thumbnail')
        let activeImages = document.getElementsByClassName('active')
        for (var i=0; i < thumbnails.length; i++){
            thumbnails[i].addEventListener('mouseover', function(){
                console.log(activeImages)
                if (activeImages.length > 0){
                    activeImages[0].classList.remove('active')
                }
                this.classList.add('active')
                document.getElementById('featured').src = this.src
            })
        }
        let buttonRight = document.getElementById('slideRight');
        let buttonLeft = document.getElementById('slideLeft');
        buttonLeft.addEventListener('click', function(){
            document.getElementById('slider').scrollLeft -= 180
        })
        buttonRight.addEventListener('click', function(){
            document.getElementById('slider').scrollLeft += 180
        })
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        @if(Session::has('message'))

          var type = "{{Session::get('alert-type','info')}}";

          switch(type){

            case 'info':

              toastr.info("{{ Session::get('message') }}");

              break;

            case 'success':

              toastr.success("{{ Session::get('message') }}");

              break;

            case 'warning':

              toastr.warning("{{ Session::get('message') }}");

              break;

            case 'error':

              toastr.error("{{ Session::get('message') }}");

              break;

        }

        @endif

    </script>

</body>

</html>
