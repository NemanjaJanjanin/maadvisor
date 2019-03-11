<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Auth;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function signin()
    {
        $input = Input::all();

        $chkEmail = DB::table('users')
                        ->select('*')
                        ->where('email', '=', $input['email'])
                        ->first();

        if(!empty($chkEmail))
        {
            if($chkEmail->email_verified == 1)
            {
                $credentials = [
                    'email' => $input['email'],
                    'password' => $input['password'],
                ];

                if (Auth::attempt($credentials)) {
                    return redirect('/home');
                }
                else
                {
                    Session::flash('error', 'Password is wrong. Please enter correct password.');
                    return redirect('/login');
                }
            }
            else
            {
                Session::flash('error', 'OOPs! You cannot sign in. Please check your email to complete the verification process.');
                return redirect('/login');
            }
        }
        else
        {
            Session::flash('error', 'Email not registered. Please check and try again!');
            return redirect('/login');
        }

    }

    public function signup()
    {
        $input = Input::all();

        $chkEmail = DB::table('users')
                        ->select('*')
                        ->where('email', '=', $input['email'])
                        ->first();

        if(empty($chkEmail))
        {
            $email = $input['email'];
            $verification_code = $this->generateRandomString(5);
            //insertGetId
            //$id = DB::getPdo()->lastInsertId();;
            DB::table('users')->insert([
                "username"          => $input['fullname'],
                "email"             => $input['email'],
                "password"          => bcrypt($input['password']),
                "verification_code" => $verification_code,
                "email_verified"    => 0,
                "user_type"         => 1,
                "department_id"     => null,
                "status"            => 0,
                "role_id"           => 1,
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s')
            ]);
            $id = DB::getPdo()->lastInsertId();
            if($id)
            {
                $data = array('user_id'=>$id,"verification_code" => $verification_code,'username' => $input['fullname']);
                  Mail::send('verification_mailer', $data, function($message) use ($email) {
                     $message->to($email, 'You')->subject('Email Verification')
                     ->from(config('global.from_email'), 'Email Verification');
                  });

                Session::flash('succ', 'Registration has been done successfully! Please check your mail for verification.');
            }
            else
            {
                Session::flash('error', 'Some internal issue occured. Please try again!');
            }
        }
        else
        {
            Session::flash('error', 'Email already exists.');
        }
        return redirect('/login');
    }

    public function email_verification(Request $request)
    {
        $user_id = $request->user_id;
        $verification_code = $request->verification_code;
        if(!empty($user_id) && !empty($verification_code))
        {
            $chkUserInfo = DB::table('users')
                            ->select('*')
                            ->where('id', '=', $user_id)
                            ->first();
            if(!empty($chkUserInfo))
            {
                if($chkUserInfo->verification_code == $verification_code)
                {
                    $res = DB::table('users')
                            ->where('id',$user_id)
                            ->update([
                                "verification_code" => '',
                                "email_verified" => 1,
                                "updated_at" => date('Y-m-d H:i:s')
                            ]);
                    if($res)
                    {
                        Session::flash('succ', 'Your email has been verified. You can now sign in.');
                        return redirect('/login');
                        /*$userInfo = DB::table('users')->where('id', '=', $user_id)->first();
                        Auth::login($userInfo, true);
                        return redirect('/home');*/
                    }
                    else
                    {
                        Session::flash('error', 'Some internal issue occured. Please try again.');
                        return redirect('/login');
                    }
                }
                else
                {
                    Session::flash('error', 'Token Expire.');
                    return redirect('/login');
                }
            }
            else
            {
                Session::flash('error', 'Invalid User.');
                return redirect('/login');
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function forgot_password(Request $request)
    {
        $email = Input::get('email');
        $chkEmail = DB::table('users')
                        ->select('*')
                        ->where('email', '=', $email)
                        ->first();
        if(!empty($chkEmail))
        {
            $password = $this->generateRandomString();
            $res = DB::table('users')
                    ->where('id',$chkEmail->id)
                    ->update([
                        "password" => bcrypt($password),
                        "updated_at" => date('Y-m-d H:i:s')
                    ]);
            if($res)
            {
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <votivephp.akash@gmail.com>' . "\r\n";
                //$headers .= 'Cc: myboss@example.com' . "\r\n";

                $to = $chkEmail->email;
                $subject = 'Forget Password';
                $toemail = $chkEmail->email;
                $data = array('username'=>$chkEmail->username,"email" => $chkEmail->email,"password" => $password);
                  Mail::send('mails/reset_password', $data, function($message) use ($toemail) {
                     $message->to($toemail, 'You')->subject('Forget Password')
                     ->from(config('global.from_email'), 'Forget Password');
                  });

                Session::flash('succ', 'Please check your email to reset your password.');
            }
            else
            {
                Session::flash('error', 'Some internal issue occured. Please try again.');
            }
        }
        else
        {
            Session::flash('error', 'Email not registered.');
        }
        return redirect('/login');
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

?>
