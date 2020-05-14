<?php

namespace DLW\Http\Controllers;
use Illuminate\Http\Request;
use DLW\Models\Activity;
use DLW\Models\Score;
use DLW\Models\Feedback;
use DLW\Models\Admin;
use DLW\Events\NotificationEvent;
use DLW\Models\Notification;
use Auth;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('user.guard');
    }

    public function index()
    {
        $all_activities = Activity::orderBy('chapter')
                                ->orderBy('activity')
                                ->get();

        $user_activities = auth()->user()->activities;
        $next_route = $this->nextActivity($all_activities, $user_activities);
        $current_activity = new \stdClass;
        $current_activity->id = 0;
        $current_activity->chapter = 0;
        $current_activity->activity = 0;
        
        $askprofiling = $this->isProfileIncompleted();

        return view('home', compact(
            'current_activity',
            'next_route',
            'user_activities',
            'all_activities',
            'askprofiling'
        ));
    }
	
    public function chapter($chapter, $activity = 0)
    {
        if($this->isProfileIncompleted()){
            return redirect('/');
        }

        $view = 'chapters.'.$chapter;
        $view .= $activity ? '.act'.$activity : '.home';

        $all_activities = Activity::orderBy('chapter')
                                    ->orderBy('activity')
                                    ->get();

        $current_activity = $all_activities->where('chapter', $chapter)
                                           ->where('activity', $activity)
                                           ->first();


        if ($current_activity === null) abort(404);

        $user_activities = auth()->user()->activities()->orderBy('activity')->get();

        $next_route = $this->nextActivity($all_activities, $user_activities, $current_activity);

        $urlkey = str_replace("/chapter/","",$_SERVER["REQUEST_URI"]);

        $complete = $user_activities->contains('id', $current_activity->id);


        if ($complete) {
            if($chapter != 5 and $chapter != 6 and $activity != 0)
            return redirect($next_route);

        }

        // $int_activity = intval($activity);

        // if($user_activities->count() > 0){
        //     $last_completed_activity = $user_activities->last()->activity;
        //     if(($int_activity>1) && (($int_activity-1)>$last_completed_activity)) return view('errors.incompleted_activity');
        // }else{
        //     if($int_activity>1) return view('errors.incompleted_activity');
        // }
        
        $first_activity_chapter = $all_activities->where('chapter', $chapter)
                                                 ->where('activity', '>', 0)
                                                 ->first();

        $first_activity_chapter = ($first_activity_chapter) ? $first_activity_chapter->activity : null;

        $feedbackable = (Feedback::where('user_id', Auth::guard()->user()->id)->count()) > 0 ? false : true;
        
        return response()->view($view, compact(
                'complete',
                'next_route',
                'current_activity',
                'first_activity_chapter',
                'user_activities',
                'all_activities',
                'feedbackable'
            ))->header('Expires', 'Thu, 19 Nov 1981 08:52:00 GMT')
              ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
              ->header('Pragma', 'no-cache');
    }

    public function pdfviewer($chapter, $activity_id = 0)
    {
        return view('pdfviewer', compact('chapter', 'activity_id'));
    }    

    public function getMaterial($chapter, $activity_id = 0)
    {
        if ($activity_id) {
            $this->registerUserActivity($activity_id);
        }

        return response()->file(public_path('assets/chapters/'.$chapter.'/reference.pdf'), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="reference.pdf"'
        ]);
    }

    public function register(Request $request)
    {
        $this->registerUserScore(auth()->user()->id, $request->activity_id, $request->score);
        return $this->registerUserActivity($request->input('activity_id'));
    }

    public function reset(Request $request)
    {
        return auth()->user()
                     ->activities()
                     ->detach($request->input('activity_id'));
    }

    public function resetAll(Request $request)
    {
        return auth()->user()
                     ->activities()
                     ->detach();
    }    

    private function nextActivity($all_activities, $user_activities, $current_activity = null)
    {
        $next_activity = null;

        if ($current_activity) {

            //echo "Current Activity: ".$current_activity."<br><br>Next Activities: <br>";

            $next_activities = $all_activities->where('id', '>', $current_activity->id);

            foreach ($next_activities as $act) {

                //echo $act."<br>";

                if (! $user_activities->contains('id', $act->id)) {
                    $next_activity = $act;
                    break;
                }
            }

            //echo "<br><br>User Activities: <br>";

            // foreach($user_activities as $uact){
            //     echo $uact."<br>";
            // }

            // echo "<br>Next Activity: <br>".$next_activity;
            //die();
        }

        if ($next_activity === null) {
            foreach ($all_activities as $act) {
                if (! $user_activities->contains('id', $act->id)) {
                    $next_activity = $act;
                    break;
                }
            }
        }

        if ($next_activity === null || ($current_activity !== null && $next_activity->id === $current_activity->id)) {
            $next_route = route('home');
        } else {
            $route_params = [
                'chapter' => $next_activity->chapter
            ];

            if ($next_activity->activity) {
                $route_params['activity'] = $next_activity->activity;
            }

            $next_route = route('chapter', $route_params);     
        }
        return $next_route; 
    }

    private function registerUserActivity($activity_id)
    {
        return auth()->user()
                     ->activities()
                     ->syncWithoutDetaching([$activity_id]);
    }

    public function registerUserScore($user_id, $activity_id, $score){
        $old_score = Score::where('user_id', $user_id)->where('activity_id', $activity_id);
        $old_score->delete();
        $user_score = new Score;
        $user_score->user_id = $user_id;
        $user_score->activity_id = $activity_id;
        $user_score->score = $score;
        $user_score->save();
    }

    public function isProfileIncompleted(){
        if (Auth::guard()->user()->profile_complete==false){
            return true;
        }
    }

    public function feedback(Request $request){
        if(Feedback::where('user_id', Auth::guard()->user()->id)->count()>0){
            return "ko";
        }

        $feedback = new Feedback;
        $feedback->name = Auth::guard()->user()->name.' '.Auth::guard()->user()->fname;
        $feedback->user_id = Auth::guard()->user()->id;
        
        if(Auth::guard()->user()->avatar!=null){
            $user_avatar = base_path('/storage/app/public/'.Auth::guard()->user()->avatar);
        }else{
            $user_avatar = base_path('public/assets/img/no-image.png');
        }

        $feedback_avatar = base_path('/storage/app/public/feedbacks/'.basename($user_avatar));
        $success = \File::copy($user_avatar, $feedback_avatar);

        $feedback->avatar = 'feedbacks/'.basename($user_avatar);
        $feedback->description = $request->description;
        $feedback->knowledge = $request->knowledge;
        $feedback->answering = $request->answering;
        $feedback->enjoying = $request->enjoying;
        $feedback->quality = $request->quality;
        $feedback->save();

        $data = new Notification;
        $data->type = 'feedback';
        $data->title = 'New feedback arrived.';
        $data->message = Auth::guard()->user()->name.Auth::guard()->user()->fname.' has left his feedback.';
        $data->url = '/admin/feedbacks';
        $data->icon = 'mdi mdi-emoticon';
        $data->save();

        $admins = Admin::all();
        $data->admins()->saveMany($admins);
        
        event(new NotificationEvent($data));

        return "ok";
    }
}
