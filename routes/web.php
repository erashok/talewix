<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SubscriptionController;



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

 Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
  Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
  Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
  Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
  Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
  Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
  // Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);admin/delete-category/
  Route::post('delete-category/', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

  Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
  Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
  Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);

  Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
  Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
  Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

  Route::get('plans', [App\Http\Controllers\Admin\PlansController::class, 'index']);
  Route::get('add-plan', [App\Http\Controllers\Admin\PlansController::class, 'create']);
  Route::post('add-plan', [App\Http\Controllers\Admin\PlansController::class, 'store']);

  Route::get('plans/{plan_id}', [App\Http\Controllers\Admin\PlansController::class, 'edit']);
  // Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PlansController::class, 'update']);
  Route::get('delete-plan/{plan_id}', [App\Http\Controllers\Admin\PlansController::class, 'destroy']);

  Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
  Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
  Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);

  Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index']);
  Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'savedata']);
});

Auth::routes();

Route::get('getLogout', [App\Http\Controllers\Auth\LoginController::class, 'getLogout'])->name('getLogout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('new-story', [App\Http\Controllers\Frontend\FrontendController::class, 'newstory']);
Route::get('search', [App\Http\Controllers\Frontend\FrontendController::class, 'search']);
Route::get('profile', [App\Http\Controllers\Frontend\FrontendController::class, 'userprofile']);
Route::get('/profile/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'showProfile'])->name('profile.show');
Route::get('plans', [App\Http\Controllers\Frontend\FrontendController::class, 'plans']);
Route::get('{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewcategoryPost']);
Route::get('{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewpost']);
Route::get('/getLogout', [App\Http\Controllers\Frontend\FrontendController::class, 'getLogout'])->name('logout');
Route::post('/add-story', [App\Http\Controllers\Frontend\FrontendController::class, 'addstory'])->name('addstory')->middleware('auth');
Route::get('/posts/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showpost'])->name('showpost');
Route::post('/profile/update', [App\Http\Controllers\Frontend\FrontendController::class, 'editProfile'])->name('editProfile');
Route::get('@{username}/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showPostDetails'])->name('showPostDetails');
Route::post('/update-profile-image', [App\Http\Controllers\Frontend\FrontendController::class, 'updateProfileImage'])->name('updateProfileImage');

Route::post('/create-checkout-session', [App\Http\Controllers\Frontend\SubscriptionController::class, 'createCheckoutSession'])->name('checkout.session');
Route::get('/checkout-success', [App\Http\Controllers\Frontend\SubscriptionController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout-cancel', [App\Http\Controllers\Frontend\SubscriptionController::class, 'checkoutCancel'])->name('checkout.cancel');

