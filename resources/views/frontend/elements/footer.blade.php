
    <!-- =====================================================
                 ******* Footer Part Start *******
    ========================================================-->
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
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7">
                    <div class="foot_txt">
                        <h2>Shevlad SIA</h2>
                    </div>
                    <div class="sia_num">
                        <h3>Reg. number:</h3>
                        <p>40003842925</p>
                    </div>
                    <div class="sia_add">
                        <h3>Legal address:</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus ullamcorper facilisis
                            est.</p>
                    </div>
                    <div class="sia_bank">
                        <h3>Bank details:</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum porta nunc, vitae congue
                            lorem</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-5">
                    <div class="foot_txt">
                        <h2>Information</h2>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Order processing</li>
                            <li>Delivery</li>
                            <li>Payment</li>
                            <li>Returns</li>
                            <li>About us</li>
                            <li>Partner programme</li>
                            <li>Promo codes</li>
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
                            <p>demomail@gmail.com</p>
                        </a>

                        <a href="#">
                            <i class="fas fa-phone-alt"></i>
                            <p>+343567788999</p>
                        </a>


                    </div>

                    <div class="foot_txt">
                        <h2>Download App</h2>
                    </div>
                    <div class="app_foot">
                        <ul>
                            <li>
                                <i class="fab fa-apple"></i>
                                <p>Download From <span>App Store</span></p>
                            </li>

                            <li>
                                <i class="fab fa-google-play"></i>
                                <p>Get It on <span>Google Play</span></p>
                            </li>
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

</body>

</html>