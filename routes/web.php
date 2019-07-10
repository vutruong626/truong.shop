<?php
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/')->group(function () {
    Route::get('/','Frontend\\PagesController@index')->name('index');
    // shop
    Route::get('/shop','Frontend\\PagesController@getShop')->name('shop');
    Route::get('/detail-shop/{slug}','Frontend\\PagesController@getDetailShop')->name('detail_shop');
    Route::get('/detail-cart','Frontend\\PagesController@getDetailCart')->name('detail_cart');
    Route::get('/gio-hang-update','Frontend\\PagesController@postSessionCart')->name('update_giohang');
    Route::get('/thanh-toan','Frontend\\PagesController@getClientInfo')->name('client_info');
    Route::post('/thanh-toan','Frontend\\PagesController@postClientInfo')->name('client_info');
    Route::get('/thanh-toan-thanh-cong','Frontend\\PagesController@getSuccess')->name('success');
    // Về chung tôi
    Route::get('/about','Frontend\\PagesController@getAboutUs')->name('about_us');
    // Tin tức
    Route::get('/tin-tuc','Frontend\\PagesController@getNews')->name('news');
    Route::get('/chi-tiet-tin-tuc/{slug}','Frontend\\PagesController@getDetallNews')->name('detail_news');
    // Liên HỆ
    Route::get('/lien-he','Frontend\\PagesController@getContact')->name('contact');


});
Route::prefix('/cart')->group( function () {
    Route::get('/{act}/{idsp}/{qty?}','Frontend\\PagesController@handleCart')->name('cart');
  });
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
