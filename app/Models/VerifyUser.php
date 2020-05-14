<?php

namespace DLW\Models;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id', 'token'
    ];

    public function user()
    {
        return $this->belongsTo('DLW\Models\User', 'user_id');
    }
}
