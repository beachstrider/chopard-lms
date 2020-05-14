<?php

namespace DLW\Http;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \DLW\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \DLW\Http\Middleware\TrustProxies::class,
    ];
    
    protected $middlewareGroups = [
        'web' => [
            \DLW\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \DLW\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];
    
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'ajax' => \DLW\Http\Middleware\OnlyAjaxRequest::class,
        'admin.guard' => \DLW\Http\Middleware\AdminMiddleware::class,
        'user.guard' => \DLW\Http\Middleware\UserMiddleware::class,
        'admin.guest' => \DLW\Http\Middleware\AdminLoginMiddleware::class,
        'user.guest' => \DLW\Http\Middleware\UserLoginMiddleware::class,
        'isprofcomp' => \DLW\Http\Middleware\IsProfileCompleted::class,
        'issuper' => \DLW\Http\Middleware\IsSuper::class,
    ];
}
