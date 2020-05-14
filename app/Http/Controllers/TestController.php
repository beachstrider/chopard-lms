<?php

namespace DLW\Http\Controllers;

use Illuminate\Http\Request;
use DLW\Events\NotificationEvent;
use DLW\Models\Notification;
use DLW\Models\Admin;
use Illuminate\Support\Facades\DB;
use DLW\Models\User;
use DLW\Jobs\UserNotJoinNotification;

class TestController extends Controller
{
    public function index()
    {
        $data = new Notification;
        $data->type = 'normal';
        $data->title = 'New user is registered.';
        $data->message = 'Monica Johndoe has just been registered in your journey.';
        $data->url = '/admin/notifications';
        $data->icon = 'mdi mdi-cart-outline';
        $data->save();

        $admins = Admin::all();
        $data->admins()->saveMany($admins);
        
        event(new NotificationEvent($data));

        return;
    }
}
