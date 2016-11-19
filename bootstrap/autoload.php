<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 15:44:53
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
| 注册Composer自动加载器
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
| Composer提供了一个方便的,自动为我们的应用程序生成类的加载器
| 因为我们在这个脚本中导入了这个文件，
| 所以我们完全不需要担心如何手动加载我们自己的类，这种感觉很轻松。
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
| 引入已编译的类文件
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| compiled class file which contains all of the classes commonly used
| by a request. The Artisan "optimize" is used to create this file.
| 显著提升你的应用性能，你可以使用已被编译的类文件，
| used它会在一个文件中同时包含请求中各种常用的类库。
| Artisan的"optimize"命令就是用于创建这种编译的类文件。
|
*/

$compiledPath = __DIR__.'/cache/compiled.php';

if (file_exists($compiledPath)) {
    require $compiledPath;
}
