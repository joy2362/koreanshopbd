<?php

//frontend
//home
Route::get('/', 'FrontendCrontroller@index')->name('index');
Route::get('/pdf', 'FrontendCrontroller@pdf');

//feedback
Route::get('contact', 'FrontendCrontroller@contact');
Route::post('add/feedback', 'FrontendCrontroller@addFeedback');

//user account
Route::get('profile', 'ProfileController@profile');

//return order
Route::get('return/list/','HomeController@SuccessList')->name('success.orderlist');
Route::get('request/return/{id}','HomeController@RequestReturn');

//product list
Route::get('all/product', 'ProductListController@index');
Route::get('product/category/{id}', 'ProductListController@categoryFilter');
Route::get('product/brand/{id}', 'ProductListController@brandFilter');
Route::get('product/skintype/{id}', 'ProductListController@skintypeFilter');
Route::get('product/skinconcerns/{id}', 'ProductListController@skinconcernsFilter');

//newsletter
Route::post('/store/newsletter', 'FrontendCrontroller@storenewsletter')->name('store.newsletter');

//cart & wishlist
Route::get('add/wishlist/{id}', 'CartController@addwishlist');
Route::get('add/cart/{id}', 'CartController@addcart');
Route::get('cart', 'CartController@showCart');
Route::get('checkout', 'CartController@showCheckout');

Route::get('coupon/remove', 'CartController@CouponRemove');
Route::post('update/cart', 'CartController@updateCart');
Route::post('remove/cart/item', 'CartController@removeItem');
Route::post('coupon/apply', 'CartController@applyCouppon');

Route::post('add/to/cart', 'CartController@insertcart');
Route::get('remove/wishlist/{id}', 'FrontendCrontroller@removewishlist');
Route::get('wishlist', 'FrontendCrontroller@showWishlist');
Route::get('shipingcost/{value}', 'CartController@changeshipingcost');

//order
Route::post('new/order', 'OrderController@add')->name('order.add');
Route::get('cancel/order/{id}', 'OrderController@cancel')->name('order.cancel');
Route::get('return/order/{id}', 'OrderController@return')->name('order.cancel');
Route::get('order/{id}', 'OrderController@singleOrder');

// tracking
Route::post('order/tracking', 'FrontendCrontroller@OrderTracking')->name('order.tracking');
Route::get('order/tracking', 'FrontendCrontroller@OrderTrack');

//compare
Route::get('add/compare/{id}', 'compareController@store');
Route::get('compare', 'compareController@show');

//blog
Route::get('/blog', 'BlogController@allBlog');
Route::get('/blog-details/{id}', 'BlogController@singleBlog');

//product
Route::get('product-details/{id}', 'FrontendCrontroller@product_details');

//comment section
//product
Route::post('product/comment/add', 'CommentController@productComment');
//post
Route::post('post/comment/add', 'CommentController@postComment')->name('post.comment.add');

//login with facebook and google
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

