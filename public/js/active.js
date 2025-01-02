(function ($) {
    'use strict';

    var $window = $(window);

    // :: Nav Active Code
    if ($.fn.classyNav) {
        $('#essenceNav').classyNav();
    }

    // :: Sliders Active Code
    if ($.fn.owlCarousel) {
        $('.popular-products-slides').owlCarousel({
            items: 4,
            margin: 30,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });
        $('.product_thumbnail_slides').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ["<img src='img/core-img/long-arrow-left.svg' alt=''>", "<img src='img/core-img/long-arrow-right.svg' alt=''>"],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });
    }

    // :: Header Cart Active Code
    var cartbtn1 = $('#essenceCartBtn');
    var cartOverlay = $(".cart-bg-overlay");
    var cartWrapper = $(".right-side-cart-area");
    var cartbtn2 = $("#rightSideCart");
    var cartOverlayOn = "cart-bg-overlay-on";
    var cartOn = "cart-on";

    cartbtn1.on('click', function () {
        cartOverlay.toggleClass(cartOverlayOn);
        cartWrapper.toggleClass(cartOn);
    });
    cartOverlay.on('click', function () {
        $(this).removeClass(cartOverlayOn);
        cartWrapper.removeClass(cartOn);
    });
    cartbtn2.on('click', function () {
        cartOverlay.removeClass(cartOverlayOn);
        cartWrapper.removeClass(cartOn);
    });

    // :: ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1000,
            easingType: 'easeInOutQuart',
            scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
        });
    }

    // :: Sticky Active Code
    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header_area').addClass('sticky');
        } else {
            $('.header_area').removeClass('sticky');
        }
    });

    // :: Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: Slider Range Price Active Code
    $('.slider-range-price').each(function () {
        var min = jQuery(this).data('min');
        var max = jQuery(this).data('max');
        var unit = jQuery(this).data('unit');
        var value_min = jQuery(this).data('value-min');
        var value_max = jQuery(this).data('value-max');
        var label_result = jQuery(this).data('label-result');
        var t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                console.log(t);
                t.closest('.slider-range').find('.range-price').html(result);
            }
        });
    });

    // :: Favorite Button Active Code
    var favme = $(".favme");

    favme.on('click', function () {
        $(this).toggleClass('active');
    });

    favme.on('click touchstart', function () {
        $(this).toggleClass('is_animating');
    });

    favme.on('animationend', function () {
        $(this).toggleClass('is_animating');
    });

    // :: Nicescroll Active Code
    if ($.fn.niceScroll) {
        $(".cart-list, .cart-content").niceScroll();
    }

    // :: wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }

    // :: Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // Hiển thị dropdown khi click vào icon User
    document.addEventListener('DOMContentLoaded', () => {
        const userIcon = document.getElementById('userIcon');
        const userOptions = document.getElementById('userOptions');

        // Toggle dropdown khi nhấn vào user icon
        userIcon.addEventListener('click', (e) => {
            e.preventDefault();
            userOptions.style.display = userOptions.style.display === 'block' ? 'none' : 'block';
        });

        // Ẩn dropdown khi nhấp ra ngoài
        document.addEventListener('click', (e) => {
            if (!userIcon.contains(e.target) && !userOptions.contains(e.target)) {
                userOptions.style.display = 'none';
            }
        });
    });
    // Action popup 
    //  //Xử lý popup Đăng nhập
    document.addEventListener('DOMContentLoaded', () => {
        const loginButton = document.getElementById('loginButton');
        const loginPopup = document.getElementById('loginPopup');
        const closePopup = loginPopup.querySelector('.close');

        // Hiển thị popup khi click vào Login
        loginButton.addEventListener('click', (e) => {
            e.preventDefault();
            loginPopup.style.display = 'flex';
        });

        // Đóng popup khi click vào nút close
        closePopup.addEventListener('click', () => {
            loginPopup.style.display = 'none';
        });
    });
     //Xử lý popup Đăng ký
    document.addEventListener('DOMContentLoaded', () => {
        const openPopupBtn = document.getElementById('openPopupBtn');
        const registerPopup = document.getElementById('registerPopup');
        const closePopup = registerPopup.querySelector('.close');

        // Hiển thị popup khi click vào Đăng ký
        openPopupBtn.addEventListener('click', (e) => {
            e.preventDefault();
            registerPopup.style.display = 'flex';
        });

        // Đóng popup khi click vào nút close
        closePopup.addEventListener('click', () => {
            registerPopup.style.display = 'none';
        });
    });

    //Xử lý popup Quên mật khẩu
    document.addEventListener('DOMContentLoaded', () => {
        const forgotpassButton = document.getElementById('forgotpassButton');
        const forgotpassPopup = document.getElementById('forgotpassPopup');
        const closePopup = forgotpassPopup.querySelector('.close');

        // Hiển thị popup khi click vào Đăng ký
        forgotpassButton.addEventListener('click', (e) => {
            e.preventDefault();
            forgotpassPopup.style.display = 'flex';
        });

        // Đóng popup khi click vào nút close
        closePopup.addEventListener('click', () => {
            forgotpassPopup.style.display = 'none';
        });
    });
    //Xử lý popup nhập OTP code
    document.addEventListener('DOMContentLoaded', () => {
        const openPopupOtp = document.getElementById('openPopupOtp');
        const otpcodePopup = document.getElementById('otpcodePopup');
        const closePopup = otpcodePopup.querySelector('.close');

        // Hiển thị popup khi click vào Đăng ký
        openPopupOtp.addEventListener('click', (e) => {
            e.preventDefault();
            otpcodePopup.style.display = 'flex';
        });

        // Đóng popup khi click vào nút close
        closePopup.addEventListener('click', () => {
            otpcodePopup.style.display = 'none';
        });
    });
    //Xử lý popup đổi mật khẩu
    document.addEventListener('DOMContentLoaded', () => {
        const openPopupChange = document.getElementById('openPopupChange');
        const changepassPopup = document.getElementById('changepassPopup');
        const closePopup = changepassPopup.querySelector('.close');

        // Hiển thị popup khi click vào Đăng ký
        openPopupChange.addEventListener('click', (e) => {
            e.preventDefault();
            changepassPopup.style.display = 'flex';
        });

        // Đóng popup khi click vào nút close
        closePopup.addEventListener('click', () => {
            changepassPopup.style.display = 'none';
        });
    });
})(jQuery);