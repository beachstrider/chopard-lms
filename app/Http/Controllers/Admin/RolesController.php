<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Role;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }
    
    public function index()
    {
        $roles=Role::all();
        return view('admin.roles.index',['title'=>'Role Management']);
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
