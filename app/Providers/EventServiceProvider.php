<?php

namespace DLW\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'DLW\Events\Event' => [
            'DLW\Listeners\EventListener',
        ],
        'DLW\Events\OrderShipped' => [
            'App\Listeners\SendShipmentNotification',
        ],
        'jdavidbakr\MailTracker\Events\ViewEmailEvent' => [
            'DLW\Listeners\EmailViewed'
        ],
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
