<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 15:18:26
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    | 密码重置控制器
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    | 这个控制器用于响应处理密码重置邮件，
    | 并且通过引入一个trait方便的为你应用提供为用户发送找回密码通知邮件的功能。
    | 自由地探索这个trait吧。
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     * 创建一个新的控制器实例。
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
