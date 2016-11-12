<?php

/**
 * translator:昌维 <867597730@qq.com>
 * repository:https://github.com/cw1997/laravel-Simplified-Chinese
 * Translated as 2016-11-12 22:58:25
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    | 密码重置语言行
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    | 当用户忘记密码，并且在更新密码的时候出现失败，或者token校验失败，
    | 或者新的密码没有通过强度验证时，
    | 下列默认提供的语言行将会匹配相应的错误原因。
    |
    */

    // 'password' => 'Passwords must be at least six characters and match the confirmation.',
    'password' => '密码至少需要六个字符，并且要符合配置。',
    // 'reset' => 'Your password has been reset!',
    'reset' => '你的密码已被重置！',
    // 'sent' => 'We have e-mailed your password reset link!',
    'sent' => '我们已经发送了一份密码重置邮件到你的邮箱！',
    // 'token' => 'This password reset token is invalid.',
    'token' => '密码重置token错误。',
    // 'user' => "We can't find a user with that e-mail address.",
    'user' => "您提供的Email地址并没有注册用户。",

];
