<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 00:10:31
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    | 邮件驱动
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill",
    |            "ses", "sparkpost", "log"
    |
    | Laravel同时支持SMTP和PHP自带的mail函数这两种驱动用于发送邮件。
    | 在这里你可以指明你的应用使用何种驱动。
    | Laravel默认为SMTP配置。
    |
    | 支持: "smtp", "mail", "sendmail", "mailgun", "mandrill",
    |            "ses", "sparkpost", "log"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Address
    | SMTP主机地址
    |--------------------------------------------------------------------------
    |
    | Here you may provide the host address of the SMTP server used by your
    | applications. A default option is provided that is compatible with
    | the Mailgun mail service which will provide reliable deliveries.
    | 这里你需要为你的应用提供SMTP服务器的主机地址。
    | 这里默认配置的是“Mailgun”这个提供可靠交付的邮件服务。
    |
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Port
    | SMTP主机端口
    |--------------------------------------------------------------------------
    |
    | This is the SMTP port used by your application to deliver e-mails to
    | users of the application. Like the host we have set this value to
    | stay compatible with the Mailgun e-mail application by default.
    | 这是你的应用用于发送邮件的端口号。
    | 正如配置主机地址一样，我们默认将该值设置为“Mailgun”邮件服务器的端口。
    |
    */

    'port' => env('MAIL_PORT', 587),

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    | 全局发件人地址
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    | 你也许希望通过你的应用发送的所有邮件都来自同一个发件人。
    | 在这里你可以指明一个名字和地址用于在你的应用中发送邮件。
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | E-Mail Encryption Protocol
    | E-Mail加密协议
    |--------------------------------------------------------------------------
    |
    | Here you may specify the encryption protocol that should be used when
    | the application send e-mail messages. A sensible default using the
    | transport layer security protocol should provide great security.
    | 这里你可以指明你的应用发送邮件时使用何种加密协议。
    | 一个明智默认设置是使用TLS（传输层安全协议）这种卓越的加密协议。
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Username
    | SMTP账户名称
    |--------------------------------------------------------------------------
    |
    | If your SMTP server requires a username for authentication, you should
    | set it here. This will get used to authenticate with your server on
    | connection. You may also set the "password" value below this one.
    | 如果你的SMTP服务器需要一个用于身份认证的用户名，你应该在这里设置它。
    | 这个用户名将在你连接服务器时使用到。
    | 你也许还需要紧接着设置密码。
    |
    */

    'username' => env('MAIL_USERNAME'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Password
    | SMTP账户密码
    |--------------------------------------------------------------------------
    |
    | Here you may set the password required by your SMTP server to send out
    | messages from your application. This will be given to the server on
    | connection so that the application will be able to send messages.
    | 如果你的SMTP服务器需要一个用于身份认证的密码，你应该在这里设置它。
    | 这个用户名将在你连接服务器时使用到，这样你才可以发送邮件。
    |
    */

    'password' => env('MAIL_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Sendmail System Path
    | Sendmail系统路径
    |--------------------------------------------------------------------------
    |
    | When using the "sendmail" driver to send e-mails, we will need to know
    | the path to where Sendmail lives on this server. A default path has
    | been provided here, which will work well on most of your systems.
    | 当在使用"sendmail"驱动发送邮件的时候，我们需要知道Sendmail位于服务器的路径
    | 我们已经默认配置好了一个能够在绝大多数系统中工作的路径。
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

];
