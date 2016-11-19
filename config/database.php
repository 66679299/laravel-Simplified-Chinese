<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-11 16:11:09
 */

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    | PDO获取数据方式
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    | 默认情况下数据集将会以PHP基本类的实例返回（译注：stdClass类的实例），
    | 但是你可以要求以简单的数组格式返回，这里你可以设置返回指定类型。
    |
    */

    'fetch' => PDO::FETCH_OBJ,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    | 默认数据库连接名称
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    | 这里你可以指明你想要默认连接所有数据库中的哪一个数据库。
    | 当然你也可以通过使用数据库的类库连接许多其他的数据库连接。
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    | 数据库连接器
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    | 这里可以设置你的应用中所有的数据库连接。
    | 当然，Laravel支持下列每个示例中用到的数据库平台，
    | 他让开发变得简单。
    |
    |
    | 所有数据库操作都是基于PHP的PDO扩展，
    | 所以请确保在开发之前安装了你所需数据库的相关驱动。
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    | 迁移仓库表
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    | 这个表用于跟踪你正在运行的应用中的所有迁移操作。
    | 通过这个表里面的信息，
    | 我们可以确定磁盘上还有哪些在迁移操作在数据库上运行过。
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    | Redis数据库
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    | Redis是一个开源的，高性能的高级键值对存储，
    | 它提供了比传统的键值对系统例如APC，Memcached等更加丰富的命令。
    | Laravel让操作他变得容易许多。
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
