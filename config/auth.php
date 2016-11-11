<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-11 23:27:24
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    | 默认用户认证
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    | 这个选项用于给你的应用配置默认的“guard”用户认证和密码重置。
    | 你可以按照你的需要来修改这些设置，
    | 但是对于大多数刚起步的应用来说，他已经很完美了。
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    | 验证守卫
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    | 接下来你可以为你的应用定义每一个认证守卫。
    | 当然，我们也已经默认提供了session存储和Eloquent用户提供者这两种优秀的配置。
    |
    | 所有的身份验证驱动都有一个用户提供者。
    | 这些定义指定了用户可以从你的数据库或者其他存储机制中获取该应用中的用户数据。
    |
    | 支持: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    | 用户提供者
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    | 所有的身份验证驱动都有一个用户提供者。
    | 这些定义指定了用户可以从你的数据库或者其他存储机制中获取该应用中的用户数据。
    |
    | 如果你有多个用户表或者模型，你可以配置多个数据源来代替这些模型或者数据表。
    | 这些数据源可以被分配到任何其他的你已经定义过的认证守卫。
    |
    | 支持: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    | 重置密码
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | 如果在这个应用中你有多个用户表或者模型，
    | 并且你希望他们针对不同的特殊用户类型具有独立的密码重置机制
    | 那么你们可以在这里设置多种密码重置配置。
    |
    | 这里的expire过期时间以分钟为单位，
    | 并且重置密码的token必须在该时间内才能验证通过。
    | 这个安全机制以短时效特性为特色，
    | 因此黑客无法在如此短时间内预测出该token。
    | 你可以按需修改该值。
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
