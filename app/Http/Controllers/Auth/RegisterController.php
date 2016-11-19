<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 15:11:55
 */

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    | 注册控制器
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    | 这个控制器像处理新颖胡注册和验证一样的处理注册操作。
    | 通常情况下这个控制器并不需要引入任何额外的代码，
    | 因为它通过使用trait提供这些功能。
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     * 当用户登录或者注册之后重定向到哪个页面。
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

    /**
     * Get a validator for an incoming registration request.
     * 获得一个验证器用于处理传入的注册请求。
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     * 在验证注册之后创建一个新的用户模型实例。
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
