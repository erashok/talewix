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


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/article', function () {
    return view('article');
});


Route::get('/pureblissy-contact-team', function () {
    return view('pureblissy-contact-team');
});

Route::get('/signup-and-login', function () {
    return view('signup-and-login');
});

Route::get('/subscription-and-billing', function () {
    return view('subscription-and-billing');
});
