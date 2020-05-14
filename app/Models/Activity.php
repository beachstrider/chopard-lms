<?php

namespace DLW\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $table = 'activities';
	public $timestamps = false;

    protected $fillable = [
        'chapter',
        'activity'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'activities_users');
    }

    public function getChapterAttribute($value)
    {
        return rtrim($value, '.0');
    }








    public function newQuery()
    {
        $except = config('chopard.except');
        $query = parent::newQuery();

        if ($except) {
            //$query->whereNotIn('activity', $except);
        }
        return $query;
    }     
}