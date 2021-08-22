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

//Admin sub-category route
Route::get('/admin-sub-category', [App\Http\Controllers\backEnd\Admin\SubCategoryController::class, 'index']);
Route::post('/save_sub_category', [App\Http\Controllers\backEnd\Admin\SubCategoryController::class, 'save_sub_category']);
Route::get('/edit-sub-category/{id}', [App\Http\Controllers\backEnd\Admin\SubCategoryController::class, 'edit_sub_category']);
Route::post('/update_sub_category', [App\Http\Controllers\backEnd\Admin\SubCategoryController::class, 'update_sub_category']);
Route::get('/delete-sub-category/{id}', [App\Http\Controllers\backEnd\Admin\SubCategoryController::class, 'delete_sub_category']);


 //Admin Products routes
Route::get('/admin-products', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'index']);
Route::get('/admin-add-product', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'AddProduct']);
Route::post('/save_project', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'save_project']);
Route::get('/view-product/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'view_product']);
Route::get('/edit-product/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'edit_product']);
Route::get('/delete-product/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'delete_product']);



 //Admin Coupons routes
 Route::get('/admin-coupons', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'index']);
 Route::post('/save_coupon', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'save_coupon']);
 Route::get('/view-coupon/{id}', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'view_coupon']);
 Route::get('/edit-coupon/{id}', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'edit_coupon']);
Route::post('/update_coupon', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'update_coupon']);
 Route::get('/delete-coupon/{id}', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'delete_coupon']);

// Subcategory by ajax
Route::get('/get/subcategory/{p_category_id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'subcategory']);




//Admin Review routes
Route::get('/admin-customer-review', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'Review']);


//end admin section Auth-------------
/////////////////////////////////----------------------------------

























































//front end section Auth-------------
/////////////////////////////////----------------------------------

Route::get('/', [App\Http\Controllers\frontEnd\FrontendController::class, 'index']);
Route::get('/cart', [App\Http\Controllers\frontEnd\FrontendController::class, 'Cart']);
Route::get('/wishlist', [App\Http\Controllers\frontEnd\FrontendController::class, 'Wishlist']);
Route::get('/order-tracking', [App\Http\Controllers\frontEnd\FrontendController::class, 'OrderTrack']);
Route::get('/products', [App\Http\Controllers\frontEnd\FrontendController::class, 'Products']);
Route::get('/product-details', [App\Http\Controllers\frontEnd\FrontendController::class, 'ProductDetails']);