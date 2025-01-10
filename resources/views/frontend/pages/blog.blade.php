@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('main')

<!-- Styles -->
<link rel="stylesheet" href="css/pagination.css">
<link rel="stylesheet" href="css/blog.css">
<style>
    .post-date {
        color: black;
        font-size: 14px;
        font-weight: normal;
    }
</style>
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
        <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
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

                @if ($item->TrangThai == 1)
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img 
                        src="{{ asset('Storage/Blog/' . $item->HinhAnh) }}" 
                        alt="{{ $item->TieuDeBlog }}" 
                        width="300" 
                        height="200">
                        <div class="post-title">
                            <a href="#">{{ $item->TieuDeBlog}}</a>
                            <p class="post-date" style="color:black;z-index:1000">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</p>
                        </div>
                        <div class="hover-content">
                            <div class="hover-post-title">
                                <a href="#">{{ $item->TieuDeBlog }}</a>
                            </div>
                            <p>{{ $item->TieuDeBlog }}</p>
                            <a href="{{ route('single-blog', ['MaBL' => $item->MaBL]) }}">Continue reading <i class="fa fa-angle-right"></i></a>                            </div>
                    </div>
                </div>
                @endif          
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
