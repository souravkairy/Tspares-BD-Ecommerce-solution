<?php
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

//admin section Auth-------------
/////////////////////////////////----------------------------------
Route::get('admin/home', 'App\Http\Controllers\AdminController@index');
Route::get('admin', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'App\Http\Controllers\Admin\LoginController@login');
Route::get('admin/logout', 'App\Http\Controllers\AdminController@logout')->name('admin.logout');

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
//Admin category route
Route::get('/admin-product-color', [App\Http\Controllers\backEnd\Admin\ProductColorController::class, 'index']);
Route::post('/save_product_color', [App\Http\Controllers\backEnd\Admin\ProductColorController::class, 'save_p_color']);
Route::get('/edit-producy-color/{id}', [App\Http\Controllers\backEnd\Admin\ProductColorController::class, 'edit_p_color']);
Route::post('/update_product_color', [App\Http\Controllers\backEnd\Admin\ProductColorController::class, 'update_p_color']);
Route::get('/delete-product_color/{id}', [App\Http\Controllers\backEnd\Admin\ProductColorController::class, 'delete_p_color']);

//Admin Products routes
Route::get('/admin-products', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'index']);
Route::get('/admin-add-product', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'AddProduct']);
Route::post('/save_project', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'save_project']);
Route::get('/view-product/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'view_product']);
Route::get('/edit-product/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'edit_product']);
Route::post('/update-product', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'update_product']);
Route::post('/save_p_image', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'save_p_image']);
Route::get('/delete-p-image/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'delete_p_image']);
Route::get('/delete-product/{id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'delete_product']);
// Flash Sell route
Route::get('/admin-flash-sell-product', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'flash_sell']);

//Admin Coupons routes
Route::get('/admin-coupons', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'index']);
Route::post('/save_coupon', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'save_coupon']);
Route::get('/view-coupon/{id}', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'view_coupon']);
Route::get('/edit-coupon/{id}', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'edit_coupon']);
Route::post('/update_coupon', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'update_coupon']);
Route::get('/delete-coupon/{id}', [App\Http\Controllers\backEnd\Admin\CouponController::class, 'delete_coupon']);

// Admin Order route
Route::get('/pending-orders', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'pending_orders']);
Route::get('/accepted-orders', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'accepted_orders']);
Route::get('/processing-orders', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'processing_orders']);
// Route::get('/on-shipping-orders', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'on_shipping_orders']);
Route::get('/delivered-orders', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'delivered_orders']);
Route::get('/view-order/{id}', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'view_order']);
Route::get('/pending_to_accept/{id}', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'pending_to_accept']);
Route::get('/accept_to_processing/{id}', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'accept_to_processing']);
Route::get('/processing_to_done/{id}', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'processing_to_done']);
Route::get('/accept-order', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'accept_order']);
Route::get('/decline-orders-list', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'decline_order_list']);
Route::get('/decline-order/{id}', [App\Http\Controllers\backEnd\Admin\OrdersController::class, 'decline_order']);

// User list

Route::get('/customers', [App\Http\Controllers\backEnd\Admin\CustomerController::class, 'customers']);
Route::get('/view-customer/{id}', [App\Http\Controllers\backEnd\Admin\CustomerController::class, 'view_customer']);
Route::get('/delete-customer/{id}', [App\Http\Controllers\backEnd\Admin\CustomerController::class, 'delete_customer']);

// Subcategory by ajax
Route::get('/get/subcategory/{p_category_id}', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'subcategory']);

//Admin Review routes
Route::get('/admin-customer-review', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'Review']);
Route::get('/review-active/{id}', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'ActiveReview']);
Route::get('/review-Deactive/{id}', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'DeactiveReview']);
Route::get('/review-delete/{id}', [App\Http\Controllers\backEnd\Admin\ReviewController::class, 'DeleteReview']);

//section setting
Route::get('/site-setting', [App\Http\Controllers\backEnd\Admin\SiteSettingController::class, 'index']);
Route::post('/update-setting', [App\Http\Controllers\backEnd\Admin\SiteSettingController::class, 'update_setting']);
Route::get('/section-setting', [App\Http\Controllers\backEnd\Admin\SiteSettingController::class, 'section_setting']);
Route::post('/update-section-setting', [App\Http\Controllers\backEnd\Admin\SiteSettingController::class, 'update_section_setting']);

// User list

Route::get('/pages', [App\Http\Controllers\backEnd\Admin\PageController::class, 'pages']);
Route::post('/save_pages', [App\Http\Controllers\backEnd\Admin\PageController::class, 'save_pages']);
Route::get('/edit-page/{id}', [App\Http\Controllers\backEnd\Admin\PageController::class, 'edit_pages']);
Route::post('/update-page-data', [App\Http\Controllers\backEnd\Admin\PageController::class, 'update_page_data']);
Route::get('/delete-page/{id}', [App\Http\Controllers\backEnd\Admin\PageController::class, 'delete_page']);

//end admin section Auth-------------
/////////////////////////////////----------------------------------

//front end section Auth-------------
/////////////////////////////////----------------------------------

Route::get('/', [App\Http\Controllers\frontEnd\FrontendController::class, 'index']);

Route::get('/cart', [App\Http\Controllers\frontEnd\FrontendController::class, 'Cart']);

Route::get('/wishlist', [App\Http\Controllers\frontEnd\FrontendController::class, 'Wishlist']);
Route::get('/order-tracking', [App\Http\Controllers\frontEnd\FrontendController::class, 'OrderTrack']);

