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
use App\Http\Controllers\api\BaseController as BaseController;
//use Illuminate\Routing\Route;
use Closure;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\User;


class UserRoleController extends BaseController
{
    protected static $uri_name;
    protected static $departments;
    protected static $roles;

    public function __construct(Request $request) {
        self::$uri_name         = $request->route()->uri;
    }
    /**
     * Show the page
     */
    public function show(Request $request)
    {
        $user = Auth::user();
        if ($user->user_type <> "1") {
            return redirect('home');
        }

        // $uri_name = $request->route()->uri;
        //
        // $sql = sprintf(
        //         "SELECT *
        //         FROM 	users u
        //         ORDER BY u.department_id");
        //
        // $user_list = DB::select($sql);
        //
        // foreach ($user_list as $user) {
        //     $roles = User::find($user->id)->roles;
        //     $user->roles = $roles;
        // }
        //
        //
        // return view('admin/user_role/home')
        //      ->with('uri_name',self::$uri_name)
        //      ->with('user_list',$user_list)
        //      ->with('departments', self::$departments)
        //      ->with('roles', self::$roles);
        return view('admin/user_role/user_role');
    }

    public function showAddForm(Request $request)
    {
        $user = Auth::user();
        if ($user->user_type <> "1") {
            return redirect('home');
        }

        return view('admin/user_role/user_add_new');
    }

     public function setDepartment(Request $request)
     {
         $input = $request->all();

         $validator = Validator::make($input, [
            'id' => 'required|numeric',
            'department_id' => 'required|numeric',
         ]);

         if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $id = $request->get('id');
        $department_id = $request->get('department_id');

        $user = User::find($id);
        $user->department_id = $department_id;
        $user->save();

        return $this->sendResponse("Success", 'Department id has been chagned.');
     }

     public function setUserStatus(Request $request)
     {
         $input = $request->all();

         $validator = Validator::make($input, [
            'id' => 'required|numeric',
            'status' => 'required|numeric',
         ]);

         if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $id = $request->get('id');
        $status = $request->get('status');

        $user = User::find($id);
        $user->status = $status;
        $user->save();

        return $this->sendResponse("Success", 'Status has been chagned.');
     }

     public function setUserRole(Request $request){
         $input = $request->all();

         $validator = Validator::make($input, [
            'user_id' => 'required|numeric',
         ]);

         if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user_id = $request->get('user_id');
        $roles = $request->get('roles');

        $sql = sprintf(
            "DELETE FROM user_role WHERE user_id = %s", $user_id
        );
        $nrd = DB::delete($sql);

        if (!empty($roles)) {
            foreach ($roles as $role) {
                $record = array('user_id' => $user_id,
                                'role_id' => $role);
                $role = UserRole::create($record);
            }
        }

        return $this->sendResponse("Success", 'Role has been chagned.');
     }

     /**
      * set app stage
      */
     public function setAppStage(Request $request)
     {
         $input = $request->all();
         $validator = Validator::make($input, [
             'application_type'  => 'required|numeric',
             'application_id'    => 'required|numeric',
             'which_year'        => 'required|numeric',
         ]);

         if($validator->fails()){
             return $this->sendError('Validation Error.', $validator->errors());
         }

         $application_type   = $request->get('application_type');
         $application_id     = $request->get('application_id');
         $which_year         = $request->get('which_year');
         $stages             = $request->get('stages');

         $sql = sprintf(
             "DELETE FROM performance_date
             WHERE application_id = %s
             AND application_type = %s",
             $application_id, $application_type
         );
         DB::delete($sql);

         if (!empty($stages)) {
             foreach ($stages as $key => $stage_id) {
                 $sql = sprintf(
                     "INSERT INTO performance_date (application_type, stage_id, application_id, which_year)
                     VALUES (%s, %s, %s, %s)",
                     $application_type, $stage_id, $application_id, $which_year);
                 DB::insert($sql);
             }
         }

         return $this->sendResponse("Success", 'Stage has been chagned.');
     }

}

?>
