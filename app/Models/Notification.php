<?php

namespace DLW\Models;

use Illuminate\Database\Eloquent\Model;
use DLW\Models\Admin;
use Illuminate\Support\Facades\DB;
use Auth;

class Notification extends Model
{
    public function admins(){
        return $this->belongsToMany(Admin::class, 'admin_notification');
    }

    public static function with_read(){
        $noti_users = DB::table('notifications')->leftJoin('admin_notification', 'notifications.id', 'admin_notification.notification_id')->orderBy('created_at', 'desc');
        return $noti_users;
    }
}
