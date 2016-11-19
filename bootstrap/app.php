<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 15:39:12
 */

/*
|--------------------------------------------------------------------------
| Create The Application
| 创建应用
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
| 我们创建一个心得Laravel应用实例的第一件事情，
| 就是像胶水一样的组合各种Laravel组件，
| 这也就是为该系统绑定各种零部件的IoC（依赖注入）容器。
|
*/

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
| 绑定关键接口
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
| 接下来，我们需要在这个容器中绑定一些关键接口，
| 这样我们才能决定这个容器需要什么组件。
| 这个核心同时为WEB和CLI方式传入该应用的请求提供服务。
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
| 返回该应用对象
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
| 这个脚本最终返回应用实例。这个实例用于提供给调用他的脚本，
| 这样我们能够单独构建实际运行的应用实例，并且发回响应体。
|
*/

return $app;
