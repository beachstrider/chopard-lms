<?php 
namespace DLW\Libraries;

use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class GoogleAnalytics{

    static function usersCountry() {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        $period = Period::create( $startDate, $endDate );
        $result = Analytics::performQuery($period,'ga:sessions',  ['dimensions'=>'ga:country, ga:countryIsoCode','sort'=>'-ga:sessions']);
        return $result->rows;
    }

    static function topDevices()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        $period = Period::create( $startDate, $endDate );
        $result = Analytics::performQuery($period,'ga:sessions', [
            'dimensions'=>'ga:deviceCategory',

        ]);
        return $result->rows;
    }

    static function getAllUsers(){
        $live_users = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')->totalsForAllResults['rt:activeVisitors'];
        return $live_users;
    }

    static function getTimeTool(){
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        $period = Period::create( $startDate, $endDate );
        $session_duration = Analytics::performQuery($period,'ga:sessionDuration');
        return date('h:m:s', $session_duration->rows[0][0]);
    }

    static function getTimeReference(){
        $val = 0;
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        $period = Period::create( $startDate, $endDate );
        $session_duration = Analytics::performQuery($period,'ga:sessionDuration', [
            'dimensions'=>'ga:pagePath', 
            'filters'=>'ga:pagePath=@/chapter/', 
            'include-empty-rows'=>false,

        ]);
        foreach($session_duration->rows as $row){
            if( (substr($row[0], 0, 9)=="/chapter/") && (substr_count($row[0], '/')==2) ){
                $val += $row[1];
            }
        }
        return date('h:m:s', $val);
    }

    static function activeUsersNow(){
        $activeUsers = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeUsers')->rows[0][0];
        if(($activeUsers==null)||($activeUsers=='')) $activeUsers = 0;
        return $activeUsers; 
    }

    static function activePagesNow(){
        $activePages = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:pageviews', ['dimensions'=>'rt:pagePath', 'max-results'=>10]);
        return $activePages->rows;
    }

    static function analyticUsers(){
        $result = Analytics::performQuery(Period::days(7),'ga:users, ga:sessions, ga:bounceRate, ga:avgSessionDuration',  ['dimensions'=>'ga:date, ga:dayOfWeek']);
        return $result->rows;
    }

    static function returnUsers(){
        $result = Analytics::performQuery(Period::months(6),'ga:users, ga:newUsers',  ['dimensions'=>'ga:month']);
        return $result->rows;
    }

}