<?php

namespace DLW\Http\Controllers\Auth;

use DLW\Models\User;
use DLW\Models\VerifyUser;
use DLW\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DLW\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Mail;
use DLW\Mail\VerifyMail;
use Newsletter;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('user.guest');
    }

    public function showUserRegisterForm(){
        return view('auth.register');
    }

    protected function create(RegisterRequest $data)
    {
        $password = str_random(8);
        $user = User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($password),
        ]);
        $user->password = $password;

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));

        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to validate.');
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser)){
            $user = $verifyUser->user;
            if(!$user->verified){
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();

                Newsletter::subscribe($user->email, ['First Name'=>$user->name]);
                
                $status = "Your e-mail is validated. You can now login.";
            }else{
                return redirect('/login')->with('warning', "Sorry. Your email cannot be identified.");
            }

            return redirect('/login')->with('status',$status);
        }
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
}
