@extends('frontend.layouts.master')
@section('This page is the Detail-Product.', 'Detail-Product')
@section('main')
<link rel="stylesheet" href="css/single-product-details.css">
    <div class="container-detail">
        <div class="product-container" >
            <div class="product-image1"style="margin-top:40px">
                <img src="https://via.placeholder.com/400x400" alt="Version 1">
            </div>
            <div class="product-details"style="margin-top:40px">
                <h1>Name Product</h1>
                <p>Short description of the product</p>
        
                <div class="versions">
                    <div class="version-button">Version 1</div>
                    <div class="version-button">Version 2</div>
                    <div class="version-button">Version 3</div>
                    <div class="version-button">Version 4</div>
                </div>
        
                <div class="status-price">
                    <p>Status: <strong>2 in stock</strong></p>
                    <p>Price: <strong>487,555 VND</strong></p>
                </div>
        
                <div class="quantity">
                    <input type="number" value="1">
                </div>
        
                <a href="#" class="add-to-cart">ADD TO CART →</a>
        
                <div class="wishlist">
                    <span>🤍</span> WishList
                </div>
            </div>
        </div>        
    </div>
    <div class="container">
        <!-- Description Section -->
        <div class="description-section">
            <h1>BLACKPINK THE ALBUM Boxset</h1>
            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
            <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
            <div class="product-image2">
                <img src="https://via.placeholder.com/200x200" alt="Version 1">
            </div>
            <a href="#" class="more-button">More</a>
        </div>

        <!-- Review Section -->
        <div class="review-section">
            <h3>Review</h3>
            <div class="rating">
                <div class="rating-score">4.0</div>
                <div class="rating-stars">★★★★☆</div>
            </div>
            <div class="write-review">
                <label for="review">Write a review</label>
                <textarea id="review" placeholder="Write your review here..."></textarea>
                <div class="star-input">★★★★★</div>
            </div>
        </div>
        
        <div class="review-section2">
            <div class="review-header">
                <span>All reviews (0)</span>
                <div class="filter-controls">
                    <label for="rank">Rank:</label>
                    <select id="rank">
                        <option value="">Select</option>
                        <option value="high">High to Low</option>
                        <option value="low">Low to High</option>
                    </select>
        
                    <label for="arrange">Arrange:</label>
                    <select id="arrange">
                        <option value="">Select</option>
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
            </div>
        </div>        
        <div class="product-recommendation">
            <h3>You may also like these products</h3>
            <div class="products">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product 1">
                    <p>BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</p>
                    <p><strong>305.000 VND</strong></p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product 2">
                    <p>BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</p>
                    <p><strong>305.000 VND</strong></p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product 3">
                    <p>BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</p>
                    <p><strong>305.000 VND</strong></p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product 3">
                    <p>BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</p>
                    <p><strong>305.000 VND</strong></p>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product 3">
                    <p>BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</p>
                    <p><strong>305.000 VND</strong></p>
                </div>
            </div>
        </div>
    </div>
@stop
