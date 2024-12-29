<?php


use App\Http\Controllers\BandController;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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


//Back end
Route::prefix('/admin')->group(function () {
    // Route cho trang dashboard
    Route::view('/', 'backend.pages.dashboard');
    Route::view('/dashboard', 'backend.pages.dashboard');
    

    // Route cho sản phẩm
    Route::get('/product', [ProductController::class, 'Index'])->name('Index_Product');
    // Route cho các thao tác với sản phẩm
    Route::prefix('product')->group(function () {
        // Route thêm sản phẩm
        Route::view('/add-product', 'backend.pages.product.add-product')->name('Add_Product');

        Route::get('/add', [ProductController::class, 'Add']);
        // Route sửa sản phẩm
        Route::get('/edit', [ProductController::class, 'Edit'])->name('Edit_Product');
        // Route xóa sản phẩm
        Route::get('/delete', [ProductController::class, 'Delete'])->name('Delete_Product');
    });


    //Route cho nhóm nhạc ca sĩ
    Route::get('/band-singer', [BandController::class, 'Index'])->name('Index_Band');

    //Route cho các thao tác với nhóm nhạc ca sĩ
    Route::prefix('band_singer')->group(function () {
        //Thêm nhóm nhạc ca sĩ
        Route::view('/add-band', 'backend.pages.band_singer.add-band-singer')->name('Index_Add_Band');
        Route::post('/add', [BandController::class, 'Add'])->name('Add_Singer');

        //Xóa nhóm nhạc ca sĩ
        Route::delete('/Delete/{id}', [BandController::class, 'Delete'])->name('Delete_Band');

        //Sửa nhóm nhạc ca sĩ
        Route::get('/Edit-band/{id}', [BandController::class, 'Show'])->name('Index_Edit_Band');
        Route::get('/Edit/{id}', [BandController::class, 'Edit'])->name('Edit_Band');
    });


    // Route cho loại sản phẩm
    Route::get('/category', [CategoryController::class, 'Index'])->name('Index_Category');

    //Route cho các thao tác với loại sản phẩm
    Route::prefix('category')->group(function () {
        //Thêm loại sản phẩm
        Route::view('/add-category', 'backend.pages.category.add-category')->name('Index_Add_Category');
        Route::post('/add', [CategoryController::class, 'Add'])->name('Add_Category');

        //Xóa loại sản phẩm
        Route::delete('/Delete/{id}', [CategoryController::class, 'Delete'])->name('Delete_Category');

        //Sửa loại sản phẩm
        Route::get('/Edit-category/{id}', [CategoryController::class, 'Show'])->name('Index_Edit_Category');
        Route::get('/Edit/{id}', [CategoryController::class, 'Edit'])->name('Edit_C ategory');
    });
});
