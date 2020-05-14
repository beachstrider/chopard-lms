<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Feedback;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class FeedbacksController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        $averages = Feedback::avg();

        return view('admin.feedbacks.index', ['title'=>'Feedback', 'feedbacks'=>$feedbacks, 'averages'=>$averages]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
    }

    public function show(Feedback $feedback)
    {
        // return view('admin.feedbacks.show', ['title'=>'User Feedback', 'feedback'=> $feedback]);
    }

    public function edit(Feedback $feedback)
    {
        //
    }

    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return response()->json(['status'=>true, 'message'=>'Feedback(s) deleted successfully.']);
    }
}
