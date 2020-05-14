<?php

namespace DLW\Http\Controllers\Auth;
use DLW\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('user.guest');
    }
}
