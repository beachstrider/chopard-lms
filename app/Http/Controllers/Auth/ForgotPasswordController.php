<?php

namespace DLW\Http\Controllers\Auth;
use DLW\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('user.guest')->except('showLinkRequestForm');
    }
}
