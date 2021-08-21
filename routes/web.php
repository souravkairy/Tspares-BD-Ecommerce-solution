<?php
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

//admin section Auth-------------
Route::get('admin/home', 'App\Http\Controllers\AdminController@index');
Route::get('admin', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'App\Http\Controllers\Admin\LoginController@login');
Route::get('admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');




//Admin brands route
Route::get('/admin-brand', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'index']);

 //Admin Products routes
Route::get('/admin-products', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'index']);
Route::get('/admin-add-product', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'AddProduct']);

//Admin Tags routes
Route::get('/admin-tags', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'Tag']);

//Admin Review routes
Route::get('/admin-customer-review', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'Review']);
