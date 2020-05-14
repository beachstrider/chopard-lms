<?php

namespace DLW\Http\Controllers\Auth;
use DLW\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use DLW\Events\NotificationEvent;
use DLW\Models\Notification;
use DLW\Models\Admin;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
      $this->middleware('user.guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
      if(!$user->verified){
        auth()->logout();
        return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, Please check your email.');
      }

      if($user->already_login==0){
        $data = new Notification;
        $data->type = 'user';
        $data->title = 'New user is joined.';
        $data->message = $user->name.' has been joined into the Journey for the first time.';
        $data->url = '/admin/users';
        $data->icon = 'mdi mdi-account-network';
        $data->save();

        $admins = Admin::all();
        $data->admins()->saveMany($admins);
        
        event(new NotificationEvent($data));

        $user->already_login = 1;
      }

      $user->last_login = date("Y-m-d h:i:s");
      $user->save();  

      return redirect()->intended($this->redirectPath());
    }
}

