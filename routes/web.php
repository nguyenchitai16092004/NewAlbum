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
Route::get('/admin/home', function () {
    return view('backend.pages.home');
});
Route::get('/admin/', function () {
    return view('backend.pages.home');
});
Route::get('/admin/add-department', function () {
    return view('backend.pages.add-department');
});
Route::get('/admin/add-library', function () {
    return view('backend.pages.add-library');
});
Route::get('/admin/all-courses', function () {
    return view('backend.pages.all-courses');
});
Route::get('/admin/all-professors', function () {
    return view('backend.pages.all-professors');
});
Route::get('/admin/departments', function () {
    return view('backend.pages.departments');
});
Route::get('/admin/edit-department', function () {
    return view('backend.pages.edit-department');
});
Route::get('/admin/edit-library', function () {
    return view('backend.pages.edit-library');
});
Route::get('/admin/edit-student', function () {
    return view('backend.pages.edit-student');
});
Route::get('/admin/library-assets', function () {
    return view('backend.pages.library-assets');
});
Route::get('/admin/login', function () {
    return view('backend.pages.login');
});
Route::get('/admin/rounded-chart', function () {
    return view('backend.pages.rounded-chart');
});
Route::get('/admin/student-profile', function () {
    return view('backend.pages.student-profile');
});
/*End Route BE */