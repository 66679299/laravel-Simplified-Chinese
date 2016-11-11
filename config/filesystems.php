<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-11 16:11:09
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    | 默认的文件系统存储磁盘
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    | 这里你可以指明框架应该用哪一个文件系统存储磁盘。
    | 你可以在你的应用中使用"local"磁盘，也可以使用其他多种多样的云存储。
    | 让我们开始存储之旅吧！
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    | 默认的云存储文件系统
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    | 大量应用都会同时在本地和云端存储文件。
    | 正因为如此，你可以在这里指定一个默认的云存储驱动。
    | 这个云端存储驱动将在容器中被绑定。
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    | 文件系统磁盘
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    | 这里你可以随心所欲的配置各种文件系统磁盘，
    | 你甚至可以在同一个驱动中配置多个磁盘。
    | 默认的例子中已经设置了每一个驱动所需要的配置项。
    |
    | 支持的驱动: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

    ],

];
