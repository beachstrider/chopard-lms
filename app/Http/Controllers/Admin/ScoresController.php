<?php

namespace DLW\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Models\User;
use DLW\Models\Activity;
use DLW\Models\Score;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ScoresController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }
    
    public function index()
    {
        $cnts_activities = Activity::where('activity', '!=', '0')->count();
        $scores = DB::select("SELECT scores.user_id, users.name, users.fname, users.avatar, COUNT(*) AS cnts, SUM(scores.score) AS sum_score, AVG(scores.`score`) AS avg_score FROM scores LEFT JOIN users ON scores.user_id=users.id GROUP BY users.id ORDER BY sum_score DESC");

        return view('admin.scores.index', ['title'=>'Scores', 'scores'=>$scores, 'counts_activities'=>$cnts_activities]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $user = User::find($id);
        $activities = Activity::where('activity', '!=', 0)->get();
        $user_scores = DB::select("SELECT scores.activity_id, scores.score FROM scores LEFT JOIN users ON scores.user_id=users.id WHERE  scores.user_id=".$id);

        return view('admin.scores.show', ['title'=>'User Score', 'activities'=>$activities, 'user'=>$user, 'user_scores'=>$user_scores]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($user_id)
    {
        $score = Score::where('user_id', $user_id);
        $score->delete();

        return response()->json(['status'=>true, 'message'=>'User score deleted successfully.']);
    }
}
