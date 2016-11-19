<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-12 15:20:47
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * 启动各种应用服务
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        /*
         * Authenticate the user's personal channel...
         * 验证用户的个人频道
         */
        Broadcast::channel('App.User.*', function ($user, $userId) {
            return (int) $user->id === (int) $userId;
        });
    }
}
