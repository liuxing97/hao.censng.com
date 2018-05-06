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
Route::get('/homepage', function () {
    $homepage = new \App\Http\Controllers\Homepage();
//    http://api.shenjian.io/?appid=f55e66587a370fd5f81d859e4cf1ba55&type=realtime
//    $homepage->show();
    return $homepage -> show();
});
Route::get('/weibo', function () {
    $a = new \App\Http\Controllers\Homepage();
    $a -> getWeibo();
});