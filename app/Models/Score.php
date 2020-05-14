<?php

namespace DLW\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Score extends Model
{
    static function rankByCountry(){
        $result = DB::select( DB::raw("SELECT country, ROUND(AVG(score),2) AS score FROM ( SELECT u.name, u.`country`, AVG(s.`score`) AS score FROM scores AS s LEFT JOIN users AS u ON s.`user_id` = u.`id` GROUP BY s.`user_id` ) AS ss GROUP BY country ORDER BY score DESC") );
        return $result;
    }

    static function rankByStore(){
        $result = DB::select( DB::raw("SELECT saleschannel, ROUND(AVG(score),2) AS score FROM ( SELECT u.name, u.`saleschannel` AS saleschannel, AVG(s.`score`) AS score FROM scores AS s LEFT JOIN users AS u ON s.`user_id` = u.`id` GROUP BY s.`user_id` ) AS ss GROUP BY saleschannel ORDER BY score DESC") );
        return $result;
    }

    static function rankByActivity(){
        $result = DB::select( DB::raw("SELECT a.`chapter`, a.`name`, s.score FROM activities AS a LEFT JOIN ( SELECT activity_id, ROUND( AVG( score ),2 ) AS score FROM scores GROUP BY activity_id ) AS s ON a.`id` = s.activity_id WHERE activity != 0 ORDER BY s.score DESC") );
        return $result;
    }
}
