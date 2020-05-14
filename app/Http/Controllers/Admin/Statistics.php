<?php

namespace DLW\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use Analytics;
use Spatie\Analytics\Period;

class Statistics extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index(){
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(1));
        // return $analyticsData;

        return view('admin.statistics.index', ['title'=>'Statistics']);
    }
}
