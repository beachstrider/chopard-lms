<?php

namespace DLW\Http\Controllers\Admin\Auth;
use DLW\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function __construct()
    {
      $this->middleware('admin.guest')->except('logout');
    }

    public function redirectTo(){
      return '/admin';
    }

    protected function guard(){
      return Auth::guard('admin');
    }

    public function showLoginForm(){
      return view('admin.auth.login', ['url' => 'admin']);
    }

    public function logout(){
      Auth::guard('admin')->logout();
      return redirect()->route('dashboard');
    }

}

