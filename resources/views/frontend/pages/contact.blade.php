@extends('frontend.layouts.master')
@section('This page is the Contact.', 'Contact')
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
    <h1 class="contact-header" style="margin-top: 100px">Contact</h1>
    <div class="contact-area d-flex align-items-center" style="margin-top: 10px">
        <div class="form">
            <form>
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <input type="tel" placeholder="Phone Number" required>
                <textarea placeholder="Your message"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="contact-info">
        <h2>How to Find Us</h2>
        <div>
            <i class="fas fa-building"></i>  <p><strong>Company name:</strong> SoulSync Co., Ltd</p>
            </div>
            <div>
            <i class="fas fa-volume-up"></i> <p><strong>Slogan:</strong> Credibility builds the brand.</p>
            </div>
            <div>
            <i class="fas fa-globe"></i>  <p><strong>Website:</strong> www.soulsync.com.vn</a></p>
            </div>
            <div>
            <i class="fas fa-phone"></i>  <p><strong>Hotline:</strong> 0123456789</p>
            </div>
            <div>
            <i class="fas fa-envelope"></i> <p><strong>Email:</strong> support@soulsync.com</a></p>
            </div>
            <div>
            <i class="fas fa-map-marker-alt"></i> <p><strong>Address:</strong> 234 DCE Street, District 1, Ho Chi Minh city, Vietnam</p>
            </div>
        </div>

    </div>
    @stop
