@include('layouts.mainhead')
                        <!-- Page Title Banner Start -->
                        <h2 class="page-title">Shop</h2>
                        <!-- Page Title Banner End -->
                    </section>
                    <!-- Hero Section End -->  

                    <!-- Start Page Content -->
                    <div class="page-content">  

                        <!-- Shop Section Start -->    
                        <section class="py-80">
                            <div class="container-fluid">
                                <div class="row align-items-end">
                                    <div class="col-lg-6 mb-48">
                                        <div class="filter-row m-lg-0 mx-auto mb-0">
                                            <div class="search-field">
                                                <div class="form-group">
                                                    <label>Search</label>
                                                    <input type="search" class="cus-form-control" id="searchInput" name="search" autocomplete="off" required placeholder="Search here...">
                                                </div>
                                                <button type="submit" class="search-btn"><i class="fa-light fa-magnifying-glass"></i></button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-48">
                                        <div class="filter-row-2 justify-content-lg-end justify-content-center">
                                            <div class="right-filters">
                                                <ul class="unstyled layout-filter">
                                                    <li class="filter-btn"><a href="shop-list.html"><i class="fa-regular fa-list-ul"></i></a></li>
                                                    <li class="filter-btn active"><a href="shop-grid.html"><i class="fa-light fa-grid-2"></i></a></li>
                                                </ul>
                                                <select name="select" class="has-nice-select cus-form-control-select">
                                                    <option value="1">Fast food</option>
                                                    <option value="2">Special</option>
                                                    <option value="3">Chicken</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                @foreach($products as $product)
                                    <div class="item-card col-xl-3 col-lg-4 col-sm-6 mb-32">
                                        <div class="product-card text-center">
                                            <div class="product-img mb-16">
                                                <img src="{{$product->image}}"  alt="">
                                            </div>
                                            <a href="product-detail.html" class="h5 title">{{$product -> name}}</a>
                                            <p class="desc">{{$product -> description}}</p>
                                            <div class="action-block">
                                                <div class="quantity quantity-wrap">
                                                    <div class="decrement"><i class="fa-solid fa-dash"></i></div>
                                                    <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                                    <div class="increment"><i class="fa-solid fa-plus-large"></i></div>
                                                </div>
                                                <div class="price-cart">
                                                    <h5>${{$product -> price}}</h5>
                                                    <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1"> <!-- Default quantity is 1 -->
                                                        <button type="submit" class="cart-btn">
                                                            <img src="assets/media/icons/shopping-cart.png" alt="">
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    <!-- Pagination Start -->
                                    <ul class="pagination text-center">
                                        <li class="prev"><a href="#"><i class="fa-regular fa-chevron-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">10</a></li>
                                        <li class="next"><a href="#"><i class="fa-regular fa-chevron-right"></i></a></li>
                                    </ul>
                                    <!-- Pagination End -->
                                </div>
                            </div>
                        </section>
                        <!-- Shop Section End -->
                        
                    </div>  
                    <!-- End Page Content -->
                    @include('layouts.footer')

                