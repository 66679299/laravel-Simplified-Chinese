<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-10 23:58:27
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    | 默认缓存存储
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
    | Supported: "apc", "array", "database", "file", "memcached", "redis"
    |
    | 这个配置用于设置缓存库默认使用的缓存连接器。
    | 当有缓存函数执行的时候您不需要显式指定，系统会自动使用该连接器。
    |
    | 支持的缓存驱动: "apc", "array", "database", "file", "memcached", "redis"
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    | 缓存存储
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    | 在这里你要像缓存驱动一样为你的应用定义所有的缓存“存储器”。
    | 你甚至可以给同一个缓存驱动定义多个缓存存储器，
    | 他们将会分组存储在你的缓存中。
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    | 缓存前缀
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    | 当使用如APC或Memcached等基于RAM的缓存存储时，
    | 可能会有其他的应用也会使用同一个缓存。
    | 所以我们需要指明一个缓存前缀用于避免缓存key出现冲突。
    |
    */

    'prefix' => 'laravel',

];
