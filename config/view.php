<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    | 视图存储路径
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    | 大部分模版引擎系统都从磁盘中载入模版文件。
    | 这里你可以指定一组路径用于视图层查找模版文件。
    | 当然Laravel已经帮你注册了通用的视图路径。
    |
    */

    'paths' => [
        realpath(base_path('resources/views')),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    | 视图编译路径
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    | 这个选项指定了你的应用中所有已被编译的Blade模版存放在哪。
    | 比较具有特色的是，他们并不在storage目录。
    | 但是和传统惯例一样，你可以随意修改这个配置项。
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
