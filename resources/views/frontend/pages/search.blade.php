@extends('frontend.layouts.master')
@section('title', 'Trang tim kiem - Search')

@section('main')
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/wishlist.css">
<link rel="stylesheet" href="css/pagination.css">
<div class="search">
    <h1 style="text-align: center">Search our site</h1>
</div>


<form action="{{ route('search') }}" method="get" class="search-bar">
    <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
    <select name="filter">
        <option value="">Filter</option>
        <option value="kpop">K-POP</option>
        <option value="kgoods">K-GOODS</option>
        <option value="poster">POSTER</option>
    </select>
    <button class="btn-search" type="submit">Search</button>
</form>

<div class="container" style="margin-top: 50px">
    <div class="product-grid">
        @if(isset($products) && $products->isEmpty())
            <p style="text-align: center; font-size: 25px">No results found for "{{ $query  }}"</p>
        @elseif(isset($products))
            @foreach ($products as $product)

                @if ($product->TrangThai == 1)
                    <div class="product-card">
                        <img src="{{ $product->image_url ? asset($product->image_url) : 'https://via.placeholder.com/250' }}"
                            alt="{{ $product->TenSP }}" class="product-image">
                        <div class="product-details">
                            <h2 class="product-title">{{ $product->TenSP }}</h2>
                            <p class="product-price">{{ $product->GiaBan }}</p>
                            <div class="action-buttons">
                                <button class="action-button add-to-cart">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="action-button remove-button">
                                    <i class="fa fa-heart"></i> Add to WishList
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
<!-- Pagination -->
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