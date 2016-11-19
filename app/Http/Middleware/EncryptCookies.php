<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 15:06:15
 */

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as BaseEncrypter;

class EncryptCookies extends BaseEncrypter
{
    /**
     * The names of the cookies that should not be encrypted.
     * 这里所列出的cookie标识符将不会被加密
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
