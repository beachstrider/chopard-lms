<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Admin;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Http\Requests\Admin\CreateAdminRequest;
use DLW\Http\Requests\Admin\UpdateAdminRequest;
use Auth;
use Illuminate\Support\Facades\Storage;

class AdminsController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
        $this->middleware('issuper');
    }
    
    public function index()
    {
        $admins = Admin::where('id', '!=', Auth::guard('admin')->id())->get();
        return view('admin.admins.index', ['title'=>'Admin Management', 'admins'=>$admins]);
    }

    public function create()
    {
        return view('admin.admins.create', ['title'=>'Create Admin']);
    }

    public function store(CreateadminRequest $request)
    {
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        if($request->avatar!=null){
            Storage::delete(Admin::find(Auth::guard('admin')->id())->avatar);
            $path = $request->file('avatar')->store('avatars');
            $admin->avatar = $path;
        }
        $admin->save();

        return redirect()->route('admins.index');
    }

    public function show(Admin $admin)
    {
        //
    }

    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', ['title'=>'Edit admin', 'admin'=>$admin]);
    }

    public function update(UpdateadminRequest $request, Admin $admin)
    {
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        if($request->avatar!=null){
            Storage::delete(Admin::find(Auth::guard('admin')->id())->avatar);
            $path = $request->file('avatar')->store('avatars');
            $admin->avatar = $path;
        }
        $admin->save();
        
        return redirect()->route('admins.index');
    }

    public function destroy(Admin $admin)
    {
        Storage::delete($admin->avatar);
        $admin->delete();

        return response()->json(['status'=>true, 'message'=>'Admin deleted successfully.']);
    }
}
