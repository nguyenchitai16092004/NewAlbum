@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('main')

<!-- Styles -->
<link rel="stylesheet" href="css/pagination.css">
<link rel="stylesheet" href="css/blog.css">

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/core-img/kpop.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2 style="color:black">K-Pop Blog</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Search Container ##### -->
<div class="search-container">
    <form action="{{ route('blog') }}" method="GET">
        <input type="text" name="query" placeholder="Search by TenTG..." value="{{ request('query') }}">
        <button type="submit">Search</button>
    </form>
</div>

<!-- ##### Result Container ##### -->
<div class="result-container text-center" style="margin-top: 40px;">
    @if(isset($query))
        @if($blog->isEmpty())
            <p>No results found for "{{ $query }}"</p>
        @endif

        <!-- Back to Blog Button -->
        <a href="{{ route('blog') }}" style="text-decoration: none;">
            <button class="btn btn-black">Back to Blog</button>
        </a>
    @endif
</div>

<!-- ##### Blog Wrapper Area Start ##### -->
<div class="blog-wrapper section-padding-80">
    <div class="container">
        <div class="row">
            @if(isset($query) && $blog->isEmpty())
                <div class="col-12">
                    <p class="text-center">No results found for "{{ $query }}"</p>
                </div>
            @else
                @foreach ($blog as $item)
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-area mb-50">
                            <img src="img/bg-img/blog1.jpg" alt="">
                            <div class="post-title">
                                <a href="#">{{ $item->TenTG }}</a>
                            </div>
                            <div class="hover-content">
                                <div class="hover-post-title">
                                    <a href="#">{{ $item->TenTG }}</a>
                                </div>
                                <p>{{ $item->NoiDung }}</p>
                                <a href="{{ asset('/single-blog') }}">Continue reading <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<!-- ##### Pagination ##### -->
<nav aria-label="navigation" class="pagination-container mt-50 mb-70">
    {{ $blog->links('pagination::bootstrap-4') }}
</nav>

@stop
