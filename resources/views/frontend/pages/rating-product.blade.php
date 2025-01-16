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
                <li><a href="{{ asset("/account") }}">Account Information</a></li>
                <li><a href="{{ route('hoa_don_history', ['id' => session('User')]) }}">Order History</a></li>
                <li><a href="{{ asset('/wishlist') }}">Wish List</a></li>
                <li><a href="#" class="active">Rating Product</a></li>
            </ul>
        </nav>
    </div>

    <div class="ctn-body-rating-product">
        @if ($comments->isEmpty())
            <p>You haven't commented on any of the products you've purchased.</p>
        @else
            @foreach ($comments as $comment)
                <div class="product-item">
                    <img src="{{ asset('Storage/SanPham/' . $comment->SANPHAM->HinhAnh) }}" alt="{{ $comment->SANPHAM->TenSP }}"
                        class="product-image">
                    <div class="product-info">
                        <span class="comment-date">{{ $comment->created_at->format('F d, Y') }}</span>
                        <div class="rating">
                            {{ str_repeat('★', $comment->SoSao) }}{{ str_repeat('☆', 5 - $comment->SoSao) }}
                        </div>
                        <div class="description">
                            <p style="margin-left:10px">{{ $comment->NoiDung }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@stop