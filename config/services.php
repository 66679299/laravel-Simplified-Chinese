<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-11 16:11:09
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    | 第三方服务
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    | 这个文件是用于存储,Mailgun,SparkPost等等第三方服务的凭据。
    | 这个文件为这种类型的信息提供了一个健全的存储位置，
    | 让各种包有一个统一的位置读取你的各种凭证。
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
