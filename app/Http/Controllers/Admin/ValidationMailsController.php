<?php

namespace DLW\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;
use jdavidbakr\MailTracker\Model\SentEmail;
use jdavidbakr\MailTracker\Model\SentEmailUrlClicked;
use Illuminate\Support\Facades\DB;
use DLW\Models\User;
use DLW\Models\VerifyUser;
use Illuminate\Support\Facades\Mail;
use DLW\Mail\VerifyMail;

class ValidationMailsController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index(){
        $validationMails = DB::table('sent_emails')->select(DB::raw('*, count(*) as sent_count, sum(opens) as open_counts, sum(clicks) as click_counts'))->where('subject', 'Validate Mail – Chopard Parfums Training')->groupBy('recipient')->get();

        return view('admin.validationMails.index', ['title'=>'ValidationMails', 'validationmails'=>$validationMails]);
    }

    public function send($id){
        $sentemail = SentEmail::find($id);

        $password = str_random(8);
        $email = substr($sentemail->recipient, 2, -1);
        $user = User::where('email', $email)->first();
        $user->password = bcrypt($password);

        $user->save();

        $user->password = $password;

        $verifyUser = VerifyUser::where('user_id', $user->id)->first();
        $verifyUser->token = str_random(40);
        $verifyUser->save();

        Mail::to($user->email)->send(new VerifyMail($user));
        
        return response()->json(['status'=>true, 'message'=>'Mail is sent successfully.']);
    }
}
