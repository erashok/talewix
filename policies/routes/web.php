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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/our-privacy-and-security-principles', function () {
    return view('privacyandsecurity');
});

Route::get('/privacy-policy', function () {
    return view('privacypolicy');
});

Route::get('/terms-of-service', function () {
    return view('termsservice');
});
Route::get('/pureblissy-product-privacy-guide', function () {
    return view('privacyguide');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/cookies', function () {
    return view('cookies');
});

