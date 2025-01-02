<!-- ##### Header Area Start ##### -->
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="{{ asset('/') }}"><img src="img/core-img/logo.png" alt=""></a>
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
                        <li><a href="#">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Women's Collection</li>
                                    <li><a href="{{ asset('/shop') }}">Dresses</a></li>
                                    <li><a href="{{ asset('/shop') }}">Blouses &amp; Shirts</a></li>
                                    <li><a href="{{ asset('/shop') }}">T-shirts</a></li>
                                    <li><a href="{{ asset('/shop') }}">Rompers</a></li>
                                    <li><a href="{{ asset('/shop') }}">Bras &amp; Panties</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Men's Collection</li>
                                    <li><a href="{{ asset('/shop') }}">T-Shirts</a></li>
                                    <li><a href="{{ asset('/shop') }}">Polo</a></li>
                                    <li><a href="{{ asset('/shop') }}">Shirts</a></li>
                                    <li><a href="{{ asset('/shop') }}">Jackets</a></li>
                                    <li><a href="{{ asset('/shop') }}">Trench</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Kid's Collection</li>
                                    <li><a href="{{ asset('/shop') }}">Dresses</a></li>
                                    <li><a href="{{ asset('/shop') }}">Shirts</a></li>
                                    <li><a href="{{ asset('/shop') }}">T-shirts</a></li>
                                    <li><a href="{{ asset('/shop') }}">Jackets</a></li>
                                    <li><a href="{{ asset('/shop') }}">Trench</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ asset('/') }}">Home</a></li>
                                <li><a href="{{ asset('/shop') }}">Shop</a></li>
                                <li><a href="{{ asset('/single-product-detail') }}">Product Details</a></li>
                                <li><a href="{{ asset('/checkout') }}">Checkout</a></li>
                                <li><a href="{{ asset('/blog') }}">Blog</a></li>
                                <li><a href="{{ asset('/single-blog') }}">Single Blog</a></li>
                                <li><a href="{{ asset('/regular-page') }}">Regular Page</a></li>
                                <li><a href="{{ asset('/contact') }}">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ asset('/blog') }}">Blog</a></li>
                        <li><a href="{{ asset('/contact') }}">Contact</a></li>
                    </ul>
                </div>
                <!-- Nav End -->

            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#" id="userIcon"><img src="img/core-img/user.svg" alt="User"></a>
                <div id="userOptions" class="dropdown-user">
                    <ul>
                        <li><a href="{{ asset('/profile') }}">Profile</a></li>
                        <li><a href="{{ asset('/') }}" id="loginButton">Login</a>
                            <!-- Popup Đăng nhập-->
                            <div id="loginPopup" class="popup">
                                <div class="popup-content">
                                    <span class="close">&times;</span>
                                    <h2 style="text-align: center">Login</h2>
                                    <form id="loginForm" class="loginForm">
                                        @csrf
                                        <input type="email" id="email" name="email" placeholder="Email" required>
                                        <input type="password" id="password" name="password" placeholder="Password"
                                            required>

                                        <div class="button-container">
                                            <button id="openPopupBtn" class="btn-left">Register</button>
                                            <!-- Popup Đăng ký-->
                                            <div id="registerPopup" class="popup">
                                                <div class="popup-content register">
                                                    <span class="close">&times;</span>
                                                    <h2 style="text-align: center">Register</h2>
                                                    <form id="registerForm">
                                                        @csrf
                                                        <input type="text" id="username" name="username"
                                                            placeholder="Full Name" required>
                                                        <input type="email" id="email" name="email" placeholder="Email"
                                                            required>
                                                        <input type="password" id="password" name="password"
                                                            placeholder="Password" required>
                                                        <div class="button-container">
                                                            <button type="submit" class="btn-register">Register</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-right">Login</button>
                                        </div>
                                        <a href="{{ asset('/') }}" id="forgotpassButton">Forgot Password</a>
                                        <!-- Popup Quên mật khẩu-->
                                        <div id="forgotpassPopup" class="popup">
                                            <div class="popup-content">
                                                <span class="close">&times;</span>
                                                <h2 style="text-align: center">Forgot Password</h2>
                                                <form id="forgotpassForm">
                                                    @csrf
                                                    <input type="text" id="email" name="email" placeholder="Email"
                                                        required>
                                                    <div class="button-container">
                                                        <button id="openPopupOtp" class="btn-send">Send</button>
                                                        <!-- Popup OTP Code-->
                                                        <div id="otpcodePopup" class="popup">
                                                            <div class="popup-content">
                                                                <span class="close">&times;</span>
                                                                <h2 style="text-align: center">Enter OTP Code</h2>
                                                                <form id="otpcodeForm">
                                                                    @csrf
                                                                    <input type="text" id="otp" name="otp"
                                                                        placeholder="OTP" required>
                                                                    <div class="button-container">
                                                                        <button id="openPopupChange"
                                                                            class="btn-send">btn-send</button>
                                                                        <!-- Popup thay đổi password -->
                                                                        <div id="changepassPopup" class="popup">
                                                                            <div class="popup-content">
                                                                                <span class="close">&times;</span>
                                                                                <h2 style="text-align: center">Enter
                                                                                    OTP Code</h2>
                                                                                <form id="changepassForm">
                                                                                    @csrf
                                                                                    <input type="text" id="password"
                                                                                        name="password"
                                                                                        placeholder="Password" required>
                                                                                    <input type="re-password"
                                                                                        id="re-password"
                                                                                        name="re-password"
                                                                                        placeholder="Re-password"
                                                                                        required>
                                                                                    <div class="button-container">
                                                                                        <button type="submit"
                                                                                            class="btn-submit">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    =======
                    </nav>
                    <!-- Header Meta Data -->
                    <div class="header-meta d-flex clearfix justify-content-end">
                        <!-- Search Area -->
                        <div class="search-area">
                            <form action="#" method="post">
                                <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Favourite Area -->
                        <div class="favourite-area">
                            <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                        </div>
                        <!-- User Login Info -->
                        <div class="user-login-info">
                            <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                        </div>
                        <!-- Cart Area -->
                        <div class="cart-area">
                            <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt="">
                                <span>3</span></a>
                            >>>>>>> Stashed changes
                </div>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt="">
                    <span>3</span></a>
            </div>
        </div>

    </div>
</header>
<!-- ##### Header Area End ##### -->
