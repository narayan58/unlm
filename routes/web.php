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

Route::get('/c', function() {
    $exitCode = Artisan::call('cache:clear');
    Artisan::call('config:clear');
    $exitCode = Artisan::call('optimize');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    return "All cleared";
});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
Route::get('/','frontend\FrontendController@index' )->name('index');
Route::get('/about','frontend\FrontendController@ourAbout' )->name('about');
Route::get('/shop','frontend\FrontendController@shop' )->name('shop');
Route::get('/artist-collective','frontend\FrontendController@artistCollective' )->name('artistCollective');
Route::get('/calli','frontend\FrontendController@calli' )->name('calli');
Route::get('/category/{catSlug}', 'frontend\FrontendController@productCategory')->name('productCategory');
Route::get('/category/{catSlug}/{subCatSlug}', 'frontend\FrontendController@productSubCategory')->name('productSubCategory');
Route::get('/add-to-cart/{id}','frontend\FrontendController@addToCart' )->name('addToCart');
Route::get('/product/{slug}', 'frontend\FrontendController@singleProduct')->name('singleProduct');
Route::get('/carts', 'frontend\FrontendController@cartList')->name('cartList');
Route::post('update-cart', 'frontend\FrontendController@cartUpdate');
Route::post('remove-from-cart', 'frontend\FrontendController@cartRemove');
Route::get('/checkout', 'frontend\FrontendController@checkout')->name('checkout');
Route::post('/checkout', 'frontend\FrontendController@finalOrder')->name('checkoutPost');
Route::get('/checkout/order-confirm/{orderCode}', 'frontend\FrontendController@confirmOrder')->name('confirmOrder');
Route::get('/blog', 'frontend\FrontendController@blog')->name('blog');
Route::get('/blog/{slug}', 'frontend\FrontendController@singleBlog')->name('singleBlog');

//Route::get('/about','frontend\FrontendController@about' )->name('about');
Route::get('/contact','frontend\FrontendController@contact' )->name('contact');
Route::get('/order','frontend\FrontendController@order' )->name('order');
Route::get('/profile','frontend\FrontendController@profile' )->name('profile');
Route::get('/dashboard','frontend\FrontendController@dashboard' )->name('dashboard');
Route::get('/page/{slug}','frontend\FrontendController@singlePage' )->name('singlePage');
//Old Code////////////////////////////////////////////////////
Route::get('/privacy-policy', 'frontend\FrontendController@privacyPolicy')->name('privacy.policy');
Route::get('/term', 'frontend\FrontendController@term')->name('term');
Route::get('/products','frontend\FrontendController@product')->name('product');
Route::get('/category/{slug}','frontend\FrontendController@categoryResult')->name('category.result');
Route::get('/product','frontend\FrontendController@productSearch')->name('product.search');
Route::get('/slider/{slug}', 'frontend\FrontendController@singleSlider')->name('singleSlider');
Route::get('/checkout/{slug}', 'frontend\FrontendController@productCheckout')->name('productCheckout');
Route::post('/productEnroll', 'frontend\FrontendController@productEnroll')->name('productEnroll');
Route::post('/productReview', 'frontend\FrontendController@productReview')->name('productReview');
Route::post('/news-letter/store', 'frontend\FrontendController@newsLetterStore')->name('newsLetter');


//Route::get('/about','frontend\FrontendController@about' )->name('about');
Route::post('/sentMail', 'frontend\FrontendController@sentMail')->name('sentMail');
Route::post('/quote-request', 'frontend\FrontendController@quoteRequest')->name('quoteRequest');
Route::get('/faq', 'frontend\FrontendController@faq')->name('faq');
Route::get('/video', 'frontend\FrontendController@video')->name('video');
Route::get('/gallery', 'frontend\FrontendController@gallery')->name('gallery');
Route::get('/gallery/{slug}', 'frontend\FrontendController@viewGallery')->name('viewGallery');
Route::get('/team', 'frontend\FrontendController@team')->name('team');
Route::get('/get-quote', 'frontend\FrontendController@getQuote')->name('getQuote');
Route::get('/list/offer', 'frontend\FrontendController@offerList')->name('offerList');
Route::get('/list/service', 'frontend\FrontendController@serviceList')->name('serviceList');
Route::post('/blue-book/store', 'frontend\FrontendController@blueBookStore')->name('blueBookStore');

Route::get('/service/{slug}', 'frontend\FrontendController@singleService')->name('singleService');
});


