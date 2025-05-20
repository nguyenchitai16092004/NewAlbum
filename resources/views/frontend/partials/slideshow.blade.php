<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<link rel="stylesheet" href="css/slideshow.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<div class="swiper-container" id="top"> <!-- Container chứa swiper -->
    <div class="swiper-wrapper"> <!-- Wrapper bao quanh tất cả các slide -->
        <div class="swiper-slide">
            <div class="slide-inner"> <!-- Bao bọc các phần tử bên trong slide -->
                <a href="{{ asset('/pre-oders') }}" class="image-container"
                    style="background-image: url(img/bg-img/slide-03.jpg);"></a>
                <div class="content-container"> <!-- Nội dung của slide -->
                    <div class="header-text"> <!-- Tiêu đề của nội dung -->
                        <h2 style="font-size: 50px;">After Ego - Comming Soon</h2>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($newArrivalProducts as $product)
            <div class="swiper-slide">
                <div class="slide-inner"> <!-- Bao bọc các phần tử bên trong slide -->
                    <a href="{{ route('product.details', ['slug' => $product->Slug]) }}" class="image-container"
                        style="background-image: url('{{ asset('storage/SanPham/' . $product->HinhAnh ?? 'path/to/default-image.jpg') }}');"></a>
                    <div class="content-container"> <!-- Nội dung của slide -->
                        <div class="header-text"> <!-- Tiêu đề của nội dung -->
                            <h5>New Arrivals in NewAlbum</h5>
                            <h1><a class="sildeshow-name-product" href="{{ route('product.details', ['slug' => $product->Slug]) }}"
                                    style="font-size: 30px">{{ $product->TenSP }}</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="action-slideshow">
        <div class="swiper-prev"><i class="fa-solid fa-chevron-left"></i></div> <!-- Nút quay lại -->
        <div class="swiper-next"><i class="fa-solid fa-chevron-right"></i></div> <!-- Nút tiếp theo -->
    </div>
</div>

<script src="js/swiper.js"></script>
<script src="js/slideshow.js"></script>
