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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dsa', function () {
    return view('welcome');
});

//微信
Route::get('weixin/xiaoxi', 'WeixinController@xiaoxi');
Route::post('weixin/xiaoxi', 'WeixinController@xiaoxi');