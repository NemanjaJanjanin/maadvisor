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
use \PDO;

use App\Http\Requests;
use App\Http\Controllers\api\BaseController as BaseController;
//use Illuminate\Routing\Route;
use Closure;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\OpenWaterTemp;



class UpdateSyncOpenWaterController extends BaseController
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
        return view('admin/update_sync/openwater');
    }

    /**
     * Sync OpenWater Contact Data
     */
    public function SyncOpenWaterContactData(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'csv_file' => 'required'
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('csv_file')) {
            $csv_file = $request->file('csv_file');
            $name = date('mdYHis') . uniqid().'.'.$csv_file->getClientOriginalExtension();
            $destination_path = public_path('/uploads');
            $path = $destination_path. "/".  $name;
            $csv_file->move($destination_path, $name);

            $data = array_map('str_getcsv', file($path));
            $count = count($data) - 1;

            if ($count > 0) {
                DB::statement("SET NAMES latin1");
                OpenWaterTemp::truncate();
                $csv_data = array_slice($data, 1, count($data));
                foreach ($csv_data as $key => $value) {
                    $info = array('email_address'   => $value[0],
                                'first_name'        => $value[8],
                                'last_name'         => $value[9],
                                'company_name'      => $value[10],
                                'title'             => $value[11],
                                'mobile_phone'      => $value[12]);
                    $temp_data = OpenWaterTemp::create($info);
                }
                unlink($path);

                $sql = "INSERT INTO contact
                        (first_name, last_name, email_address, company_name, title, mobile_phone, from_where)
                        SELECT ot.first_name, ot.last_name, ot.email_address, ot.company_name, ot.title, ot.mobile_phone, 2
                        FROM openwater_tmp ot
                        WHERE NOT EXISTS (SELECT 1
                        					   FROM contact c
                        					   WHERE c.email_address = ot.email_address)";

                $db = DB::connection()->getPdo();
                $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
                $query = $db->prepare($sql);
                $query->execute();

            } else {
                return Redirect::back();
            }
        }
        Session::flash('success', 'CSV has been submitted successfully!');
        return redirect('/update_sync/openwater');
    }

}

?>
