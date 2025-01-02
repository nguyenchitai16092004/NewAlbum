<?php


use App\Http\Controllers\BandController;


use App\Http\Controllers\ProductController;

use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*Route FE */

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
Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
});
Route::get('/popup', function () {
    return view('frontend.partials.popup.popup');
});
Route::get('/cart', function () {
    return view('frontend.pages.cart');
});

//Back end


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

    // Route cho đơn hàng
    Route::view('/orders', 'backend.pages.orders');

    // Route cho liên hệ
    Route::view('/contact', 'backend.pages.contact');
});