//auth & user
Auth::routes();
Route::get('/setting', 'ProfileController@changePassword')->name('profile.setting');
Route::post('/password-update', 'ProfileController@updatePassword')->name('password.update');
Route::post('/avatar-update', 'ProfileController@updateavatar')->name('avatar.update');
Route::get('/user/logout', 'ProfileController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//admin action
//category
Route::get('admin/category', 'Admin\category\CategoryController@category')->name('categories');
Route::get('admin/category/delete/{id}', 'Admin\category\CategoryController@deletecategory');
Route::get('admin/category/edit/{id}', 'Admin\category\CategoryController@editcategory');
Route::post('admin/store/category', 'Admin\category\CategoryController@storecategory')->name('store.category');
Route::post('admin/update/category', 'Admin\category\CategoryController@updatecategory')->name('update.category');

//skin type
Route::get('admin/skintype', 'Admin\skintype\SkinTypeController@skintype')->name('skintype');
Route::get('admin/skintype/delete/{id}', 'Admin\skintype\SkinTypeController@deleteskintype');
Route::get('admin/skintype/edit/{id}', 'Admin\skintype\SkinTypeController@editskintype');
Route::post('admin/store/skintype', 'Admin\skintype\SkinTypeController@storecskintype')->name('store.skintype');
Route::post('admin/update/skintype', 'Admin\skintype\SkinTypeController@updateskintype')->name('update.skintype');

//skin concern
Route::get('admin/skinconcern', 'Admin\skinconcern\SkinConcernController@skinconcern')->name('skinconcern');
Route::get('admin/skinconcern/delete/{id}', 'Admin\skinconcern\SkinConcernController@deleteskinconcern');
Route::get('admin/skinconcern/edit/{id}', 'Admin\skinconcern\SkinConcernController@editskinconcern');
Route::post('admin/store/skinconcern', 'Admin\skinconcern\SkinConcernController@storecskinconcern')->name('store.skinconcern');
Route::post('admin/update/skinconcern', 'Admin\skinconcern\SkinConcernController@updateskinconcern')->name('update.skinconcern');

//brand
Route::get('admin/brand', 'Admin\brand\BrandController@brand')->name('brands');
Route::get('admin/brand/delete/{id}', 'Admin\brand\BrandController@deletebrand');
Route::get('admin/brand/edit/{id}', 'Admin\brand\BrandController@editbrand');
Route::post('admin/store/brand', 'Admin\brand\BrandController@storebrand')->name('store.brand');
Route::post('admin/update/brand', 'Admin\brand\BrandController@updatebrand')->name('update.brand');

//coupon
Route::get('admin/coupon', 'Admin\coupon\CouponController@coupons')->name('coupons');
Route::get('admin/coupon/delete/{id}', 'Admin\coupon\CouponController@deletecoupon');
Route::get('admin/coupon/edit/{id}', 'Admin\coupon\CouponController@editcoupon');
Route::post('admin/store/coupon', 'Admin\coupon\CouponController@storecoupon')->name('store.coupon');
Route::post('admin/update/coupon', 'Admin\coupon\CouponController@updatecoupon')->name('update.coupon');

//newsletter
Route::get('admin/newsletter', 'Admin\newsletter\NewsletterController@shownewsletter')->name('admin.newsletter');
Route::get('admin/sub/delete/{id}', 'Admin\newsletter\NewsletterController@deletesub');

//products
Route::get('admin/product/add', 'Admin\product\ProductController@create')->name('add.product');
Route::get('admin/product', 'Admin\product\ProductController@index')->name('view.product');
Route::post('admin/product/store', 'Admin\product\ProductController@save')->name('store.product');
Route::get('admin/product/active/{id}', 'Admin\product\ProductController@activeProduct');
Route::get('admin/product/deactivate/{id}', 'Admin\product\ProductController@deactivateProduct');
Route::get('admin/product/delete/{id}', 'Admin\product\ProductController@destroy');
Route::get('admin/product/view/{id}', 'Admin\product\ProductController@viewProduct');
Route::get('admin/product/edit/{id}', 'Admin\product\ProductController@editProduct');
Route::post('admin/product/update', 'Admin\product\ProductController@updateProduct')->name('update.product');
Route::post('admin/product/update/image', 'Admin\product\ProductController@updateProductimg')->name('productImage.change');

//blog (use postcontroller for both post category and blog post)
//post category
Route::get('admin/post/category', 'Admin\post\PostController@category')->name('post.category');
Route::get('admin/post/category/delete/{id}', 'Admin\post\PostController@deletecategory');
Route::get('admin/post/category/edit/{id}', 'Admin\post\PostController@editcategory');
Route::post('admin/post/store/category', 'Admin\post\PostController@storecategory')->name('store.post.category');
Route::post('admin/post/update/category', 'Admin\post\PostController@updatecategory')->name('update.post.category');

//post
Route::get('admin/post/add', 'Admin\post\PostController@create')->name('add.post');
Route::get('admin/post/allpost', 'Admin\post\PostController@index')->name('view.post');
Route::post('admin/post/store', 'Admin\post\PostController@save')->name('store.post');
Route::get('admin/post/delete/{id}', 'Admin\post\PostController@destroy');
Route::get('admin/post/view/{id}', 'Admin\post\PostController@viewPost');
Route::get('admin/post/edit/{id}', 'Admin\post\PostController@editPost');
Route::post('admin/post/update', 'Admin\post\PostController@updatePost')->name('update.post');
Route::get('admin/post/active/{id}', 'Admin\post\PostController@activeBlog');
Route::get('admin/post/deactivate/{id}', 'Admin\post\PostController@deactivateBlog');

//site info

//main slider
Route::get('admin/siteinfo/mainslider', 'Admin\Slider\MainSliderController@mainslider')->name('mainslider');
Route::get('admin/siteinfo/mainslider/delete/{id}', 'Admin\Slider\MainSliderController@deletemainslider');
Route::get('admin/siteinfo/mainslider/edit/{id}', 'Admin\Slider\MainSliderController@editmainslider');
Route::post('admin/siteinfo/store/mainslider', 'Admin\Slider\MainSliderController@storemainslider')->name('store.mainslider');
Route::post('admin/siteinfo/update/mainslider', 'Admin\Slider\MainSliderController@updatemainslider')->name('update.mainslider');

//site details
Route::get('admin/siteinfo/sitedetails', 'Admin\sitedetails\SitedetailsController@siteinfo')->name('siteSetting');
Route::post('admin/siteinfo/sitedetails', 'Admin\sitedetails\SitedetailsController@editsiteinfo')->name('editsiteSetting');

//database backup
Route::get('admin/database/backup', 'Admin\sitedetails\SitedetailsController@DatabaseBackup')->name('database.backup');
Route::get('admin/database/backup/now', 'Admin\sitedetails\SitedetailsController@BackupNow')->name('admin.backup.now');
Route::get('delete/database/{getFilename}', 'Admin\sitedetails\SitedetailsController@DeleteDatabase');
Route::get('download/database/{getFilename}', 'Admin\sitedetails\SitedetailsController@DownloadDatabase');
//order
Route::get('admin/order/all', 'Admin\order\OrderController@index')->name('all-order');
Route::get('admin/order/today', 'Admin\order\OrderController@todayOrder')->name('today-order');
Route::get('admin/order/month', 'Admin\order\OrderController@monthOrder')->name('month-order');
Route::get('admin/order/return', 'Admin\order\OrderController@return')->name('return-order');
Route::get('admin/order/cancel', 'Admin\order\OrderController@cancel')->name('cancel-order');
Route::post('admin/order/status', 'Admin\order\OrderController@multiOperation');
Route::get('admin/order/view/{id}', 'Admin\order\OrderController@show');

Route::get('admin/order/progress/{id}', 'Admin\order\OrderController@orderProgress');
Route::get('admin/order/delivered/{id}', 'Admin\order\OrderController@Delevered');
Route::get('admin/order/generate/pdf', 'Admin\order\OrderController@generatePdf')->name('generate-pdf');

//return order
Route::get('admin/order/return/accept', 'Admin\order\OrderController@returnAccept')->name('accept-return');
Route::get('admin/order/return/confirm/{id}', 'Admin\order\OrderController@returnConfirm');


// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
