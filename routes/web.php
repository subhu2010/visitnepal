<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.pages.home');
// });
Route::get('/', function () {
    return view('frontend.pages.trip-list');
});
Route::get('blog', function () {
    return view('frontend.pages.blog');
});
Route::get('blog/blog-detail', function () {
    return view('frontend.pages.blog-detail');
});
Route::get('contact', function () {
    return view('frontend.pages.contact');
});
Route::get('about', function () {
    return view('frontend.pages.about');
});
Route::get('privacy-policy', function () {
    return view('frontend.pages.policy');
});
Route::get('faq', function () {
    return view('frontend.pages.faq');
});
Route::get('trip-list-one', function () {
    return view('frontend.pages.trip-list-one');
});
Route::get('trip-list-two', function () {
    return view('frontend.pages.trip-list-two');
});
