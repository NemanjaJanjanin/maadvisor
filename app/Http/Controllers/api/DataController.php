<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\api\BaseController as BaseController;
use File;
use Validator;
use DB;
use Mail;

class DataController extends BaseController
{
    protected $columns = ['id', 'first_name', 'middle_name', 'last_name', 'birthday', 'email', 'state',
                        'county', 'city', 'phone', 'business_phone', 'zipcode', 'bar_number', 'practice_area'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->sendAjaxDataResponse("ABCD", 'Products retrieved successfully.');
    }

    public function getAttorneyDataSet(Request $request){

        $input = $request->all();

        $total_count = DB::table('attorney')->count();

        $order = $input['order'][0];
        $column = $this->columns[$order['column']];
        $sort = $order['dir'];


        $sql = sprintf(
                "SELECT a.id,
                        a.first_name,
                        a.middle_name,
                        a.last_name,
                        a.suffix,
                        a.email,
                        a.address1,
                        a.address2,
                        a.address3,
                        a.city,
                        a.state,
                        a.county,
                        a.country,
                        a.district,
                        a.zipcode,
                        a.phone,
                        a.fax,
                        a.website,
                        a.business_name,
                        a.business_phone,
                        a.member_status,
                        a.bar_number,
                        a.practice_area,
                        a.id as 'actions'
                FROM    attorney a
                ORDER BY a.%s %s
                LIMIT %s, %s",
                $column, $sort,
                $input['start'], $input['length']
            );

        $attorney_data = DB::select($sql);
        $filtered_count = count($attorney_data);

        if ($filtered_count == 0){
            return $this->sendAjaxDataResponse(json_decode(json_encode($attorney_data)), $total_count, $total_count, 'No Data', $input);
        }else{
            return $this->sendAjaxDataResponse(json_decode(json_encode($attorney_data)), $total_count, $total_count, 'Attorney Data', $input);
        }
    }

}
