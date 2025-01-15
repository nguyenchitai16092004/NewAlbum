<link rel="stylesheet" href="css/header.css">
<!-- ##### Header Area Start ##### -->
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="{{ asset('/') }}"><img class="logo" src="img/core-img/logo.jpeg"
                    alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a style="color: rgb(255, 255, 255);" href="#">Shop</a>
                            <ul class="dropdown">
                                @foreach ($allCategoryProducts as $cate)
                                    <li>
                                        <a href="{{ url('/listproduct/' . $cate->Slug) }}">{{ $cate->TenLoaiSP }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a style="color: rgb(255, 255, 255);" href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ asset('/') }}">Home</a></li>
                                <li><a href="{{ asset('/blog') }}">Blog</a></li>
                                <li><a href="{{ asset('/contact') }}">Contact</a></li>
                                <li><a href="{{ asset('/about-us') }}">About Us</a></li>
                                <li><a href="{{ asset('/new-arrival') }}">New Arrivals</a></li>
                                <li><a href="{{ asset('/pre-oders') }}">Pre-Order</a></li>
                            </ul>
                        </li>
                        <li><a style="color: rgb(255, 255, 255);" href="{{ asset('/blog') }}">Blog</a></li>
                        <li><a style="color: rgb(255, 255, 255);" href="{{ asset('/contact') }}">Contact</a></li>
                        <li><a style="color: rgb(255, 255, 255);" href="{{ asset('/about-us') }}">About Us</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <div class="favourite-area">
                    <a href="{{ asset('/search') }}"><img src="img/core-img/search.svg" alt=""></a>
                </div>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="{{ asset('/wishlist') }}"><img src="img/core-img/heart.svg" alt=""></a>
            </div>
            <!-- User Login Info -->
            @include('frontend.partials.popup.popup')
            <!-- Cart Area -->
            <div class="favourite-area">
                <a href="{{ asset('/cart') }}">
                    <img src="img/core-img/bag.svg" alt="">
                    <span>{{ $totalQuantity ?? 0 }}</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
