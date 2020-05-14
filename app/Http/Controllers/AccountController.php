<?php

namespace DLW\Http\Controllers;

use DLW\Models\User;
use DLW\Models\VerifyUser;
use DLW\Models\Country;
use Illuminate\Http\Request;
use DLW\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Storage;
use Auth;
use Newsletter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use DLW\Mail\ChangeMail;

class AccountController extends Controller
{
    public function __construct(){
        $this->middleware('user.guard');
    }

    public function index()
    {
        $myinfo = User::find(Auth::guard()->user()->id);

        return view('account.index', ['myinfo'=>$myinfo, ]);
    }

    public function changeAvatar(Request $request){
        $validatedData = $request->validate([
            'avatar' => '|image|mimes:jpeg,png,jpg,gif|max:10000|dimensions:max_width=2000,max_height=2000',
        ]);

        $user = User::find(Auth::guard()->user()->id);

        Storage::delete($user->avatar);
        $path = $request->file('avatar')->store('avatars');
        $user->avatar = $path;

        $user->save();
        return redirect('/account/basic');
    }

    public function show_profile(){
        $myinfo = User::find(Auth::guard()->user()->id);
        $myinfo->birth = date("d-m-Y", strtotime($myinfo->birth));
        $myinfo->birth = str_replace('-', '/', $myinfo->birth);
        $countries = Country::all();

        return view('account.profile', ['myinfo'=>$myinfo, 'countries'=>$countries]);
    }
    
    public function updateProfile(UpdateProfileRequest $request)
    {
        $myinfo = User::find(Auth::guard()->user()->id);
        
        $myinfo->name = $request->name;
        $myinfo->fname = $request->fname;
        $myinfo->phone = $request->phone;
        $myinfo->birth = $request->birth;
        $myinfo->birth = str_replace('/', '-', $myinfo->birth);
        $myinfo->birth = date("Y-m-d", strtotime($myinfo->birth));

        $myinfo->country = $request->country;
        $myinfo->city = $request->city;
        $myinfo->saleschannel = $request->saleschannel;
        $myinfo->position = $request->position;
        $myinfo->others = $request->others;
        $myinfo->profile_complete = true;
        
        $myinfo->save();
        
        // Newsletter::updateEmailAddress($email_old, $myinfo->email);
        
        return redirect('/account/profile');
    }
    
    public function show_email_notif(){
        $myinfo = User::find(Auth::guard()->user()->id);

        return view('account.email-notif', ['myinfo'=>$myinfo,]);
    }

    public function changeEmail(Request $request){
        $myinfo = User::find(Auth::guard()->user()->id);

        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $myinfo->email = $request->email;
        $myinfo->verified = 0;
        $myinfo->save();

        $verifyUser = VerifyUser::find($myinfo->id);

        if($verifyUser === null){
            $verifyUser = VerifyUser::create([
                'user_id' => $myinfo->id,
                'token' => str_random(40)
            ]);
        }else{
            $verifyUser->token = str_random(40);
            $verifyUser->save();
        }

        Mail::to($myinfo->email)->send(new ChangeMail($myinfo));

        return redirect('/account/email-notification')->with('notify', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

    public function verifyEmail($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser)){
            $user = $verifyUser->user;
            if(!$user->verified){
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();

                Newsletter::subscribe($user->email, ['firstName'=>$user->name, 'lastName'=>$user->fname]);
                
                $status = "Your email is verified.";
            }else{
                return redirect('/login')->with('warning', "Sorry. Your email cannot be identified.");
            }

            return redirect('/account/email-notification')->with('status',$status);
        }
    }

    public function show_password(){
        $myinfo = User::find(Auth::guard()->user()->id);

        return view('account.password', ['myinfo'=>$myinfo,]);
    }

    public function changePassword(Request $request){
        $myinfo = User::find(Auth::guard()->user()->id);

        $validatedData = $request->validate([
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'new_password_confirm' => 'required_with:password|same:new_password|min:6',
        ]);

        
        if(!Hash::check($validatedData['current_password'], $myinfo->password)){
            return redirect('/account/password')->with(['error'=>'Current password you entered doesn\'t match to your real password.']);
        }

        $myinfo->password = bcrypt($validatedData['new_password']);
        $myinfo->save();

        return redirect('/account/password')->with(['status'=>'Password changed successfully.']);
    }

    public function appToWhatsapp(Request $request){
        $myinfo = User::find(Auth::guard()->user()->id);

        $myinfo->appname = "whatsapp";
        $myinfo->appcode = $request->appcode;

        $myinfo->save();

        return redirect('/account/email-notification');
    }

    public function appToWechat(Request $request){
        $myinfo = User::find(Auth::guard()->user()->id);

        $myinfo->appname = "wechat";
        $myinfo->appcode = $request->appcode;
        
        $myinfo->save();

        return redirect('/account/email-notification');
    }

    public function destroy(User $user)
    {
        
    }
}
