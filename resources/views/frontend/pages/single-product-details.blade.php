@extends('frontend.layouts.master')
@section('This page is the Detail-Product.', 'Detail-Product')
@section('main')
    <link rel="stylesheet" href="css/single-product-details.css">
    <div class="product-detail-container">
        <h1 class="product-name">Name Product</h1>
        <div class="product-images">
            <div class="image-grid">
                <img src="img/product-img/prod1.jpg" alt="Version 1">
            </div>
        </div>
        <div class="product-info">
            <p class="short-description">Short description of the product</p>
            <div class="product-versions">
                <span>Ver:</span><br>
                <button>Version 1</button>
                <button>Version 2</button>
                <button>Version 3</button>
                <button>Version 4</button>
            </div>
            <p class="product-status">Status: <span>2 in stock</span></p>
            <p class="product-price">Price: <span>487.555 VND</span></p>
            <div class="quantity-selector">
                <label for="quantity">Quantity:</label>
                <div class="quantity-container">
                    <button class="decrease">-</button>
                    <input type="number" id="quantity" value="1" min="1">
                    <button class="increase">+</button>
                </div>
            </div>
            <button class="add-to-cart">ADD TO CART →</button>
            <div class="wishlist">
                <a href="#" onclick="toggleHeart(event)" style="">
                    <i class="fa-regular fa-heart" id="heartIcon" style="transition: color 0.3s;"></i>WishList
                </a>
            </div>
            <hr>
            <script>
                function toggleHeart(event) {
                    event.preventDefault();
                    const heart = document.getElementById('heartIcon');
                    if (heart.classList.contains('fa-regular')) {
                        heart.classList.remove('fa-regular');
                        heart.classList.add('fa-solid');
                        heart.style.color = 'red';
                    } else {
                        heart.classList.remove('fa-solid');
                        heart.classList.add('fa-regular');
                        heart.style.color = '';
                    }
                }
            </script>
        </div>
    </div>
    <div class="container-desc">
        <div class="product-description">
            <h2>Description</h2>
            <hr>
        </div>
        <h1 class="title">BLACKPINK THE ALBUM Boxset</h1>
        <div class="subtitle">The standard Lorem Ipsum passage, used since the 1500s</div>
        <div class="description">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum."
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci sint totam, harum accusantium nesciunt minus,
            possimus eligendi quasi rem eius a et ratione ipsum pariatur, in quia ullam iure unde.
        </div>
        <div class="desc-img">
            <img src="img/product-img/prod1.jpg" alt="Version 1">
        </div>
        <a href="#" class="desc-more">More</a>
    </div>
    <div class="review-section">
        <div style="display: flex;gap: 10px;">
            <h2>Review</h2>
            <hr style="flex-grow: 1;">
        </div>
        <div class="container-review">
            <div class="review-header">
                <div class="review-score">
                    <div>4.0</div>
                    <div class="star-rating">★★★★☆</div>
                </div>
            </div>

            <div class="write-review">
                <div class="star-input">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <textarea placeholder="Write a review"></textarea>

            </div>
        </div>
        <div class="all-reviews">
            <h5>All reviews (0)</h5>
            <div class="review-filters">
                <input type="text" class="filter-input" placeholder="Rank">
                <input type="text" class="filter-input" placeholder="Arrange">
            </div>
            <hr>
        </div>
    </div>

    <div class="product-recommendations">
        <h2 class="recommendations-title">You may also like these products</h2>
        <hr>
        <div class="recommendation-items">
            <div class="recommendation-item">
                <div class="img-container">
                    <img src="https://via.placeholder.com/280" alt="Product Image">
                </div>
                <a href="#">BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</a>
                <p class="price">305.000 VND</p>
            </div>
            <div class="recommendation-item">
                <div class="img-container">
                    <img src="https://via.placeholder.com/280" alt="Product Image">
                </div>
                <a href="#">BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</a>
                <p class="price">305.000 VND</p>
            </div>
            <div class="recommendation-item">
                <div class="img-container">
                    <img src="https://via.placeholder.com/280" alt="Product Image">
                </div>
                <a href="#">BLACKPINK - [BORN PINK] 2nd Album DIGIPACK ROSE Version</a>
                <p class="price">305.000 VND</p>
            </div>
        </div>
    </div>
@stop
