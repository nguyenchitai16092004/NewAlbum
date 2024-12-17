<?php

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
/*End Route FE */
/*Route BE */
Route::get('/admin/', function () {
    return view('backend.pages.dashboard');
});
Route::get('/admin/dashboard', function () {
    return view('backend.pages.dashboard');
});
Route::get('/admin/oders', function () {
    return view('backend.pages.oders');
});
Route::get('/admin/contact', function () {
    return view('backend.pages.contact');
});
Route::get('/admin/category', function () {
    return view('backend.pages.category');
});
Route::get('/admin/add-category', function () {
    return view('backend.pages.add-category');
});
Route::get('/admin/edit-category', function () {
    return view('backend.pages.edit-category');
});
Route::get('/admin/login', function () {
    return view('backend.pages.login');
});
Route::get('/admin/statistic', function () {
    return view('backend.pages.statistic');
});
Route::get('/admin/my-profile', function () {
    return view('backend.pages.my-profile');
});
Route::get('/admin/bill', function () {
    return view('backend.pages.bill');
});
Route::get('/admin/product', function () {
    return view('backend.pages.product');
});
Route::get('/admin/edit-product', function () {
    return view('backend.pages.edit-product');
});
Route::get('/admin/add-product', function () {
    return view('backend.pages.add-product');
});
Route::get('/admin/comments', function () {
    return view('backend.pages.comments');
});
Route::get('/admin/employee-management', function () {
    return view('backend.pages.employee-management');
});
Route::get('/admin/add-employee-management', function () {
    return view('backend.pages.add-employee-management');
});
Route::get('/admin/edit-employee-management', function () {
    return view('backend.pages.edit-employee-management');
});
Route::get('/admin/band-singer', function () {
    return view('backend.pages.band-singer');
});
Route::get('/admin/add-band-singer', function () {
    return view('backend.pages.add-band-singer');
});
Route::get('/admin/edit-band-singer', function () {
    return view('backend.pages.edit-band-singer');
});
Route::get('/admin/customer-management', function () {
    return view('backend.pages.customer-management');
});
Route::get('/admin/add-customer-management', function () {
    return view('backend.pages.add-customer-management');
});
Route::get('/admin/edit-customer-management', function () {
    return view('backend.pages.edit-customer-management');
});
Route::get('/admin/staff-management', function () {
    return view('backend.pages.staff-management');
});
Route::get('/admin/add-staff-management', function () {
    return view('backend.pages.add-staff-management');
});
Route::get('/admin/edit-staff-management', function () {
    return view('backend.pages.edit-staff-management');
});
/*End Route BE */
