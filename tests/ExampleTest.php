<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated at 2016-11-11 16:38:24
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     * 一个标准的功能测试案例
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }
}
