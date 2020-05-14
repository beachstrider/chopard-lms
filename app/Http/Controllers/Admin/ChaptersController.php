<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Activity;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class ChaptersController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }
    
    public function index()
    {
        return view('admin.chapters.index', ['title'=>'Chapters']);
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
