<?php

namespace DLW\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use DLW\Events\NotificationEvent;
use DLW\Models\Notification;
use DLW\Models\Admin;
use DLW\Models\User;

class UserNotJoinNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        if(User::find($this->user->id)->already_login==0){
            $data = new Notification;
            $data->type = 'user';
            $data->title = 'User is not joined';
            $data->message = $this->user->name.' has not joined to your journey in 5 days.';
            $data->url = '/admin/users';
            $data->icon = 'mdi mdi-alert-outline';
            $data->save();

            $admins = Admin::all();
            $data->admins()->saveMany($admins);
            
            event(new NotificationEvent($data));
        }
    }
}
