@extends('frontend.layouts.master')
@section('title', 'About Us')
@section('main')
    <link rel="stylesheet" href="css/about-us.css">
    <div class="about-us">
        <h2>About Us</h2>
        <div class="about-us">
            <div>
                <div class="image-container" style="">
                    <a href="{{ route('blog') }}">
                        <img src="img/core-img/logo.jpeg" alt="Record player icon" style="max-width: 100%; height: auto;">
                    </a>
                </div>
                <div class="text-container">
                    <p>NewAlbum is an online store launched in 2024 that specializes in selling K-pop albums and exclusive
                        goods from top K-pop idols. Catering to the growing global fanbase of K-pop, NewAlbum offers a wide
                        range of products, including albums, merchandise, and limited-edition items, providing fans with a
                        one-stop shop for connecting with their favorite artists. NewAlbum prides itself on offering
                        high-quality products and reliable shipping, ensuring that fans around the world can enjoy authentic
                        K-pop experiences from the comfort of their homes.</p>
                </div>
            </div>
        </div>
        <div class="container-all">
            <div class="info-box" style="margin-top: -50px">
                <ul>
                    <li><strong>Company name:</strong> NewAlbum Co., Ltd</li>
                    <li><strong>Slogan:</strong> Credibility builds the brand.</li>
                    <li><strong>Website:</strong> www.newalbum.com.vn</li>
                    <li><strong>Hotline:</strong> {{ $contactInfo->SDT }}</li>
                    <li><strong>Email:</strong> {{ $contactInfo->Email }}</li>
                    <li><strong>Address:</strong> 234 DCE Street, District 1, Ho Chi Minh city, Vietnam</li>
                </ul>
            </div>
            <div class="policies">
                <ul>
                    <li><strong>NewAlbum Shipping Protection:</strong>NewAlbum protects your order.</li>
                    <li><strong>Shipping & Returns:</strong>Explore our shipping & returns.</li>
                    <li><strong>Refund Policy:</strong>Easy refunds available.</li>
                    <li><strong>Shipping Policy:</strong>Shipping rates & options.</li>
                    <li><strong>Privacy Policy:</strong>Your privacy is our priority.</li>
                    <li><strong>Terms of Service:</strong>Review our terms.</li>
                </ul>
            </div>
        </div>
    </div>
@stop
