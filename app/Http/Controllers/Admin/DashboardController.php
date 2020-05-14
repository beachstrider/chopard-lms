<?php

namespace DLW\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Libraries\GoogleAnalytics;
use DLW\Models\User;
use DLW\Models\Score;

use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index(){
        $allUserCount = User::all()->count();
        $newUserCount = User::newUserCountRecently(1);
        $time_tool = GoogleAnalytics::getTimeTool();
        $time_reference = GoogleAnalytics::getTimeReference();
        $activeUsers = GoogleAnalytics::activeUsersNow();
        $activePages = GoogleAnalytics::activePagesNow();
        $topDevices = GoogleAnalytics::topDevices();
        $rsCountry = Score::rankByCountry();
        $rsActivity = Score::rankByActivity();
        $rsStore = Score::rankByStore();
        $anaUsers = GoogleAnalytics::analyticUsers();
        $returnUsers = GoogleAnalytics::returnUsers();
        $users_country = GoogleAnalytics::usersCountry();

        return view('admin.dashboard',[
            'title'=>'Dashboard', 
            'allusercount'=>$allUserCount,
            'newusercount'=>$newUserCount,
            'time_tool'=>$time_tool,
            'time_reference'=>$time_reference,
            'activeusers'=>$activeUsers,
            'activepages'=>$activePages,
            'topdevices'=>$topDevices,
            'rs_country'=>$rsCountry,
            'rs_activity'=>$rsActivity,
            'rs_store'=>$rsStore,
            'ana_users'=>$anaUsers,
            'return_users'=>$returnUsers,
            'users_country'=>$users_country,
        ]);

        $result = GoogleAnalytics::topCountries();
        $country = $result->pluck('country');
        $country_sessions = $result->pluck('sessions');
        return $result;

        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        $period = Period::create( $startDate, $endDate );
        $analyticsData = Analytics::fetchVisitorsAndPageViews( $period );
        $this->precho($analyticsData);

        $size = count( $analyticsData );
        $visitors = 1;
        $pageViews = 1;
        for ( $i = 0; $i <$size; $i ++ ) {
            $visitors   = $visitors + $analyticsData[ $i ]['visitors'];
            $pageViews  = $pageViews + $analyticsData[ $i ]['pageViews'];
        }
        return $pageViews;


    }

    public function precho($val){
        echo  "<html><body><pre>";
        var_dump($val);
        echo  "</pre></body></html>";
        exit(0);
    }
}
