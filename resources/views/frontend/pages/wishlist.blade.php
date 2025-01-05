@extends('frontend.layouts.master')
@section('title.', 'Trang yeu thich - Wishlist')
@section('main')
<link rel="stylesheet" href="css/wishlist.css">
<link rel="stylesheet" href="css/pagination.css">
<div class="favorites">
    <h1>WishList</h1>
</div>
<div class="container" style="margin-top: 50px">
    <div class="product-grid">
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
        <!-- Example Product -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Product Image" class="product-image">
            <div class="product-details">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <div class="action-buttons">
                    <button class="action-button add-to-cart">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="action-button remove-button">
                        <i class="fa fa-heart-broken"></i> Remove
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Pagination -->
<nav aria-label="navigation" class="navigation">
    <ul class="pagination mt-50 mb-70">
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">21</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav>
@stop