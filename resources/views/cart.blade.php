@include('layouts.mainhead')

                        <!-- Page Title Banner Start -->
                        <h2 class="page-title">Cart</h2>
                        <!-- Page Title Banner End -->
                    </section>
                    <!-- Hero Section End -->  

                    <!-- Start Page Content -->
                    <div class="page-content">  

                        <!-- Cart Star -->
                        <section class="pt-80 pb-40">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 mb-64 mb-lg-0">
                                        <div class=" d-xl-block d-none mb-64">
                                            <table class="table cart-table">
                                                <thead>
                                                    <tr>
                                                        <th class="h6">PRODUCT</th>
                                                        <th class="h6">PRICE</th>
                                                        <th class="h6">QUANTITY</th>
                                                        <th class="h6">SUBTOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($userCart as $cartItem)
                                                <tr>
                                                    <td class="product-block">
                                                        <a href="#" class="remove-from-cart-btn"><i class="fa-light fa-xmark"></i></a>
                                                        <img src="{{ $cartItem->product->image }}" alt="{{ $cartItem->product->name }}" style="width: 100px">
                                                        <a href="{{ route('product-detail', $cartItem->product->id) }}" class="h6">{{ $cartItem->product->name }}</a>
                                                    </td>
                                                    <td>
                                                        <p class="lead color-black">${{ $cartItem->product->price }}</p>
                                                    </td>
                                                    <td>
                                                        <div class="quantity quantity-wrap">
                                                            <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                                            <input type="text" name="quantity" value="{{ $cartItem->quantity }}" maxlength="2" size="1" class="number">
                                                            <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6>${{ $cartItem->product->price * $cartItem->quantity }}</h6>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class=" d-xl-none d-block mb-32">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="cart-item-card text-center mb-32">
                                                        <a href="#" class="remove-from-cart-btn"><i class="fa-light fa-xmark"></i></a>
                                                        <div class="product-img mb-16">
                                                            <img src="assets/media/products/cart_1.png" alt="" class="mx-auto">
                                                        </div>
                                                        <a href="product-detail.html" class="h5 title mb-24">Crunch Grillhouse</a>
                                                        <div class="d-flex justify-content-between align-items-center mb-16">
                                                            <h6>Price:</h6>
                                                            <p class="lead color-black">$240.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mb-16">
                                                            <h6>Quantity:</h6>
                                                            <div class="quantity quantity-wrap">
                                                                <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                                                <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h6>Total:</h6>
                                                            <h6>$240.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="cart-item-card text-center mb-32">
                                                        <a href="#" class="remove-from-cart-btn"><i class="fa-light fa-xmark"></i></a>
                                                        <div class="product-img mb-16">
                                                            <img src="assets/media/products/cart_1.png" alt="" class="mx-auto">
                                                        </div>
                                                        <a href="product-detail.html" class="h5 title mb-24">Crunch Grillhouse</a>
                                                        <div class="d-flex justify-content-between align-items-center mb-16">
                                                            <h6>Price:</h6>
                                                            <p class="lead color-black">$240.00</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mb-16">
                                                            <h6>Quantity:</h6>
                                                            <div class="quantity quantity-wrap">
                                                                <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                                                <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h6>Total:</h6>
                                                            <h6>$240.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="shop-grid.html" class="cus-btn primary">
                                            <span class="icon-wrapper">
                                                <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            Continue Shopping
                                        </a>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="cart-summary">
                                            <h6 class="title mb-24">ORDER SUMMERY</h6>
                                            <div class="cart-summary-detail mb-24">
                                                <div class="d-flex justify-content-between align-items-center mb-24">
                                                    <p class="lead color-black">SUBTOTAL</p>
                                                    <p class="lead">$560.00</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-24">
                                                    <p class="lead color-black">STANDARD DELIVERY</p>
                                                    <p class="lead">$5.00</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-24">
                                                    <p class="lead color-black">COUPON DISCOUNT</p>
                                                    <p class="lead">-$5.00</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-48">
                                                <h5 class="color-primary">TOTAL</h5>
                                                <h5 class="color-primary">$420.00</h5>
                                            </div>
                                            <a href="checkout.html" class="cus-btn dark">
                                                <span class="icon-wrapper">
                                                    <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span>
                                                Proceed To Checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- Cart End -->
                        
                    </div>  
                    <!-- End Page Content -->
                    <!-- Newsletter Section start  -->
                    <section class="pt-80">
                        <div class="container-fluid">
                            <div class="newsletter-area text-center">
                                <h3 class="mb-48">Exclusive Flavor Alert! Subscribe and<br> <span class="h3 color-primary">Save 20%</span> on Your Next Order.</h3>
                                <form action="https://uiparadox.co.uk/public/templates/royalfare/index.html" class="newsletter-form">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="newsletter" placeholder="email@example.com">
                                    </div>
                                    <button type="submit" class="cus-btn outline">
                                        <span class="icon-wrapper">
                                            <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Newsletter Section end  -->
        
                    <!-- Footer Area Start -->
                    <footer>
                        <div class="footer-main">
                            <!-- <img src="assets/media/bg/footer-bg.png" alt="" class="footer-bg-vetor"> -->
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-xl-3 text-xl-left text-center">
                                        <a href="index.html" class="mb-xl-0 mb-32"> <img src="assets/media/logo-white.png" alt=""></a>
                                    </div>
                                    <div class="col-xl-6">
                                        <ul class="footer-nav unstyled mb-xl-0 mb-32">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="menu.html">Menu</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="blog-grid.html">Blog</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-3">
                                        <ul class="social-icons-list unstyled">
                                            <li><a href="#"><img src="assets/media/icons/Facebook.svg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/media/icons/Twitter.svg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/media/icons/Instagram.svg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/media/icons/Linkedin.svg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container-fluid">
                                <div class="bottom-row">
                                    <div class="copyright-text">
                                        <p>© 2024. All rights reserved by <a href="index.html">Royal Fare</a></p>
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

        <!-- Mini Cart Start -->
        <aside id="sidebar-cart">
            <div class="d-flex align-items-center justify-content-between mb-32">
                <h5>Your Cart</h5>
                <a href="#" class="close-button"><i class="fa-regular fa-xmark close-icon"></i></a>
            </div>
            <div class="vr-line mb-32"></div>
            <ul class="product-list">
                <li class="product-item mb-24">
                    <a href="product-detail.html">
                        <span class="item-image">
                            <img src="assets/media/products/mc_1.png" alt="Product Photo">
                        </span>
                    </a>
                    <div class="product-text">
                        <a href="product-detail.html">
                            <h6 class="mb-16 dark-gray">Crunch Grillhouse</h6>
                        </a>
                        <div class="qp_row">
                            <div class="quantity quantity-wrap">
                                <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                            </div>
                            <h5 class="dark-gray">$240</h5>
                        </div>
                    </div>
                </li>
                <li class="vr-line mb-24"></li>
                <li class="product-item mb-24">
                    <a href="product-detail.html">
                        <span class="item-image">
                            <img src="assets/media/products/mc_2.png" alt="Product Photo">
                        </span>
                    </a>
                    <div class="product-text">
                        <a href="product-detail.html">
                            <h6 class="mb-16 dark-gray">Crunch Grillhouse</h6>
                        </a>
                        <div class="qp_row">
                            <div class="quantity quantity-wrap">
                                <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                <input type="text" name="quantity" value="2" maxlength="2" size="1" class="number">
                                <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                            </div>
                            <h5 class="dark-gray">$240</h5>
                        </div>
                    </div>
                </li>
                
            </ul>
            <div class="price-total mb-24">
                <h6>Subtotal</h6>
                <h5 class="color-primary">$281.98</h5>
            </div>
            <div class="vr-line mb-24"></div>
            <div class="action-buttons">
                <a href="cart.html" class="cus-btn outline">
                    <span class="icon-wrapper">
                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    View Cart
                </a>
                <a href="checkout.html" class="cus-btn dark">
                    <span class="icon-wrapper">
                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    Checkout
                </a>
            </div>
        </aside>
        <div id="sidebar-cart-curtain"></div>
        <!-- Mini Cart End -->

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


<!-- Mirrored from uiparadox.co.uk/public/templates/royalfare/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 11:29:15 GMT -->
</html>
