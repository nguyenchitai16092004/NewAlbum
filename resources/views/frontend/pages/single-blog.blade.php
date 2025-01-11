@extends('frontend.layouts.master')
@section('title', 'Single Blog')
@section('main')
<link rel="stylesheet" href="css/singleblog.css">
<div class="single-blog-wrapper" style="margin-top:100px">
    <!-- Single Blog Post Thumb -->
    <div class="single-blog-post-thumb">
        {{-- <img src="{{ asset('img/bg-img/blog1.jpg') }}" alt="Blog Image"> --}}
        <img 
        src="{{ asset('Storage/Blog/' . $blogItem->HinhAnh) }}" 
        alt="{{ $blogItem->TieuDeBlog }}">
        </div>
    <!-- Single Blog Content Wrap -->
    <div class="single-blog-content-wrapper d-flex">
        <div class="single-blog--text">
            <h2>{{ $blogItem->TieuDeBlog }}
            <p>{{ $blogItem->NoiDung }}</p> 
        </div>
    </div>        
</div>
<div class="back-to-blog" style="margin-top: 30px; text-align: center;">
    <a href="{{ route('blog') }}" class="back-button">Return Blog</a>
</div>
@stop
