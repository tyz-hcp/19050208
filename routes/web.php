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

Route::get('/info',function(){
	phpinfo();
});
Route::get('/test/hello','Test\TestController@hello');
Route::get('/test/adduser','User\LoginController@adduser');


//微信开发


Route::get('/wx','WeiXin\WxController@wechat');
Route::post('/wx','WeiXin\WxController@receiv');        //接送微信的推送事件