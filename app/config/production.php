<?php
//production mode configuration

return [
    'app' => [
        'url' => 'http://excersice',
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10
        ]
    ],
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'name' => 'auth',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ],
    'auth' => [
        'session' => 'user_id',
        'remember' => 'user_r'
    ],
    'mail' => [ // google gmail
        'smtp_auth' => true, // SMTP
        'smtp_secure' => 'tls',
        'host' => 'smtp.gmail.com',
        'username' => 'imladrisol@gmail.com',
        'password' => '111', // Change !!
        'port' => 587,
        'html' => true,

    ],
    'twig' => [
        'debug' => true
    ],
    'csrf' => [
        'session' => 'csrf_token'
    ]

];