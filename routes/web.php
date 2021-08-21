<?php
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

//admin section Auth-------------
/////////////////////////////////----------------------------------
Route::get('admin/home', 'App\Http\Controllers\AdminController@index');
Route::get('admin', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'App\Http\Controllers\Admin\LoginController@login');
Route::get('admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');




//Admin brands route
Route::get('/admin-brand', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'index']);
Route::post('/save_brand', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'save_brand']);
Route::get('/edit-brand/{id}', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'edit_brand']);
Route::post('/update_brand', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'update_brand']);
Route::get('/delete-brand/{id}', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'delete_brand']);

//Admin category route
Route::get('/admin-category', [App\Http\Controllers\backEnd\Admin\CategoryController::class, 'index']);
Route::post('/save_category', [App\Http\Controllers\backEnd\Admin\CategoryController::class, 'save_category']);
Route::get('/edit-category/{id}', [App\Http\Controllers\backEnd\Admin\CategoryController::class, 'edit_category']);
Route::post('/update_category', [App\Http\Controllers\backEnd\Admin\CategoryController::class, 'update_category']);
Route::get('/delete-category/{id}', [App\Http\Controllers\backEnd\Admin\CategoryController::class, 'delete_category']);


 //Admin Products routes
Route::get('/admin-products', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'index']);
Route::get('/admin-add-product', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'AddProduct']);

//Admin Tags routes
Route::get('/admin-tags', [App\Http\Controllers\backEnd\Admin\BrandController::class, 'Tag']);

//Admin Review routes
Route::get('/admin-customer-review', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'Review']);


//end admin section Auth-------------
/////////////////////////////////----------------------------------
