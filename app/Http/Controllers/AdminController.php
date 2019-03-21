<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Session;
use Redirect;
use Hash;
use Mail;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Routing\Route;
use Closure;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    private $uri_name;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(Request $request) {
        $this->uri_name = $request->route()->uri;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('uri_name',$this->uri_name);
    }

    /**
     * Get User Info.
     */
    public function getUserInfo()
    {
        $userInfo = DB::table('users')->where('id',Auth::user()->id)->first();
        return $userInfo;
    }

    /**
     * Show the profile page
     */
    public function profile()
    {
        $userInfo = DB::table('users')->where('id',Auth::user()->id)->first();
        return view('profile')->with('user_info',$userInfo)->with('uri_name',$this->uri_name);
    }

    /**
     * Update profile
     */
    public function profile_update()
    {
        $input = Input::all();
        if(!empty($input))
        {
            $res = DB::table('users')
                    ->where('id',Auth::user()->id)
                    ->update([
                        "email" => $input['email'],
                        "firstname" => $input['first_name'],
                        "lastname" => $input['last_name'],
                        "updated_at" => date('Y-m-d H:i:s')
                    ]);
            if($res)
            {
                Session::flash('succ', 'Profile has been updated successfully!');
            }
            else
            {
                Session::flash('error', 'Some internal issue occured. Please try again.');
            }
        }

        return redirect('/profile');
    }
    /**
     * Update profile pic
     */
    public function profilepic_update(Request $request)
    {
        if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);

            $res = DB::table('users')
                    ->where('id',Auth::user()->id)
                    ->update([
                        "avatar" => $name,
                        "updated_at" => date('Y-m-d H:i:s')
                    ]);
            if($res)
            {
                Session::flash('succ', 'Profile pic been updated successfully!');
            }
            else
            {
                Session::flash('error', 'Some internal issue occured. Please try again.');
            }

        }
        else
        {
            Session::flash('error', 'Profile pic is required.');
        }
        return redirect('/profile');
    }

    /**
     * Change Password
     */
    public function change_password(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $res = $user->save();

        return redirect()->back()->with("success","Password has been changed successfully!");

        //return redirect('/profile');
    }

    /**
     * Send Mail
     */
    public function send_mail()
    {

    }

    /**
     * Logout function
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}

?>