// Admin Web Route
Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers\admin'], function (){
    Route::get('login', 'AdminLoginController@login')->name('login.page');
    Route::get('newsletter/{id}', 'AdminNewsletterController@show')->name('newsletterdetail');
    Route::post('login', 'AdminLoginController@loginCheck')->name('logincheck');
});

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\admin', 'middleware'   => ['adminlogincheck','roles']], function (){
    Route::get('registeruser', 'AdminLoginController@userRegister')->name('user.create');
    Route::post('registeruser', 'AdminLoginController@userRegisterData')->name('userregister');
    Route::get('dashboard', 'AdminDashboardController@dashboard')->name('dashboard');
    Route::get('user/list', 'AdminLoginController@adminUserList')->name('user.list');
    Route::get('user/{id}/edit', 'AdminLoginController@editUser')->name('user.edit');
    Route::any('updateuser/{id}', 'AdminLoginController@updateuser')->name('user.update');
    Route::get('user/delete/{id}', ['as' => 'user.delete', 'uses' => 'AdminLoginController@deleteUser']);   
    Route::any('logout', 'AdminLoginController@logout')->name('logout');

    Route::any('updateuserprofile/{id}', 'AdminProfileController@updateuser')->name('userprofile.update');
    Route::get('userprofile/{id}/edituserprofile', 'AdminProfileController@editUserProfile')->name('userprofile.editprofile');

    Route::get('success-login', 'AdminSiteSettingController@successLogin')->name('successlogin');
    Route::get('fail-login', 'AdminSiteSettingController@failLogin')->name('faillogin');
    Route::get('menu', 'AdminMenuController@index')->name('menu');

    // User Group
    Route::resource('usergroup', 'AdminGroupController');
    Route::get('usergroup/delete/{id}', ['as' => 'usergroup.delete', 'uses' => 'AdminGroupController@destroy']);
    // Role Access
    Route::resource('role-access', 'AdminRoleAccessController');
    Route::get('role-access/delete/{id}', ['as' => 'role-access.delete', 'uses' => 'AdminRoleAccessController@destroy']);
    Route::get('roleChangeAccess/{allowId}/{id}','AdminRoleAccessController@changeAccess');
    Route::get('setting','AdminSiteSettingController@setting')->name('setting');
    Route::post('setting-update','AdminSiteSettingController@updateSetting')->name('update.setting');

    // Pages
    Route::resource('pages', 'AdminPagesController');
    Route::get('pages/delete/{id}', ['as' => 'pages.delete', 'uses' => 'AdminPagesController@destroy']);

    // category
    Route::resource('category', 'AdminCategoryController');
    Route::get('category/delete/{id}', ['as' => 'category.delete', 'uses' => 'AdminCategoryController@destroy']);

    // posts
    Route::resource('posts', 'AdminPostsController');
    Route::get('posts/delete/{id}', ['as' => 'posts.delete', 'uses' => 'AdminPostsController@destroy']);

    // FAQ
    Route::resource('faq', 'AdminFaqController');
    Route::get('faq/delete/{id}', ['as' => 'faq.delete', 'uses' => 'AdminFaqController@destroy']);



    // slider
    Route::resource('slider', 'AdminSliderController');
    Route::get('slider/delete/{id}', ['as' => 'slider.delete', 'uses' => 'AdminSliderController@destroy']);

    // others
    Route::get('medialibrary', 'AdminDashboardController@mediaLibrary')->name('medialibrary');
    Route::any('ajax/drag-drop-sorting', 'AdminAjaxController@postDragDropSorting')->name('ajax.sorting');
    Route::any('module-url','AdminAjaxController@moduleUrl')->name('moduleUrl');


    // newsletter
    Route::get('newsletter/email-list', ['as' => 'newsletter.emaillist', 'uses' => 'AdminNewsletterController@emailList']);
    Route::resource('newsletter', 'AdminNewsletterController');
    Route::get('newsletter/resendmail/{id}', ['as' => 'newsletter.resendmail', 'uses' => 'AdminNewsletterController@resendMail']);

    // Contact
    Route::resource('contact', 'AdminContactController');
    Route::get('contact/delete/{id}', ['as' => 'contact.delete', 'uses' => 'AdminContactController@destroy']);

    // product category
    Route::resource('product-category', 'ProductCategoryController');
    Route::get('product-category/delete/{id}', ['as' => 'product-category.delete', 'uses' => 'ProductCategoryController@destroy']);

    // product sub category
    Route::resource('product-sub-category', 'ProductSubCategoryController');
    Route::get('product-sub-category/delete/{id}', ['as' => 'product-sub-category.delete', 'uses' => 'ProductSubCategoryController@destroy']);

    // insurance type
    Route::resource('product', 'ProductController');
    Route::get('product/product-category/{id}', 'ProductController@getSubcategory')->name('getSubcategory');

    Route::get('product/list/checkout', 'ProductController@ListCheckout')->name('checkout.list');

    Route::get('product/list/cart', 'ProductController@ListCart')->name('cart.list');

    Route::get('product/delete/{id}', ['as' => 'product.delete', 'uses' => 'ProductController@destroy']);

    Route::get('product/enroll/{slug}','ProductController@enroll')->name('productEnrollList');
    Route::get('product/track/{slug}','ProductController@track')->name('productTrackList');
    Route::get('product/review/{slug}','ProductController@productReview')->name('productReviewList');
    Route::get('product/approve/review/{id}','ProductController@approveReview')->name('approveReview');


    Route::get('product/cart/{slug}','ProductController@productCart')->name('productCartList');
    Route::get('product/wish/{slug}','ProductController@productWish')->name('productWishList');
    Route::get('product/checkout/{slug}','ProductController@productCheckOut')->name('productCheckOutList');

    Route::get('customer','CustomerController@index')->name('customer.index');
    Route::get('customer/delete/{id}','CustomerController@customerDelete')->name('customer.delete');

    Route::get('order','OrderController@index')->name('order.index');
    Route::get('order/delete/{id}','OrderController@orderDelete')->name('order.delete');
    Route::get('order/payment/update/{id}','OrderController@paymentUpdate')->name('paymentUpdate');
    Route::get('order/status/update/{id}','OrderController@orderUpdate')->name('orderUpdate');

});
