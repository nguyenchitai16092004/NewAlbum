@extends('frontend.layouts.master')
@section('title', 'Trang chủ - Home')
@section('main')

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay">
        <div class="banner">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 hero-section">
                        <div class="hero-content content">
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
                <div class="img-prod">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1 ctn-desc">
                    <div class="product-description">
                        <a href="single-product-details.html">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod-3">
                <div class="img-prod">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1 ctn-desc">
                    <div class="product-description">
                        <a href="single-product-details.html">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 90px;" class="container ctn-top-catagory">
            <div class="prod-1">
                <div class="img-prod-1">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1">
                    <div class="product-description">
                        <a href="single-product-details.html">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod-2">
                <div class="img-prod">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1 ctn-desc">
                    <div class="product-description">
                        <a href="single-product-details.html">
                            <h6>[PRE-ORDER] Mingyu Esquire Korea Magazine 2024-12</h6>
                        </a>
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;oder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod-3">
                <div class="img-prod">
                    <img src="img/product-img/prod1.jpg" alt="">
                </div>
                <div class="name-pro np-1 ctn-desc">
                    <div class="product-description">
                        <a href="single-product-details.html">
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
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
                                <!-- Hover Thumb -->
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
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
                                <a href="{{ asset('/single-product-detail') }}">
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
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
                                <!-- Hover Thumb -->
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>    
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
                                <a href="{{ asset('/single-product-detail') }}">
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
                                <a href="">
                                    <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
                                <!-- Hover Thumb -->
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
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
                                <a href="{{ asset('/single-product-detail') }}">
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
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
                                <!-- Hover Thumb -->
                                <a href="{{ asset('/single-product-detail') }}">
                                    <img class="hover-img" src="img/product-img/blackpink-2nd.jpg" alt="">
                                </a>
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
                                <a href="{{ asset('/single-product-detail') }}">
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
            <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
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
            <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
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
            <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
                                    <h6 style="margin-left: 49px;">[Pre-oder]Born Pink (Gray Ver)</h6>
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
        <div style="margin-left: 200px;" class="container">
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
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all">
            <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- ##### Our Blog Post End ##### -->
@stop
