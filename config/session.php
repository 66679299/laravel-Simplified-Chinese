<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-12 12:59:08
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    | 默认会话驱动
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |
    | 这个选项用于配置请求中默认使用的会话驱动。
    | 我们默认使用的是轻量级的本地驱动，
    | 但是你最好在这里指定一个更加卓越的驱动。
    |
    | 支持: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    | 会话生存时间
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    | 在这里你可以指定你希望会话将在空闲多少分钟之后过期销毁。
    | 如果你希望在浏览器关闭之后立即销毁会话，
    | 那么请设置“expire_on_close”这个值为true。
    |
    */

    'lifetime' => 120,

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    | 会话加密
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    | 这个选项可以很方便的允许你在会话存储之前是否加密。
    | Laravel将会自动化的进行所有的加密操作，
    | 你只需要像传统方式一样的使用会话。
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    | 本地会话文件
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    | 当使用本地会话驱动时，我们需要一个路径用于存储会话文件。
    | 我们已经设置好了一个默认的存储路径，但是你指定一个其他的路径也许会更好。
    | 这个配置仅仅在使用文件会话存储时才需要用到。
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    | 会话数据库连接
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    | 当你使用数据库或者redis会话驱动的时候，
    | 你需要指明一个连接器用于管理这些会话。
    | 他们和你的数据库配置连接是对应的。
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    | 会话数据库表
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    | 当你使用数据库会话驱动的时候，你需要指定用哪张表管理会话数据。
    | 当然一个很明智的默认配置已经提供给你了。
    | 你可以很轻易的按照你的需要修改他。
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    | 会话缓存存储
    |--------------------------------------------------------------------------
    |
    | When using the "apc" or "memcached" session drivers, you may specify a
    | cache store that should be used for these sessions. This value must
    | correspond with one of the application's configured cache stores.
    | 当使用APC或者Memcached会话驱动，你需要指明他们使用哪一个缓存存储会话数据。
    | 这个值应当和你的应用中配置的缓存存储对应。
    |
    */

    'store' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    | 垃圾会话数据回收频率
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    | 有一些会话驱动需要手动在存储中清除老旧的会话数据。
    | 这里可以设置会话的回收频率。默认情况下是2%，也就是每一百个请求回收两次。
    | （译注：由于PHP的工作机制，它并没有一个daemon线程，
    | 来定时地扫描session信息并判断其是否失效。
    | 当一个有效请求发生时，PHP会根据全局变量
    | session.gc_probability/session.gc_divisor
    | （同样可以通过php.ini或者ini_set()函数来修改）的值，
    | 来决定是否启动一个GC（Garbage Collector）。
    | 默认情况下，session.gc_probability ＝ 1，session.gc_divisor ＝100，
    | 也就是说有1%的可能性会启动GC。
    | GC的工作，就是扫描所有的session信息，
    | 用当前时间减去session的最后修改时间（modified date），
    | 同session.gc_maxlifetime参数进行比较，
    | 如果生存时间已经超过gc_maxlifetime，就把该session删除。
    | 引用自：http://blog.csdn.net/21aspnet/article/details/7218923）
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    | 会话名称
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    | 这里你可以修改通过cookie存储session凭据使用的标识。
    | 在这里指定的这个名字，
    | 框架将会为每一个驱动在每一次新的会话凭据建立时创建。
    |
    */

    'cookie' => 'laravel_session',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    | session凭据所在路径
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    | 这个值决定了session位于cookie中的凭据可以在哪个路径下被读取到。
    | 通常情况下都设置其为你应用的根目录，但是你可以按照自己的需求修改。
    | （译注：由于可以通过嵌套同域下URL为目标cookie的path的iframe，
    | 然后通过DOM操作读取iframe资源的方式来实现跨path读取cookie的黑客技术，
    | 建议大家在实际开发中不要通过这种方式作为身份验证的限制，以防出现漏洞！）
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    | session凭据所在域
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    | 这里你可以设置session在cookie中的凭据位于哪一个域下。
    | 这个值应该指定为你的应用可以使用的那个域。
    | 我们已经设置好了一个明智的默认值。
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    | 仅允许HTTPS传输cookies中的会话凭据
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    | 当把该值设为true时，session在cookie中的凭据只会在HTTPS协议的连接中传输。
    | 这将保证session在cookie中的凭据只会在安全环境下发送。
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE', false),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    | 会话字段仅允许http协议访问
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    | 将该值设为trru时会阻止JavaScript脚本从cookie中读取会话凭据，
    | 并且只允许HTTP协议访问它。（译注：默认情况下该值对应cookie中的PHPSESSID）
    | 你可以很轻松的按照你的需要修改他。
    |
    */

    'http_only' => true,

];
