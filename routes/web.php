<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-11 16:36:20
 */

/*
|--------------------------------------------------------------------------
| Web Routes
| Web路由
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 在这里你可以为你的应用注册WEB路由。
| 这些路由将被RouteServiceProvider（路由服务提供者）
| 在一组已被指定为“WEB”的中间件组所载入
| 就趁现在，开始创造一些伟大的东西吧！
|
*/

Route::get('/', function () {
    return view('welcome');
});
