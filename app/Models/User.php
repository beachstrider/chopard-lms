<?php

namespace DLW\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activities_users');
    }

    public function verifyUser()
    {
        return $this->hasOne('DLW\Models\VerifyUser');
    }

    static function newUserCountRecently($days){
        $count = DB::select( DB::raw("SELECT COUNT(*) as count FROM users WHERE DATEDIFF(CURDATE(), DATE_FORMAT(created_at,'%Y-%m-%d'))<".++$days) );
        return $count[0]->count;
    }

}

