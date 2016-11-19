<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-11 16:36:20
 */

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
| API路由
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| 在这里你可以为你的应用注册API路由。
| 这些路由将被RouteServiceProvider（路由服务提供者）
| 在一组已被指定为“API”的中间件组所载入
| 开始享受构建属于自己的API吧！
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
