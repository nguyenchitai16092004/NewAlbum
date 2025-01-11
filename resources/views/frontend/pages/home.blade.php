@extends('frontend.layouts.master')
@section('title', 'Home')
@section('main')
    <link rel="stylesheet" href="css/home.css">
    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay">
        <div class="banner">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 hero-section">
                        <div class="content">
                            <h1>After Ego</h1>
                            <h4>Coming soon</h4>
                            <a href="#" class="preorder">Pre-order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-child">
                <img src="img/bg-img/lisa.jpg" alt="bg-lisa">
            </div>
        </div>
        <div class="page-indicator">
            <a href="#" class="prev">&lt;</a>
            <span class="page-number">1/2</span>
            <a href="#" class="next">&gt;</a>
        </div>
    </section>
    <!-- ##### Top Catagory Area Start ##### -->
    <section class="top-catagory">
        <div class="container ctn-top-catagory">

            <div class="prod-1">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="product-description">
                    <a href="#">
                        <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                    </a>
                    <div class="pre-oder-new-arrivals">
                        <span>Pre&ndash;oder</span>
                    </div>
                </div>
            </div>
            <div class="prod-2">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1">
                    <div class="product-description">
                        <a href="#">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod-3">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1">
                    <div class="product-description">
                        <a href="#">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 90px;" class="container ctn-top-catagory pre-col2">
            <div class="prod-1 prod-col-2">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1">
                    <div class="product-description">
                        <a href="#">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod-2">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1">
                    <div class="product-description">
                        <a href="#">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod-3">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1">
                    <div class="product-description">
                        <a href="#">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>NEW ARRIVALS</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        @foreach ($products as $item)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{ asset('/single-product-details') }}">
                                        <img src="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}"
                                            alt="{{ $item->TenSP }}">
                                    </a>
                                    <!-- Hover Thumb -->
                                    {{-- <a href="{{ asset('/single-product-details') }}">
                                    <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a> --}}
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <div class="pre-oder-new-arrivals">
                                        <span>Pre&ndash;oder</span>
                                    </div>
                                    <a href="{{ asset('/single-product-details') }}">
                                        <h6>{{ $item->TenSP }}</h6>
                                    </a>
                                    <p class="product-price price">{{ number_format($item->GiaBan) }} VND</p>


                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <div class="add-to-cart-btn">
                                                <button class="btn essence-btn add-to-cart-btn"
                                                    data-id="{{ $item->MaSP }}" data-name="{{ $item->TenSP }}"
                                                    data-price="{{ $item->GiaBan }}"
                                                    data-image="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="{{ asset('/new-arrival') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Get Up To 50% Off Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>GET UP TO 50% OFF</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND<span class="old-price">1.000.000 VND</span>
                                </p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all">
            <a href="{{ asset('/get-up-50') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Pre-Oders Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>Pre-Oders</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price"><span class="old-price">1.000.000 VND</span> 650.000 VND
                                </p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price"><span class="old-price">1.000.000 VND</span> 650.000 VND
                                </p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;oder</span>
                                </div>
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                                <p class="product-price price">650.000 VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="{{ asset('/pre-oders') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- ##### Pre-Oders Area End ##### -->
    <!-- ##### Hot Group Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>Hot Group</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description hot-group">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hot Group End ##### -->
    <!-- ##### Our Blog Post Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>Our Blog Post</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="single-product-details.html">
                                    <h6>[Pre-oder]Born Pink (Gray Ver)</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all">
            <a href="{{ asset('/our-blog-post') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- ##### Our Blog Post End ##### -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productId = this.dataset.id;
                    const productName = this.dataset.name;
                    const productPrice = this.dataset.price;
                    const productImage = this.dataset.image;

                    fetch("{{ route('add.to.cart') }}", {
                            // gửi yc đến cart
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json" // khai báo dl là json
                            },
                            body: JSON.stringify({
                                // chuyển dl sang json
                                id: productId, 
                                name: productName, 
                                price: productPrice, 
                                image: productImage
                            })
                        })
                        .then(response => response.json())
                        // trả phản hồi json-> js

                        .then(data => {
                            if (data.success) {
                                const cartQuantity = document.querySelector(
                                    '.header-meta .favourite-area span');
                                if (cartQuantity) {
                                    cartQuantity.textContent = Object.values(data.cart).reduce((
                                        total, item) => total + item.quantity, 0);
                                    // cập nhật slsp trong gh lên header.
                                }
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
@stop
