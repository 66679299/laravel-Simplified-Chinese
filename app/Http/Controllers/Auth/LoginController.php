<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-12 15:15:21
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    | 登录控制器
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    | 这个控制器为该应用处理已经通过身份验证的用户，
    | 并且将他们重定向到你的主屏幕。
    | 这个控制器使用trait方便的为该应用提供相关功能。
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * 当用户登陆后重定向到哪个页面。
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
        $this->middleware('guest', ['except' => 'logout']);
    }
}
