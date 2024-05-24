<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="RoyalFare - Restaurant html template">

        <title>Solace</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">

        <!-- All CSS files -->
        <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/vendor/all.min.css">
        <link rel="stylesheet" href="/assets/css/vendor/ion.rangeSlider.css">
        <link rel="stylesheet" href="/assets/css/vendor/slick.css">
        <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
        <link rel="stylesheet" href="/assets/css/vendor/nice-select.css">
        <link rel="stylesheet" href="/assets/css/app.css">
        <style>
        .review-rating-container {
    display: flex;
    align-items: center;
    margin-top: 8px; 
}

.rating-slider {
    display: flex;
    cursor: pointer;
}

.slider-item {
    margin-right: 10px;
}

.fa-star {
    color: #ffd700; /* Gold color */
}

.fa-light {
    color: #ccc; /* Light gray color */
}

        </style>
    </head>

    <body id="body">
        

        <!--  Begin scroll container -->
        <div id="smooth-wrapper">
            <div id="smooth-content" class="x-hidden">
                <main>
                    <!-- Hero Section Start -->
                    <section class="inner-page-banner">
                        <!-- Header start -->
                        <header id="ui-header">
                            <div class="ui-header-inner container-fluid"> 

                                <div class="ui-header-col">
                                    <!-- header Logo  -->
                                    <div class="ui-logo"> 
                                        <a href="/">
                                            <img src="/assets/media/logo-white.png" class="ui-logo-light" alt="Logo"> <!-- logo light -->
                                            <img src="/assets/media/logo.png" class="ui-logo-dark" alt="Logo"> <!-- logo dark -->
                                        </a>
                                    </div>
                                </div>

                                <div class="ui-header-col">
                                    <!-- Begin overlay menu toggle button -->
                                    <div id="ui-ol-menu-toggle-btn-wrap">
                                        <div class="ui-ol-menu-toggle-btn-text">
                                            <span class="text-menu" data-hover="Open">Menu</span>
                                            <span class="text-close">Close</span>
                                        </div>
                                        <div class="ui-ol-menu-toggle-btn-holder">
                                            <a href="#" class="ui-ol-menu-toggle-btn"><span></span></a>
                                        </div>
                                    </div>
                                    <!-- End overlay menu toggle button -->

                                    <!-- Begin overlay menu -->
                                    <nav class="ui-overlay-menu">
                                        <div class="ui-ol-menu-holder">
                                            <div class="ui-ol-menu-inner ui-wrap">
                                                <div class="">
                                                    <div class="container-fluid">
                                                        <div class="ui-ol-menu-content">
                                                            <div class="col-xxl-3 col-xl-3 col-lg-4 d-xl-block d-none">
                                                                <div class="ui-menu-img-block">
                                                                    <img src="/assets/media/images/menu-img.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-xl-5 col-md-6 ui-menu-nav">
                                                                <!-- Begin menu list -->
                                                                <ul class="ui-ol-menu-list">

                                                                    <li class="ui-ol-submenu-wrap">
                                                                        <div class="ui-ol-submenu-trigger">
                                                                            <a href="#">Home</a>
                                                                            <div class="ui-ol-submenu-caret-wrap">
                                                                                <div class="ui-ol-submenu-caret"></div>
                                                                            </div> 
                                                                        </div> 
                                                                        <div class="ui-ol-submenu">
                                                                            <ul class="ui-ol-submenu-list">
                                                                                <li><a href="index.html">Home 1</a></li>
                                                                                <li><a href="index-2.html">Home 2</a></li>
                                                                            </ul>
                                                                        </div> 
                                                                    </li>

                                                                    <li><a href="about.html">About Us</a></li>

                                                                    <!-- Begin submenu (submenu master) -->
                                                                    <li class="ui-ol-submenu-wrap">
                                                                        <div class="ui-ol-submenu-trigger">
                                                                            <a href="#">Shop</a>
                                                                            <div class="ui-ol-submenu-caret-wrap">
                                                                                <div class="ui-ol-submenu-caret"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui-ol-submenu">
                                                                            <ul class="ui-ol-submenu-list">
                
                                                                                <!-- Begin submenu -->
                                                                                <li class="ui-ol-submenu-wrap">
                                                                                    <div class="ui-ol-submenu-trigger">
                                                                                        <a href="#" class="ui-ol-submenu-link">Product Lists</a>
                                                                                        <div class="ui-ol-submenu-caret-wrap">
                                                                                            <div class="ui-ol-submenu-caret"></div>
                                                                                        </div> 
                                                                                    </div> 
                                                                                    <div class="ui-ol-submenu">
                                                                                        <ul class="ui-ol-submenu-list">
                                                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                                            <li><a href="shop-grid-left-sidebar.html">Shop Grid (Sidebar Left)</a></li>
                                                                                            <li><a href="shop-grid-right-sidebar.html">Shop Grid (Sidebar Right)</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <li><a href="product-detail.html">Product Detail</a></li>
                                                                                <!-- Begin submenu -->
                                                                                <li class="ui-ol-submenu-wrap">
                                                                                    <div class="ui-ol-submenu-trigger">
                                                                                        <a href="#" class="ui-ol-submenu-link">Product Ordering</a>
                                                                                        <div class="ui-ol-submenu-caret-wrap">
                                                                                            <div class="ui-ol-submenu-caret"></div>
                                                                                        </div> 
                                                                                    </div> 
                                                                                    <div class="ui-ol-submenu">
                                                                                        <ul class="ui-ol-submenu-list">
                                                                                            <li><a href="cart.html">Cart</a></li>
                                                                                            <li><a href="checkout.html">Checkout</a></li>
                                                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                                                            <li><a href="order-tracking.html">Order Tracking</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- End submenu -->
                                                                                
                                                                            </ul>
                                                                        </div> 
                                                                    </li>
                                                                    <!-- End submenu (sub-master) -->

                                                                    <!-- Begin submenu (submenu master) -->
                                                                    <li class="ui-ol-submenu-wrap">
                                                                        <div class="ui-ol-submenu-trigger">
                                                                            <a href="#">Blogs</a>
                                                                            <div class="ui-ol-submenu-caret-wrap">
                                                                                <div class="ui-ol-submenu-caret"></div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="ui-ol-submenu">
                                                                            <ul class="ui-ol-submenu-list">
                                                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid (Sidebar Left)</a></li>
                                                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid (Sidebar Right)</a></li>
                                                                                <li><a href="blog-list.html">Blog List</a></li>
                                                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                                                            </ul>
                                                                        </div> 
                                                                    </li>
                                                                    <!-- End submenu (sub-master) -->

                                                                    <!-- Begin submenu (submenu master) -->
                                                                    <li class="ui-ol-submenu-wrap active">
                                                                        <div class="ui-ol-submenu-trigger">
                                                                            <a href="#">Pages</a>
                                                                            <div class="ui-ol-submenu-caret-wrap">
                                                                                <div class="ui-ol-submenu-caret"></div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="ui-ol-submenu">
                                                                            <ul class="ui-ol-submenu-list">
                                                                                <li><a href="menu.html">Menu</a></li>
                                                                                <li><a href="team.html">Team</a></li>
                                                                                <li class="active"><a href="login.html">Login</a></li>
                                                                                <li><a href="signup.html">Signup</a></li>
                                                                                <li><a href="404.html">404 Page</a></li>
                                                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                                            </ul>
                                                                        </div> 
                                                                    </li>
                                                                    <!-- End submenu (sub-master) -->
                
                                                                    <li><a href="contact-us.html">Contact</a></li>
                
                                                                </ul>
                                                                <!-- End menu list -->
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-6 d-md-block d-none">
                                                                <div class="company-info">
                                                                    <img src="/assets/media/vector/menu-vector.png" alt="" class="vector">
                                                                    <div class="mb-32">
                                                                        <h6 class="color-primary mb-8">Opening Hours</h6>
                                                                        <p class="lead dark-gray">Every Day 09:00am to 10PM:00pm</p>
                                                                    </div>
                                                                    <div class="mb-32">
                                                                        <h6 class="mb-8">Contact Us</h6>
                                                                        <p class="lead dark-gray mb-16"><span><a href="tel:123456789">+1 (555) 123-4567</a> ,</span> <span> <a href="tel:123456789">+1 (555) 987-6543</a></span></p>
                                                                        <a class="lead dark-gray mb-16" href="mailto:info@example.com">email@example.com</a>
                                                                        <p class="lead dark-gray">456 Trendy Street, Sydney, NSW 2000, USA.</p>
                                                                    </div>
                                                                    <ul class="social-icons-list unstyled">
                                                                        <li><a href="#"><img src="/assets/media/icons/Facebook.svg" alt=""></a></li>
                                                                        <li><a href="#"><img src="/assets/media/icons/Twitter.svg" alt=""></a></li>
                                                                        <li><a href="#"><img src="/assets/media/icons/Instagram.svg" alt=""></a></li>
                                                                        <li><a href="#"><img src="/assets/media/icons/Linkedin.svg" alt=""></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div> 

                                    </nav> 
                                    <!-- End overlay menu -->

                                    <!-- Being header tools -->
                                    <div class="ui-header-tools">
                                        @auth
                                        <a href="" class="ui-header-tools-item"><i class="fa-regular fa-user"></i></a>
                                        @else
                                        <a href="{{ route('login') }}" class="ui-header-tools-item"><i class="fa-regular fa-user"></i></a>
                                        @endauth
                                    </div>
                                    <!-- End header tools -->
                                </div> 

                            </div> 
                        </header>
                        <!-- Header End -->

                        <!-- Page Title Banner Start -->
                        <h2 class="page-title">Product Detail</h2>
                        <!-- Page Title Banner End -->
                    </section>
                    <!-- Hero Section End -->  

                    <!-- Start Page Content -->
                    <div class="page-content">  

                        <!-- Product Detail Section Start -->    
                        <section class="py-80">
                            <div class="container-fluid">
                                <div class="product-detail">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7">
                                            <div class="img-block" style="text-align: center">
                                                <img src="{{ $product->image }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="content">
                                                <h3 class="mb-32">{{ $product->name }}</h3>
                                                <div class="abo-pro mb-32">
                                                    <div>
                                                       <h4 class="mb-8">${{ $product->price }}</h4> 
                                                       <p class="lead color-primary">
                                                        @if ($product->stock > 0)
                                                            In Stock - {{ $product->stock }} pcs
                                                        @else
                                                            Out of Stock
                                                        @endif
                                                    </p>

                                                    </div>
                                                    <div class="rating-review">
                                                    <div class="rating">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $averageRating)
                                                                <i class="fa-solid fa-star"></i>
                                                            @else
                                                                <i class="fa-light fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <p>{{ $reviewCount }} REVIEWS</p>
                                                </div>
                                                </div>
                                                <p class="mb-32 lead">{{ $product->description }}</p>
                                                <div class="action-block mb-32">
                                                    <p class="fw-500 color-black">Quantity:</p>
                                                    <div class="quantity quantity-wrap">
                                                        <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                                        <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                                        <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                                                    </div>
                                                    <a href="javascript:;" class="cart-btn cart-button"><img src="/assets/media/icons/shopping-cart.png" alt=""></a>
                                                    <form action="" method="GET">
                                                    <button type="submit" class="cus-btn primary">
                                                        <span class="icon-wrapper">
                                                            <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </span>
                                                        Buy Now
                                                    </button>
                                                </form>

                                                </div>
                                                <ul class="unstyled product-badges">
                                                    <li><span class="fw-500 color-black">Category:</span><span>{{ $product->category->name }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Product Detail Section End -->

                        <section class="product-detail-info">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
                                    <div class="reviews mb-48">
                                    <h6 class="mb-48">REVIEWS</h6>
                                    @foreach($product->reviews as $review)
                                    <div class="review-block mb-32">
                                        <!-- Assuming you have an image field for the user's avatar, replace 'user_1.png' with the actual image URL -->
                                        <img src="/assets/media/images/user_1.png" alt="User Avatar">
                                        <div class="content">
                                            <p class="fw-500 color-black mb-8">{{ $review->full_name }}</p>
                                            <div class="rating mb-16">
                                                <!-- Display the rating stars based on the 'rating' value -->
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $review->rating)
                                                        <i class="fa-solid fa-star"></i>
                                                    @else
                                                        <i class="fa-light fa-star"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                            <p>{{ $review->comment }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                        <form action="{{ route('product.review.store', ['id' => $product->id]) }}" id="reviewForm" method="POST">
                                        @csrf
                                        <h6 class="mb-16">Add a review</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-32">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" autocomplete="off" placeholder="Your name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-32">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Your email" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-32">
                                                    <label for="review">Description</label>
                                                    <textarea name="review" id="review" autocomplete="off" rows="5" placeholder="Comment here" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mb-32">
                                                <label>Rating</label>
                                                <div class="review-rating-container">
                                                    <div class="rating-slider" id="ratingSlider">
                                                        <span class="slider-item" data-value="1"><i class="fa-light fa-star"></i></span>
                                                        <span class="slider-item" data-value="2"><i class="fa-light fa-star"></i></span>
                                                        <span class="slider-item" data-value="3"><i class="fa-light fa-star"></i></span>
                                                        <span class="slider-item" data-value="4"><i class="fa-light fa-star"></i></span>
                                                        <span class="slider-item" data-value="5"><i class="fa-light fa-star"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Hidden input field to store product ID -->
                                            <input type="hidden" name="rating" id="rating" value="">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        </div>
                                        <button type="submit" class="cus-btn dark">
                                            <span class="icon-wrapper">
                                                <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            Submit
                                        </button>
                                    </form>


                                    </div>
                                </div>
                            </div>
                        </section>

                        
                        
                    </div>  
                    <!-- End Page Content -->
                    
        
                    <!-- Footer Area Start -->
                    <footer>
                        
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
                            <img src="/assets/media/products/mc_1.png" alt="Product Photo">
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
                            <img src="/assets/media/products/mc_2.png" alt="Product Photo">
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
        


        <script>
    // Get all slider items
    const sliderItems = document.querySelectorAll('.slider-item');

    // Add click event listener to each slider item
    sliderItems.forEach(item => {
        item.addEventListener('click', () => {
            const value = parseInt(item.getAttribute('data-value'));

            // Set solid stars for selected value and light stars for others
            sliderItems.forEach((item, index) => {
                if (index < value) {
                    item.innerHTML = '<i class="fas fa-star"></i>';
                } else {
                    item.innerHTML = '<i class="fas fa-star fa-light"></i>';
                }
            });

            // Set the selected value in a hidden input field
            document.getElementById('rating').value = value;

            // Log the selected value (rating)
            console.log('Rating:', value);
        });
    });
</script>


        </script>
        <!-- Jquery Js -->
        <script src="/assets/js/vendor/jquery-3.6.3.min.js"></script>
        <script src="/assets/js/vendor/bootstrap.min.js"></script>
        <script src="/assets/js/vendor/gsap.min.js"></script>
        <script src="/assets/js/vendor/scrollTrigger.min.js"></script>
        <script src="/assets/js/vendor/ScrollToPlugin.min.js"></script>
        <script src="/assets/js/vendor/ScrollSmoother.min.js"></script>
        <script src="/assets/js/vendor/jquery-appear.js"></script>
        <script src="/assets/js/vendor/jquery-validator.js"></script>
        <script src="/assets/js/vendor/ion.rangeSlider.js"></script>
        <script src="/assets/js/vendor/jquery.nice-select.min.js"></script>
        <script src="/assets/js/vendor/slick.min.js"></script>
        <script src="/assets/js/app.js"></script>

    </body>


<!-- Mirrored from uiparadox.co.uk/public/templates/royalfare/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 11:29:57 GMT -->
</html>