Route::get('/login-panel', [App\Http\Controllers\backEnd\User\CredintialController::class, 'Login']);
Route::get('/registration', [App\Http\Controllers\backEnd\User\CredintialController::class, 'Registration']);

Route::get('/profile', [App\Http\Controllers\backEnd\User\ProfileController::class, 'Profile']);


Route::get('/products', [App\Http\Controllers\frontEnd\FrontendController::class, 'Products']);
Route::get('/product/details/{id}', [App\Http\Controllers\frontEnd\FrontendController::class, 'ProductDetails'])->name('product.view');
Route::post('cart/product/add/{id}', [App\Http\Controllers\frontEnd\FrontendController::class, 'AddCart']);
Route::get('/cart/product', [App\Http\Controllers\frontEnd\FrontendController::class, 'ShowCart'])->name('all.cart.product');

Route::delete('/cart/product/delete/{rowId}', [App\Http\Controllers\frontEnd\FrontendController::class, 'removeCart'])->name('cart.product.delete');
Route::put('update/cart/item', [App\Http\Controllers\frontEnd\FrontendController::class, 'UpdateCart'])->name('update.cartitem');
Route::post('user/apply/coupon', [App\Http\Controllers\frontEnd\FrontendController::class, 'Coupon'])->name('apply.coupon');
Route::get('coupon/remove', [App\Http\Controllers\frontEnd\FrontendController::class, 'CouponRemove'])->name('coupon.remove');
Route::get('shipping', [App\Http\Controllers\frontEnd\CheckoutController::class, 'shipping'])->name('shipping');
Route::post('checkout', [App\Http\Controllers\frontEnd\CheckoutController::class, 'Checkout'])->name('checkout');
Route::post('/payment/process', [App\Http\Controllers\frontEnd\CheckoutController::class, 'Payment']);


Route::get('/page/{id}/{name}', [App\Http\Controllers\frontEnd\FrontendController::class, 'viewPage']);


Route::get('/products_by_sub/{id}/{sub_cat_name}', [App\Http\Controllers\frontEnd\FrontendController::class, 'Products_by_sub']);
Route::get('/products_by_cat/{id}/{name}', [App\Http\Controllers\frontEnd\FrontendController::class, 'Products_by_cat']);

Route::get('/order-details', [App\Http\Controllers\backEnd\User\ProfileController::class, 'OrderDetails']);
Route::get('/order-product-details/{id}', [App\Http\Controllers\backEnd\User\ProfileController::class, 'OrderProductDetails']);
Route::get('/product-review/{id}', [App\Http\Controllers\backEnd\User\ProfileController::class, 'ProductReview']);
Route::post('/store-review', [App\Http\Controllers\backEnd\User\ProfileController::class, 'StoreReview']);
Route::get('/user-address', [App\Http\Controllers\backEnd\User\ProfileController::class, 'Address']);
Route::get('/setting', [App\Http\Controllers\backEnd\User\ProfileController::class, 'Setting']);
Route::get('/edit-user-info/{id}', [App\Http\Controllers\backEnd\User\ProfileController::class, 'EditInfo']);
Route::post('/password/update', [App\Http\Controllers\backEnd\User\ProfileController::class, 'updatePassword'])->name('password.updated');

// Route::post('/password/update', 'App\Http\Controllers\HomeController@updatePassword')->name('password.updated');//////////////

Route::get('/contact-message', [App\Http\Controllers\backEnd\User\ProfileController::class, 'ContactMessage']);
Route::post('/message-send', [App\Http\Controllers\backEnd\User\ProfileController::class, 'StoreMessage']);
Route::post('/user-info-change/{id}', [App\Http\Controllers\backEnd\User\ProfileController::class, 'ChangeInfo']);
Route::post('/store-address/{id}', [App\Http\Controllers\backEnd\User\ProfileController::class, 'StoreAddress']);
Route::get('/delete-address/{id}', [App\Http\Controllers\backEnd\User\ProfileController::class, 'DeleteAddress']);

// SocialController
Route::get('/auth/redirect/{provider}', [App\Http\Controllers\SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [App\Http\Controllers\SocialController::class, 'callback']);



// wishlist
Route::get('add/wishlist/{id}', [App\Http\Controllers\frontEnd\WishlistController::class, 'add_wishlist']);
Route::get('delete/wishlist/{id}', [App\Http\Controllers\frontEnd\WishlistController::class, 'DeleteWishlist']);

Route::post('product/search', [App\Http\Controllers\frontEnd\WishlistController::class, 'Search'])->name('search');






//Admin User Role Route........
Route::get('all-sub-admin', [App\Http\Controllers\backEnd\Admin\UserRoleController::class, 'AllAdmin']);
Route::get('add-sub-admin', [App\Http\Controllers\backEnd\Admin\UserRoleController::class, 'AddAdmin']);
Route::post('store-admin', [App\Http\Controllers\backEnd\Admin\UserRoleController::class, 'StoreAdmin']);
Route::get('delete-admin/{id}', [App\Http\Controllers\backEnd\Admin\UserRoleController::class, 'DeleteAdmin']);



Route::get('/test', function () {
    return view('backend/admin/product/test');
});
Route::post('/dynamic-field/insert', [App\Http\Controllers\backEnd\Admin\ProductController::class, 'save_test'])->name('dynamic-field.insert');
// Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');

