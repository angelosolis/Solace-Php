@include('layouts.mainhead')
                        <!-- Page Title Banner Start -->
                        <h2 class="page-title">Login</h2>
                        <!-- Page Title Banner End -->
                    </section>
                    <!-- Hero Section End -->  

                    <!-- Start Page Content -->
                    <div class="page-content">  

                        <!-- Login Star -->
                        <section class="py-140">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xxl-4 col-lg-6 col-md-8 col-sm-10 offset-xxl-4 offset-lg-3 offset-md-2 offset-sm-1">
                                        <h5 class="mb-16 text-center">Welcome Back!</h5>
                                        <p class="mb-32 text-center">Kindly input your details blow to stay connected. </p>
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <div class="form-group mb-32">
                                                <label>Email</label>
                                                <input type="email" name="email" autocomplete="off" placeholder="email@example.com" required>
                                            </div>
                                        
                                            <div class="form-group mb-32">
                                                <label>Password</label>
                                                <input type="password" name="password" autocomplete="off" placeholder="********" required>
                                            </div>

                                            <button type="submit" class="cus-btn dark w-100 mb-32">
                                                <span class="icon-wrapper">
                                                    <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span>
                                                Login
                                            </button>
                                        </form>
                                        <div class="text-end">
                                            <p class="fw-500 color-black">Don’t have an account? <a href="/register" class="color-primary text-decoration-underline"> Signup</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- Login End -->
                        
                    </div>  
                    <!-- End Page Content -->
                    
        
                    <!-- Footer Area Start -->
                    <footer>
                        
                        <div class="footer-bottom">
                            <div class="container-fluid">
                                <div class="bottom-row">
                                    <div class="copyright-text">
                                        <p>© 2024. All rights reserved by <a href="/">Solace</a></p>
                                    </div>
                                    <div class="right-block">
                                        <a href="#">Privacy Policy</a>
                                        <a href="#">Terms and Condition</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer Area end -->
                </main>
            </div>
        </div>
        <!-- End scroll container -->

        <!-- Search Popup Start -->
        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content text-center">
                <form role="search" method="get" class="search-popup__form" action="https://uiparadox.co.uk/public/templates/royalfare/shop-list-1.html">
                    <div class="blur-layer">
                        <input type="text" id="search" autocomplete="off" placeholder="Search Here...">
                    </div>
                    <button type="submit"><i class="fal fa-search"></i></button>
                </form>
            </div>
        </div>
        <!-- Search Popup End -->


        <!-- Jquery Js -->
        <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/gsap.min.js"></script>
        <script src="assets/js/vendor/scrollTrigger.min.js"></script>
        <script src="assets/js/vendor/ScrollToPlugin.min.js"></script>
        <script src="assets/js/vendor/ScrollSmoother.min.js"></script>
        <script src="assets/js/vendor/jquery-appear.js"></script>
        <script src="assets/js/vendor/jquery-validator.js"></script>
        <script src="assets/js/vendor/ion.rangeSlider.js"></script>
        <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from uiparadox.co.uk/public/templates/royalfare/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 11:29:15 GMT -->
</html>
