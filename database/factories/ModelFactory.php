<?php

/*
|--------------------------------------------------------------------------
| Model Factories
| 模型工厂
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
| 在这里你可以定义你所有的模型工厂。
| 模型工厂为你提供了一种创建可以测试和填充种子数据的模型的简便方法。
| 你仅仅需要高速这个工厂默认的模型应该是何种样子。
|
*/

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 00:25:51
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
