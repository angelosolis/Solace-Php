@include('layouts.header')
<!-- Start Page Content -->
<div class="page-content">  
    
    <!-- Popular Items Section Start -->    
    <section class="py-80">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-sm-center align-items-end mb-48">
                <div class="heading">
                    <p class="eyebrow ">— specials ITEMS</p>
                    <h3 class="title">Our <span class="h3">Popular Items</span></h3>
                </div>
                <a href="/products" class="cus-btn dark d-sm-flex d-none">
                    <span class="icon-wrapper">
                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    See All
                </a>
            </div>
            <!-- Products List -->
                <div class="row">
                        @foreach($products as $product)
                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-32 mb-lg-0">
                                <div class="product-card text-center">
                                    <div class="product-img mb-16">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                    </div>
                                    <a href="{{ url('product-detail/' . $product->id) }}" class="h5 title">{{ $product->name }}</a>
                                    <p class="desc">{{ $product->description }}</p>
                                    <div class="action-block">
                                        <div class="quantity quantity-wrap">
                                            <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                            <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                            <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                                        </div>
                                        <div class="price-cart">
                                            <h5>${{ number_format($product->price, 2) }}</h5>
                                            <a href="javascript:;" class="cart-btn cart-button"><img src="{{ asset('assets/media/icons/shopping-cart.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>

            
            </div>
        </div>
    </section>
    <!-- Popular Items Section End -->   


    <!-- Stats Section Start -->    
    <section class="my-80 py-32 stats">
        <div class="container-fluid">
            <!-- Products List -->
            <div class="row align-items-center">
                <div class="col-xl-8 order-xl-1 order-2">
                    <div class="content mx-xl-0 mx-auto">
                        <div class="stat_block">
                            <h3 class="mb-24 numbers"><span class="odometer count_one" data-count="500">000</span><span>+</span></h3>
                            <h6 class="dark-gray">Order<br> was Delivered</h6>
                        </div>
                        <div class="stat_block">
                            <h3 class="mb-24 numbers"><span>4.</span><span class="odometer count_one" data-count="9">0</span></h3>
                            <h6 class="dark-gray">Our Goggle <br>Score</h6>
                        </div>
                        <div class="stat_block">
                            <h3 class="mb-24 numbers"><span class="odometer count_one" data-count="200">000</span><span>+</span></h3>
                            <h6 class="dark-gray">Natural <br> Product we use</h6>
                        </div>
                        <div class="stat_block">
                            <h3 class="mb-24 numbers"><span class="odometer count_one" data-count="60">00</span><span>+</span></h3>
                            <h6 class="dark-gray">Receipts <br> we have</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-xl-0 order-xl-2 order-1">
                    <div class="text-center mb-4 mb-xl-0">
                        <img src="assets/media/images/stats.png" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section End -->   

    <!-- Team Section Start -->    
    <section class="py-80">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-sm-center align-items-end mb-48">
                <div class="heading">
                    <p class="eyebrow">— Royal Fare Crew</p>
                    <h3 class="title">Our Dynamic <span class="h3">Fast Food Team</span></h3>
                </div>
                <a href="team.html" class="cus-btn dark d-sm-flex d-none">
                    <span class="icon-wrapper">
                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="icon-svg icon-svg-copy" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.2522 11.9789C14.4658 10.1925 13.7513 6.14339 15.6567 4.23792M15.6567 4.23792C14.565 5.3296 11.4885 7.21521 7.91576 3.64246M15.6567 4.23792L4.34301 15.5516" stroke="#FCFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    See All
                </a>
            </div>
            <!-- Team Cards -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-32 mb-lg-0">
                    <div class="team-card-1">
                        <a href="team-detail.html" class="img-block mb-24">
                            <img src="assets/media/team/t_1.png"  alt="">
                        </a>
                        <a href="#" class="h5 title mb-8">Sarah Johnson</a>
                        <p class="color-primary">Waiter</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-32 mb-lg-0">
                    <div class="team-card-1">
                        <a href="team-detail.html" class="img-block mb-24">
                            <img src="assets/media/team/t_2.png"  alt="">
                        </a>
                        <a href="#" class="h5 title mb-8">Ethan Rodriguez</a>
                        <p class="color-primary">Head Chef</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-32 mb-sm-0">
                    <div class="team-card-1">
                        <a href="team-detail.html" class="img-block mb-24">
                            <img src="assets/media/team/t_3.png"  alt="">
                        </a>
                        <a href="#" class="h5 title mb-8">Emily Brooks</a>
                        <p class="color-primary">Fry Chef</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card-1">
                        <a href="team-detail.html" class="img-block mb-24">
                            <img src="assets/media/team/t_4.png"  alt="">
                        </a>
                        <a href="#" class="h5 title mb-8">Megan Robinson</a>
                        <p class="color-primary">Waiter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Testimonials Start -->    
    <section class="testimonials_1">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="testimonial-heading-block">
                    <p class="eyebrow color-white">— Rave Reviews Here</p>
                    <h2 class="color-white mb-16">What Our<br> Customers Say</h2>
                    <p class="color-white">Lorem ipsum dolor sit amet consectetur. Congue <br>purus cursus ac aliquet eget enim est. Nunc.</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testimonial-block">
                    <img src="assets/media/vector/quote-shape.png" alt="" class="quote-shape">
                    <div class="testimonial-slider-card testimonial-slider-slick">
                        <div class="testimonial-1">
                            <div>
                                <img src="assets/media/testimonials/t_1.png" alt="">
                            </div>
                            <div class="text-block">
                                <p class="lead mb-24">"Consistency is key, and this place nails it every time. Whether it's a quick lunch or a late-night snack, the quality is consistently top-notch."</p>
                                <h6><span class="me-1">Sarah Johnson </span><span class="dark-gray"> | Customer</span></h6>
                            </div>
                        </div>
                        <div class="testimonial-1">
                            <div>
                                <img src="assets/media/testimonials/t_2.png" alt="">
                            </div>
                            <div class="text-block">
                                <p class="lead mb-24">"Consistency is key, and this place nails it every time. Whether it's a quick lunch or a late-night snack, the quality is consistently top-notch."</p>
                                <h6><span class="me-1">Sarah Johnson </span><span class="dark-gray"> | Customer</span></h6>
                            </div>
                        </div>
                        <div class="testimonial-1">
                            <div>
                                <img src="assets/media/testimonials/t_3.png" alt="">
                            </div>
                            <div class="text-block">
                                <p class="lead mb-24">"Consistency is key, and this place nails it every time. Whether it's a quick lunch or a late-night snack, the quality is consistently top-notch."</p>
                                <h6><span class="me-1">Sarah Johnson </span><span class="dark-gray"> | Customer</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End -->

    <!-- Brands Section Start -->    
    <div class="brands py-80">
        <div class="container-fluid">
            <div class="py-40 brands-slider-slick">
                <div class="brand-item">
                    <img src="assets/media/brands/brand-1.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/media/brands/brand-2.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/media/brands/brand-3.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/media/brands/brand-4.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/media/brands/brand-5.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/media/brands/brand-6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Brands Section End -->

</div>  
<!-- End Page Content -->
@include('layouts.footer')