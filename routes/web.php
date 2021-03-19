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

use App\Http\Controllers\ShopController;

Route::get('/','ShopController@ShowProduct');

//商品一覧
Route::post('/product','ShopController@ShowCart');

//カートに商品追加
Route::post('/mycart','ShopController@AddCart')->middleware('auth');

//ログアウト
Route::get('/logout', 'HomeController@logout');

//ログイン者のカートを表示
Route::get('/display','ShopController@CartDisplay')->middleware('auth');

//カートから削除
Route::get('/mycart','ShopController@deleteCart');

//購入
Route::post('/purchase','ShopController@Purchase');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
