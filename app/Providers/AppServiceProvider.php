<?php
namespace DLW\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DLW\Models\Notification;
use View;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    public function register()
    {
        //
    }
}
