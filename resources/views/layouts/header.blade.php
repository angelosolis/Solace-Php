<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from uiparadox.co.uk/public/templates/royalfare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 11:28:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RoyalFare - Restaurant html template">

    <title>Solace</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/all.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-266165434-1');
    </script>

</head>

<body id="body" class="x-hidden">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loading">
            <span data-text="S">S</span>
            <span data-text="O">O</span>
            <span data-text="L">L</span>
            <span data-text="A">A</span>
            <span data-text="C">C</span>
            <span data-text="E">E</span>

        </div>
        <img src="assets/media/icons/logo-vector.png" alt="" class="logo-bottom-vector">
    </div>

    <!--  Begin scroll container -->
    <div id="smooth-wrapper">
        <div id="smooth-content" class="x-hidden">
            <main>
                <!-- Hero Section Start -->
                <section class="hero-banner-1" id="hero">

                    <!-- Header start -->
                     <header id="ui-header">
                        <div class="ui-header-inner container-fluid"> 
                            <div class="ui-header-col">
                                <div class="ui-logo"> 
                                    <a href="/">
                                        <img src="assets/media/logo.png" class="ui-logo-light" alt="Logo"> <!-- logo light -->
                                        <img src="assets/media/logo.png" class="ui-logo-dark" alt="Logo"> <!-- logo dark -->
                                    </a>
                                </div>
                            </div>

                            <div class="ui-header-col white-bg">

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
                                                        <div class="col-xxl-3 col-xl-4 d-xl-block d-none">
                                                            <div class="ui-menu-img-block">
                                                                <img src="assets/media/images/menu-img.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 col-xl-5 col-md-6 ui-menu-nav">
                                                            @include('layouts.menuoption')
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-md-6 d-md-block d-none">
                                                            <div class="company-info">
                                                                <img src="assets/media/vector/menu-vector.png" alt="" class="vector">
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
                                                                    <li><a href="#"><img src="assets/media/icons/Facebook.svg" alt=""></a></li>
                                                                    <li><a href="#"><img src="assets/media/icons/Twitter.svg" alt=""></a></li>
                                                                    <li><a href="#"><img src="assets/media/icons/Instagram.svg" alt=""></a></li>
                                                                    <li><a href="#"><img src="assets/media/icons/Linkedin.svg" alt=""></a></li>
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
                                    <a href="javascript:;" class="ui-header-tools-item search-toggler"><i class="fa-regular fa-magnifying-glass"></i></a>
                                    @auth
                                        <a href="" class="ui-header-tools-item"><i class="fa-regular fa-user"></i></a>
                                    @else
                                        <a href="{{ route('login') }}" class="ui-header-tools-item"><i class="fa-regular fa-user"></i></a>
                                    @endauth
                                    @auth
                                    <a href="/cart" class="ui-header-tools-item"><i class="fa-regular fa-cart-shopping"></i></a>
                                    @endauth 
                                    @auth
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="ui-header-tools-item cart-button" style="border:none"><i class="fa-regular fa-sign-out"></i></button>
                                    </form>
                                    @endauth
                                </div>
                                <!-- End header tools -->

                            </div> 
                        </div> 
                    </header>
                    <!-- Header End -->

                    <div class="content">
                    <div class="text-block">
                    <p class="eyebrow ">{{-- Randomized inline code --}}
                        &#x2014; {{ $randomText }}
                    </p>
                        <div class="title-block">
                            <h1 class="banner-title mb-16" style="font-size: 58px">{{ $randomProduct->name }}</h1>
                            <img src="assets/media/vector/text-effect.png" class="text-effect" alt="">
                        </div>
                        <p class="description">{{ $randomProduct->description }}</p>
                        <div class="order">
                        <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $randomProduct->id }}">
                            <input type="hidden" name="quantity" value="1"> <!-- Default quantity is 1 -->
                            <button type="submit" class="cus-btn primary-banner">Order Now</button>
                        </form>
                            <span class="h4">${{ $randomProduct->price }}</span>
                        </div>
                    </div>
                    </div>
                    <div class="image-block">
                        <div class="images">
                            <div class="img img-1">
                                <img src="assets/media/banner/banner-1/product-large-1.png"  alt="">
                            </div>
                            <div class="img img-2">
                                <img src="assets/media/banner/banner-1/product-large-2.png"  alt="">
                            </div>
                            <div class="img img-3">
                                <img src="assets/media/banner/banner-1/product-large-3.png"  alt="">
                            </div>
                            <div class="img img-4">
                                <img src="assets/media/banner/banner-1/product-large-4.png"  alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero Section End -->  
    