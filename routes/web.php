<?php

use App\Http\Controllers\Admin\BandController;
use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GoodController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\Admin\DiscountedProductController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\SingleBlogController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*Route FE */

Route::get('/', [HomeController::class, 'Index'])->name('Index_Home');

Route::get('/single-product-detail', function () {
    return view('frontend.pages.single-product-details');
});
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/blog', [BlogController::class, 'Index'])->name('Index_Blog');
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

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('update.cart');
Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');


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
Route::get('/search', function () {
    return view('frontend.pages.search');
});
Route::get('/rating-product', function () {
    return view('frontend.pages.rating-product');
});
Route::get('/account', function () {
    return view('frontend.pages.account');
});
Route::get('/popup', function () {
    return view('frontend.partials.popup.popup');
});
Route::get('/blog', [SearchController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'add'])->name('contact.add');
Route::get('/single-blog/{MaBL}', [BlogController::class, 'show'])->name('single-blog');
Route::prefix('/admin')->group(function () {

    // Route cho trang dashboard
    Route::view('/', 'backend.pages.sign-in');
    Route::post('/login', [LoginController::class, 'Login'])->name('Login_Admin');
    // Route cho sản phẩm
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'Index'])->name('Index_Product');
        // Thêm sản phẩm
        Route::get('/add-product', [ProductController::class, 'Show'])->name('Add_Index_Product');
        Route::post('/add', [ProductController::class, 'Add'])->name('Add_Product');
        // Sửa sản phẩm
        Route::get('/edit-product/{id}', [ProductController::class, 'Show_Edit'])->name('Edit_Index_Product');
        Route::post('/edit/{id}', [ProductController::class, 'Edit'])->name('Edit_Product');
        // Xóa sản phẩm
        Route::delete('/delete/{id}', [ProductController::class, 'Delete'])->name('Delete_Product');
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
        // Tìm kiếm nhóm nhạc ca sĩ
        Route::get('/search',[BandController::class, 'Search'])->name('Search_Band');
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
        // Tìm kiếm loại sản phẩm
        Route::get('/search',[CategoryController::class, 'Search'])->name('Search_Category');
    });

    // Route cho phiếu nhập
    Route::prefix('goods-receipt')->group(function () {
        Route::get('/', [GoodController::class, 'Index'])->name('Index_Goods');
        //Thêm sản phẩm
        Route::view('/add-good', 'backend.pages.goods-receipt.add-goods-receipt-management')->name('Add_Index');
        Route::get('/add', [GoodController::class, 'Add'])->name('Add_Good');
    });

    //Route cho quản lý đội ngũ
    Route::prefix(prefix: 'staff')->group(callback: function () {
        Route::view('/staff-management', 'backend.pages.staff.staff-management')->name('Index_Staff_Management');
        //Thêm 
        Route::view('/add-staff-management', 'backend.pages.staff.add-staff-management')->name('Index_Add_Staff_Management');
    });

    // Route cho quản lý hóa đơn
    Route::prefix(prefix: 'bill-management')->group(callback: function () {
        Route::view('/bill-management', 'backend.pages.bill.bill-management')->name('Index_Bill_Management');
        //Chi tiết
        Route::view('/bill-detail-management', 'backend.pages.bill.bill-detail-management')->name('Index_Bill_Detail_Management');
    });

    // Route cho quản lý bình luận
    Route::prefix(prefix: 'comments')->group(callback: function () {
        Route::view('/commments-management', 'backend.pages.comments.comments-management')->name('Index_Comments_Management');
    });

    //Route cho quản lý khách hàng
    Route::prefix(prefix: 'customer')->group(callback: function () {
        Route::view('/customer-management', 'backend.pages.customer.customer-management')->name('Index_Customer_Management');
    });

    Route::prefix('/blog')->group(function () {
        // Trang quản lý bài viết
        Route::get('/', [BlogAdminController::class, 'Index'])->name('Index_Blog_Management');
        // Thêm bài viết mới
        Route::view('/add-blog', 'backend.pages.blog.add-blog')->name('Index_Add_Blog');
        Route::post('/add', [BlogAdminController::class, 'Add'])->name('Add_Blog');
        
        // Sửa bài viết
        Route::get  ('/edit-blog/{id}',[BlogAdminController::class,'Show'])->name('Index_Edit_Blog');
        Route::post('/edit/{id}', [BlogAdminController::class, 'Edit'])->name('Edit_Blog');
        
        // Xóa bài viết
        Route::delete('/delete/{id}', [BlogAdminController::class, 'Delete'])->name('Delete_Blog');
    });
    

    //Route cho quản lý liên hệ từ khách hàng
    Route::prefix(prefix: 'contact')->group(callback: function () {
        Route::view('/contact-management', 'backend.pages.contact.contact-management')->name('Index_Contact_Management');
        Route::view('/response-contact-management', 'backend.pages.contact.response-contact-management')->name('Index_Response_Contact_Management');
    });

    //Route cho giao diện admin
    Route::prefix(prefix: 'admin-profile')->group(callback: function () {
        Route::view('/admin-profile', 'backend.pages.admin-profile.admin-profile')->name('Index_Admin_Profile');
        Route::view('/edit-admin-profile', 'backend.pages.admin-profile.edit-admin-profile')->name('Index_Edit_Admin_Profile');
    });

    //Route quản lý sản phẩm giảm giá
    Route::prefix('discounted')->group(function () {
        Route::get('/discounted-product', [DiscountedProductController::class, 'Index'])->name('Index_Discount');
        // Thêm sản phẩm giảm giá
        Route::view('/add-Discount', 'backend.pages.discounted.add-discounted-management')->name('Index_Add_Discount');
        Route::post('/add', [DiscountedProductController::class, 'Add'])->name('Add_Discount');
        // Sửa sản phẩm giảm giá
        Route::get('/edit-Discount/{id}', [DiscountedProductController::class, 'Show'])->name('Index_Edit_Discount');
        Route::get('/edit/{id}', [DiscountedProductController::class, 'Edit'])->name('Edit_Discount');
        // Xóa sản phẩm giảm giá
        Route::delete('/delete/{id}', [DiscountedProductController::class, 'Delete'])->name('Delete_Discount');
    });
});