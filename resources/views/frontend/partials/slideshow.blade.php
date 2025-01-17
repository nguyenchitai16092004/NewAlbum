<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<link rel="stylesheet" href="css/slideshow.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<div class="swiper-container" id="top">  <!-- Container chứa swiper -->
    <div class="swiper-wrapper">  <!-- Wrapper bao quanh tất cả các slide -->

        @foreach($newArrivalProducts as $product)
            <div class="swiper-slide">
                <div class="slide-inner">  <!-- Bao bọc các phần tử bên trong slide -->
                    <a href="{{ route('product.details', ['slug' => $product->Slug]) }}" class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $product->HinhAnh ?? 'path/to/default-image.jpg') }}');"></a>
                        <div class="content-container">  <!-- Nội dung của slide -->
                            <div class="header-text">  <!-- Tiêu đề của nội dung -->
                                <h2>New Arrivals in NewAlbum</h2>
                                <h3><a href="{{ route('product.details', ['slug' => $product->Slug]) }}" style="font-size: 30px">{{$product->TenSP}}</a></h3>
                            </div>
                        </div>
                </div>
            </div>
        @endforeach

        {{-- <!-- Slide KGOODS -->
        <div class="swiper-slide">
            <div class="slide-inner">
                <a href="{{ route('product.details', ['slug' => $kgoodsProduct->Slug]) }}" class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $kgoodsProduct->HinhAnh ?? 'path/to/default-image.jpg') }}');"></a>
                <div class="content-container">
                    <div class="header-text">
                        <h2>Best of the KGOODS in NewAlbum</h2>
                        <h3><a href="{{ route('product.details', ['slug' => $kgoodsProduct->Slug]) }}" style="font-size: 30px">{{$kgoodsProduct->TenSP}}</a></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide POSTER -->
        <div class="swiper-slide">
            <div class="slide-inner">
                <a href="{{ route('product.details', ['slug' => $posterProduct->Slug]) }}" class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $posterProduct->HinhAnh ?? 'path/to/default-image.jpg') }}');"></a>
                <div class="content-container">
                    <div class="header-text">
                        <h2>Best of the POSTER in NewAlbum</h2>
                        <h3><a href="{{ route('product.details', ['slug' => $posterProduct->Slug]) }}" style="font-size: 30px">{{$posterProduct->TenSP}}</a></h3>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Slide BLOG -->
        <div class="swiper-slide">
            <div class="slide-inner">
                <a href="{{ route('blog.details', ['MaBL' => $blogPost->MaBL]) }}" class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $blogPost->HinhAnh ?? 'path/to/default-image.jpg') }}');"></a>
                <div class="content-container">
                    <div class="header-text">
                        <h2>Best of the BLOG in NewAlbum</h2>
                        <h3><a href="{{ route('blog.details', ['MaBL' => $blogPost->MaBL]) }}" style="font-size: 30px">{{$blogPost->TieuDeBlog}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="action-slideshow">
        <div class="swiper-prev"><i class="fa-solid fa-chevron-left"></i></div>  <!-- Nút quay lại -->
        <div class="swiper-next"><i class="fa-solid fa-chevron-right"></i></div> <!-- Nút tiếp theo -->
    </div>
    
</div>

<script src="js/swiper.js"></script>
<script src="js/slideshow.js"></script>
