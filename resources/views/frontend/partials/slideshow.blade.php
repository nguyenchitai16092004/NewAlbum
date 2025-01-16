<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<link rel="stylesheet" href="css/slideshow.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<div class="swiper-container" id="top">  <!-- Container chứa swiper -->
    <div class="swiper-wrapper">  <!-- Wrapper bao quanh tất cả các slide -->

        <!-- Slide KPOP -->
        <div class="swiper-slide">
            <div class="slide-inner">  <!-- Bao bọc các phần tử bên trong slide -->
                {{-- {{ route('product.detail', ['id' => $kpopProduct->id]) }} --}}
                <a href="#"> <!-- Link đến trang chi tiết sản phẩm -->
                    <div class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $kpopProduct->HinhAnh ?? 'path/to/default-image.jpg') }}');"></div>
                </a>                <div class="content-container">  <!-- Nội dung của slide -->
                    <div class="header-text">  <!-- Tiêu đề của nội dung -->
                        <h2>Best of the KPOP in NewAlbum</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide KGOODS -->
        <div class="swiper-slide">
            <div class="slide-inner">
                {{-- {{ route('product.detail', ['id' => $kgoodsProduct->id]) }} --}}
                <a href="#">
                    <div class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $kgoodsProduct->HinhAnh ?? 'path/to/default-image.jpg') }}');"></div>
                </a>                <div class="content-container">
                    <div class="header-text">
                        <h2>Best of the KGOODS in NewAlbum</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide POSTER -->
        <div class="swiper-slide">
            <div class="slide-inner">
                {{-- {{ route('product.detail', ['id' => $posterProduct->id]) }} --}}
                <a href="#">
                    <div class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $posterProduct->HinhAnh ?? 'path/to/default-image.jpg') }}');"></div>
                </a>                <div class="content-container">
                    <div class="header-text">
                        <h2>Best of the POSTER in NewAlbum</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide BLOG -->
        <div class="swiper-slide">
            <div class="slide-inner">
                {{-- {{ route('blog.detail', ['id' => $blogPost->id]) }} --}}
                <a href="#">
                    <div class="image-container" style="background-image: url('{{ asset('storage/SanPham/' . $blogPost->HinhAnh ?? 'path/to/default-image.jpg') }}');"></div>
                </a>
                <div class="content-container">
                    <div class="header-text">
                        <h2>Best of the BLOG in NewAlbum</h2>
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





{{-- <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
        <!-- Slide KPOP -->
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image: url('{{ asset('storage/SanPham/' . $kpopProduct->HinhAnh ?? 'path/to/default-image.jpg') }}'); width:300px; height: 300px;">
                <div class="container ctn-slideshow">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-text text-center">
                                <h2>Best of the KPOP in NewAlbum</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide KGOODS -->
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image: url('{{ asset('storage/SanPham/' . $kgoodsProduct->HinhAnh ?? 'path/to/default-image.jpg') }}'); width:300px; height: 300px;">
                <div class="container ctn-slideshow">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-text text-center">
                                <h2>Best of the KGOODS in NewAlbum</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide POSTER -->
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image: 
            url('{{ asset('storage/SanPham/' . $posterProduct->HinhAnh ?? 'path/to/default-image.jpg') }}'); width:300px; height: 300px;">
                <div class="container ctn-slideshow">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-text text-center">
                                <h2>Best of the POSTER in NewAlbum</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide BLOG -->
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image: 
            url('{{ asset('storage/SanPham/' . $blogPost->HinhAnh ?? 'path/to/default-image.jpg') }}'); width:300px; height: 300px;">
                <div class="container ctn-slideshow">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-text text-center">
                                <h2>Best of the BLOG in NewAlbum</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="action-slideshow">
        <div class="swiper-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="swiper-next"><i class="fa-solid fa-chevron-right"></i></div>
    </div>

</div> --}}

<script src="js/swiper.js"></script>
<script src="js/slideshow.js"></script>
