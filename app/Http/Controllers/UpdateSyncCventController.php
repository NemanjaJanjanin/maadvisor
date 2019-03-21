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
use Excel;

use App\Http\Requests;
use App\Http\Controllers\api\BaseController as BaseController;
//use Illuminate\Routing\Route;
use Closure;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;



class UpdateSyncCventController extends BaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(Request $request) {

    }

    /**
     * Show the attory table and search form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/update_sync/cvent');
    }

}

?>
