<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\User;
use DLW\Models\Country;
use DLW\Models\VerifyUser;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use DLW\Http\Requests\Admin\CreateUserRequest;
use DLW\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Support\Facades\Mail;
use DLW\Mail\UserMail;
use DLW\Mail\VerifyMail;
use Newsletter;
use DLW\Jobs\UserNotJoinNotification;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }
    
    public function index()
    {
        $users = User::all();
        $countries = Country::all();
        return view('admin.users.index', ['title'=>'User Management', 'users'=>$users, 'countries'=>$countries]);
    }

    public function create()
    {
        return view('admin.users.create', ['title'=>'Create User']);
    }

    public function store(CreateUserRequest $request)
    {
        $password = str_random(8);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->verified = false;

        $user->save();

        $user->password = $password;

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));

        dispatch((new UserNotJoinNotification($user))->delay(now()->addDays(5)));

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $countries = Country::all();

        return view('admin.users.edit', ['title'=>'Edit User', 'user'=>$user, 'countries'=>$countries]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $email_old = $user->email;

        $user->name = $request->name;
        $user->fname = $request->fname;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if(!empty($request->password)){
        	$user->password = bcrypt($request->password);
        }

        $user->birth = $request->birth;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->saleschannel = $request->saleschannel;
        $user->position = $request->position;
        $user->others = $request->others;
        $user->appname = $request->appname;
        $user->appcode = $request->appcode;

        $user->save();

        if($email_old != $user->email){
            Newsletter::updateEmailAddress($email_old, $user->email);
        }
        
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        Newsletter::delete($user->email);
        $user->delete();

        return response()->json(['status'=>true, 'message'=>'User deleted successfully.']);
    }

    public function deleteMultiple(Request $request){
        $ids = explode(',', $request->ids);
        $users = User::find($ids);
        
        foreach ($users as $user) {
            Newsletter::delete($user->email);
        }
        
        User::whereIn('id', $ids)->delete();

        return response()->json(['status'=>true, 'message'=>'Users deleted successfully.']);
    }

    public function mailform($id)
    {
        $user = User::find($id);

        return view('admin.users.mail', ['title'=>'Mailing Form', 'user'=>$user]);
    }

    public function mailto(Request $request)
    {
        Mail::to($request->address)->send(new UserMail($request));

        return redirect()->route('users.index');
    }
}
