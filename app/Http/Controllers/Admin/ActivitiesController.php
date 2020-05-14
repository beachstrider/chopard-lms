<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Activity;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }
    
    public function index()
    {
        $activities=Activity::all();
        return view('admin.activities.index',['title'=>'Activity Management', 'activities'=>$activities]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Activity $activity)
    {
        //
    }

    public function edit(Activity $activity)
    {
        //
    }

    public function update(Request $request, Activity $activity)
    {
        //
    }

    public function destroy(Activity $activity)
    {
        //
    }
}
