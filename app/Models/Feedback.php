<?php

namespace DLW\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    public static function avg(){
        $knowledge = DB::table('feedbacks')->avg('knowledge');
        $answering = DB::table('feedbacks')->avg('answering');
        $enjoying = DB::table('feedbacks')->avg('enjoying');
        $quality = DB::table('feedbacks')->avg('quality');
       
        $avgs = collect(['rage1', 'answering', 'enjoying', 'quality']);
        $avgs->knowledge = floatval($knowledge);
        $avgs->answering = floatval($answering);
        $avgs->enjoying = floatval($enjoying);
        $avgs->quality = floatval($quality);
        $avgs->average = ($avgs->knowledge + $avgs->answering + $avgs->enjoying + $avgs->quality) / 4;

        return $avgs;
    }
}
