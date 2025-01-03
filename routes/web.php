<?php


use App\Http\Controllers\BandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoodController;

use Illuminate\Support\Facades\Route;

/*Route FE */

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/shop', function () {
    return view('frontend.pages.shop');
});
Route::get('/single-product-detail', function () {
    return view('frontend.pages.single-product-details');
});
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/single-blog', function () {
    return view('frontend.pages.single-blog');
});
Route::get('/regular-page', function () {
    return view('frontend.pages.regular-page');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');

});
Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
});
Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
});
Route::get('/popup', function () {
    return view('frontend.partials.popup.popup');
});
Route::get('/cart', function () {
    return view('frontend.pages.cart');
});
Route::get('/single-product-details', function () {
    return view('frontend.pages.single-product-details');
});
Route::get('/new-arrival', function () {
    return view('frontend.pages.new-arrival');
});
Route::get('/get-up-50', function () {
    return view('frontend.pages.get-up-50');
});
Route::get('/pre-oders', function () {
    return view('frontend.pages.pre-oders');
});
Route::get('/our-blog-post', function () {
    return view('frontend.pages.our-blog-post');
});
Route::get('/oder-history', function () {
    return view('frontend.pages.oder-history');
});
Route::get('/new-arrival', function () {
    return view('frontend.pages.new-arrival');
});
Route::get('/get-up-50', function () {
    return view('frontend.pages.get-up-50');
});
Route::get('/pre-oders', function () {
    return view('frontend.pages.pre-oders');
});
Route::get('/our-blog-post', function () {
    return view('frontend.pages.our-blog-post');
});
Route::get('/oder-history', function () {
    return view('frontend.pages.oder-history');
});
Route::get('/new-arrival', function () {
    return view('frontend.pages.new-arrival');
});
Route::get('/get-up-50', function () {
    return view('frontend.pages.get-up-50');
});
Route::get('/pre-oders', function () {
    return view('frontend.pages.pre-oders');
});
Route::get('/our-blog-post', function () {
    return view('frontend.pages.our-blog-post');
});
Route::get('/oder-history', function () {
    return view('frontend.pages.oder-history');
});
Route::get('/search', function () {
    return view('frontend.pages.search');
});


Route::prefix('/admin')->group(function () {

    // Route cho trang dashboard
    Route::view('/', 'backend.pages.dashboard');
    Route::view('/dashboard', 'backend.pages.dashboard');

    // Route cho sản phẩm
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'Index'])->name('Index_Product');
        // Thêm sản phẩm
        Route::view('/add-product', 'backend.pages.product.add-product')->name('Add_Product');
        Route::get('/add', [ProductController::class, 'Add']);
        // Sửa sản phẩm
        Route::get('/edit', [ProductController::class, 'Edit'])->name('Edit_Product');
        // Xóa sản phẩm
        Route::get('/delete', [ProductController::class, 'Delete'])->name('Delete_Product');
    });

    // Route cho nhóm nhạc ca sĩ
    Route::prefix('band-singer')->group(function () {
        Route::get('/', [BandController::class, 'Index'])->name('Index_Band');
        // Thêm nhóm nhạc ca sĩ
        Route::view('/add-band', 'backend.pages.band_singer.add-band-singer')->name('Index_Add_Band');
        Route::post('/add', [BandController::class, 'Add'])->name('Add_Singer');
        // Sửa nhóm nhạc ca sĩ
        Route::get('/edit-band/{id}', [BandController::class, 'Show'])->name('Index_Edit_Band');
        Route::get('/edit/{id}', [BandController::class, 'Edit'])->name('Edit_Band');
        // Xóa nhóm nhạc ca sĩ
        Route::delete('/delete/{id}', [BandController::class, 'Delete'])->name('Delete_Band');
    });

    // Route cho loại sản phẩm
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'Index'])->name('Index_Category');
        // Thêm loại sản phẩm
        Route::view('/add-category', 'backend.pages.category.add-category')->name('Index_Add_Category');
        Route::post('/add', [CategoryController::class, 'Add'])->name('Add_Category');
        // Sửa loại sản phẩm
        Route::get('/edit-category/{id}', [CategoryController::class, 'Show'])->name('Index_Edit_Category');
        Route::get('/edit/{id}', [CategoryController::class, 'Edit'])->name('Edit_Category');
        // Xóa loại sản phẩm
        Route::delete('/delete/{id}', [CategoryController::class, 'Delete'])->name('Delete_Category');
    });

    // Route cho phiếu nhập
    Route::prefix('goods-receipt')->group(function(){
        Route::get('/',[GoodController::class,'Index'])->name('Index_Goods');
    });

    // Route cho liên hệ
    Route::view('/contact', 'backend.pages.contact');

    // Route cho đơn hàng
    Route::view('/bill', 'backend.pages.bill');

    // Route cho bình luận
    Route::view('/comments', 'backend.pages.comments');

    // Route cho thống kê
    Route::view('/statistic', 'backend.pages.statistic');

    //Route cho quản lý khách hàng
    Route::view(uri: '/customer-management', view: 'backend.pages.customer.customer-management');
    Route::view(uri: '/add-customer-management', view: 'backend.pages.customer.add-customer-management');
    Route::view(uri: '/edit-customer-management', view: 'backend.pages.customer.edit-customer-management');

    //Route cho quản lý nhân viên
    Route::view(uri: '/staff-management', view: 'backend.pages.staff.staff-management');
    Route::view(uri: '/add-staff-management', view: 'backend.pages.staff.add-staff-management');
    Route::view(uri: '/edit-staff-management', view: 'backend.pages.staff.edit-staff-management');
    // Route cho đơn hàng
    Route::view('/orders', 'backend.pages.orders');

    // Route cho liên hệ
    Route::view('/contact', 'backend.pages.contact');

    
});