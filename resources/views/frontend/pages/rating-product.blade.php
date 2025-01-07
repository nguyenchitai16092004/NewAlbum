@extends('frontend.layouts.master')
@section('title', 'Rating Product')
@section('main')
    <link rel="stylesheet" href="css/rating-product.css">
    <div class="container-rating-product">
        <div class="ctn-rating-product">
            <div class="header">
                <div>
                    <h1>Welcome back!</h1>
                </div>
            </div>
            <p>You can review and edit your personal information here.</p>
            <nav class="navigation">
                <ul>
                    <li><a href={{ asset('/account')}}>Account Information</a></li>
                    <li><a href={{ asset('/oder-history')}}>Order History</a></li>
                    <li><a href={{ asset('/wishlist')}} >Wish List</a></li>
                    <li><a href={{ asset('/rating-product')}} class="active">Rating Product</a></li>
                </ul>
            </nav>
        </div>

        <div class="ctn-body-rating-product">
            <div class="product-item">
                <img src="https://via.placeholder.com/280" alt="Product Image" class="product-image">
                <div class="product-info">
                    <div class="rating">
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                    </div>
                    <div class="description"></div>
                </div>
            </div>

            <div class="product-item">
                <img src="https://via.placeholder.com/280" alt="Product Image" class="product-image">
                <div class="product-info">
                    <div class="rating">
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                    </div>
                    <div class="description"></div>
                </div>
            </div>

            <div class="product-item">
                <img src="https://via.placeholder.com/280" alt="Product Image" class="product-image">
                <div class="product-info">
                    <div class="rating">
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                        <span>⭐</span>
                    </div>
                    <div class="description"></div>
                </div>
            </div>
        </div>
    </div>
@stop
