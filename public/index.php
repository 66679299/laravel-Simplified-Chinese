<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-11 16:26:59
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
| 注册自动加载器
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
| Composer提供了一个方便的,自动为我们的应用程序生成的类的加载器
| 因为我们在这个脚本中导入了这个文件，
| 所以我们完全不需要担心如何手动加载我们自己的类，这种感觉很轻松。
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
| 开灯
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
| 我们想要让PHP开发变得光明起来，所以让我们打开灯吧。
| 这个框架的引导程序做好使用准备后，将会加载应用，
| 这样我们才能让我们的应用跑起来，并且让我们的用户感到高兴。
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
| 运行该应用
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
| 一旦我们的应用构建起来了，我们能够在核心中控制入站请求，
| 并且将有关的响应体发回给客户端的浏览器，
| 让他们享受我们为他们构建的富有创造力且精彩的应用。
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
