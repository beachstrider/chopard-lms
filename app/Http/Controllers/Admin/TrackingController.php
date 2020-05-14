<?php

namespace DLW\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Models\User;

class TrackingController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.tracking.index', ['title'=>'User Tracking', 'users'=>$users]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
