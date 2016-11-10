/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-09 22:13:49
 */

const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 | Elixir资源管理器
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 | Elixir为您的Laraval应用提供了一个干净流畅的API来定义一些简单的Gulp任务
 | 通常情况下，我们将会为你的应用像第三方发布资源一样的编译Sass文件
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');
});
