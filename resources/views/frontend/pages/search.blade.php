@extends('frontend.layouts.master')
@section('title', 'Search')

@section('main')
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/wishlist.css">
<link rel="stylesheet" href="css/pagination.css">
<link rel="stylesheet" href="css/blog.css">


<div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/core-img/kpop.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2 style="color:black">Search our site</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('search') }}" method="get" class="search-bar">
    <input type="text" name="query" placeholder="Search..." value="{{ old('query', $query) }}">
    <select name="filter">
        <option value="">Filter</option>
        <option value="1" {{ request('filter') == '1' ? 'selected' : '' }}>K-POP</option>
        <option value="2" {{ request('filter') == '2' ? 'selected' : '' }}>K-GOODS</option>
        <option value="3" {{ request('filter') == '4' ? 'selected' : '' }}>POSTER</option>
    </select>
    <button class="btn-search" type="submit">Search</button>
</form>

<div class="container" style="margin-top: 10px; display:none">
    <!-- <div class="product-grid"> -->
    @if(isset($products) && $products->isEmpty())
        <p style="text-align: center; font-size: 25px">No results found</p>
    @elseif(isset($products))
        <div class="product-grid">
            @foreach ($products as $product)
                @if ($product->TrangThai == 1)
                    <div class="product-card">
                        <img src="{{ asset('Storage/Sanpham/' . $product->HinhAnh) }}" alt="{{ $product->TenSP }}"
                            class="product-image">
                        <div class="product-details">
                            <h2 class="product-title">{{ $product->TenSP }}</h2>
                            <p class="product-price">{{ number_format($product->GiaBan) }} VNĐ</p>
                            <div class="action-buttons">
                                <button class="action-button add-to-cart">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="action-button remove-button">
                                    <i class="fa fa-heart"></i> Add WishList
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
</div>
<!-- Pagination -->
<nav aria-label="navigation" class="pagination-container mt-50 mb-70">
    {{ $products->links('pagination::bootstrap-4') }}
</nav>


<script>
    // Hiển thị container nếu form đã được submit
    document.addEventListener("DOMContentLoaded", function () {
        // Kiểm tra nếu URL có tham số query hoặc filter
        const urlParams = new URLSearchParams(window.location.search);
        const hasQuery = urlParams.has('query') && urlParams.get('query') !== '';
        const hasFilter = urlParams.has('filter') && urlParams.get('filter') !== '';

        if (hasQuery || hasFilter) {
            document.querySelectorAll('.container')[1].style.display = 'block';
        }
    });
</script>
@stop