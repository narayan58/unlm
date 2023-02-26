<?php
Route::group(['namespace' => 'App\Http\Controllers'], function (){
Route::get('/customer/login', 'customer\CustomerLoginController@loginView')->name('customer.login');
Route::get('/customer/register', 'customer\CustomerLoginController@registerView')->name('customer.register');
// Route::get('/customer/forget/password', 'customer\CustomerLoginController@customerForgetPassword')->name('customerForgetPassword');

Route::get('/customer/password/reset', 'customer\CustomerLoginController@forgotPassword')->name('customerForgetPassword');



Route::post('forgot-password', 'customer\CustomerLoginController@postforgotPassword')->name('post.forgotpassword');
Route::get('verify-code/{id}/{token}', 'customer\CustomerLoginController@vefifyCode')->name('verifytoken');
Route::post('verify/code', 'customer\CustomerLoginController@postVefifyCode')->name('post.verifytoken');
Route::get('password/{id}/{token}', 'customer\CustomerLoginController@finalChangePassword')->name('finalchangepassword');
Route::post('password/{id}/{token}', 'customer\CustomerLoginController@postUpdatePassword')->name('postupdatepassword');




Route::post('/customer/password/email', 'customer\CustomerLoginController@sendResetLinkEmail')->name('sendResetLinkEmail');
Route::get('/customer/password/reset/{token}', 'customer\CustomerLoginController@showResetForm');
Route::post('/customer/password/reset', 'customer\CustomerLoginController@reset')->name('customerPasswordRest');


Route::post('/customer/register', 'customer\CustomerLoginController@registerCustomer')->name('customer.register');
Route::post('/customer/login', 'customer\CustomerLoginController@login')->name('customerLogin');

Route::get('/customer/verify/code={token}', 'customer\CustomerLoginController@verifyLink')->name('customer.email.verify');
Route::post('/customer/verifyCode/', 'customer\CustomerLoginController@verifyCode');
Route::post('/customer/logout', 'customer\CustomerLoginController@logout')->name('customer.logout');





Route::get('/cart', 'customer\CustomerController@customerCart')->name('customer.cart');
Route::get('/customer/profile/{slug}', 'customer\CustomerController@profile')->name('customer.profile');
Route::get('/customer/favorites', 'customer\CustomerController@favorites')->name('customer.favorites');
Route::post('/customer/wish-product/remove', 'customer\CustomerController@wishListRemove')->name('wishListRemove');
Route::post('/customer/cart/remove', 'customer\CustomerController@cartRemove')->name('cartRemove');

Route::get('/cart/checkout', 'customer\CustomerController@cartCheckout')->name('cartCheckout');
Route::get('/buy/{slug}', 'customer\CustomerController@buyNow')->name('buyNow');


Route::post('/customer/wish/add', 'customer\CustomerController@wishAdd')->name('wishAdd');
Route::post('/customer/cart/add', 'customer\CustomerController@cartAdd')->name('cartAdd');

///new 
Route::get('/customer/dashboard', 'customer\CustomerController@dashboard')->name('customer.dashboard');
Route::post('/customer/password/change','customer\CustomerController@customerPasswordUpdate')->name('customerPasswordUpdate');

Route::post('/customer/update/profile','customer\CustomerController@customerProfileUpdate')->name('customerProfileUpdate');
});
