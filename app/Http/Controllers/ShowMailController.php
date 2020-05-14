<?php

namespace DLW\Http\Controllers;

use DLW\Models\User;
use Illuminate\Http\Request;

class ShowMailController extends Controller
{
    public function showVerifyEmail($id, $password){
        $user = User::find($id);
        $user->password = $password;

        return view('mails.verifyUser', ['user'=>$user]);
    }
}
