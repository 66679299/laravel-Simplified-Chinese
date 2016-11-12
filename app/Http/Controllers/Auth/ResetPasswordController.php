<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-12 15:08:40
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    | 密码重置控制器
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    | 这个 控制器用于响应处理密码重置的请求，
    | 并且通过一个简单的trait注入到该行为中，
    | 你可以很简单的便利这个trait并且重写任何你希望修改的方法。
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     * 当用户重置他们的密码之后重定向到哪个页面
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
