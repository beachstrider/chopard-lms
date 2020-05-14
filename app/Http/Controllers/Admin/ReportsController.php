<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Report;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index()
    {
        $reports = Report::orderby('updated_at', 'desc')->get();

        return view('admin.reports.index', ['title'=>'Report', 'reports'=>$reports]);
    }

    public function showReplyForm(){
        return view('admin.reports.reply', ['title'=>'Reply']);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Report $report)
    {
        //
    }

    public function edit(Report $report)
    {
        //
    }

    public function update(Request $request, Report $report)
    {
        //
    }

    public function destroy(Report $report)
    {
        //
    }
}
