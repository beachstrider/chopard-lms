<?php

namespace DLW\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'DLW\Model' => 'DLW\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
