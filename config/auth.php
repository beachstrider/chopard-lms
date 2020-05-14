<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => DLW\Models\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => DLW\Models\Admin::class,
        ],

    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

    ],

];

