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
    protected $columns = ['id',
                'first_name',
                'middle_name',
                'last_name',
                'email_address',
                'date_of_birth',
                'company_name',
                'title',
                'mobile_phone',
                'work_phone',
                'other_phone',
                'address',
                'address1',
                'city',
                'state',
                'zip',
                'province',
                'country',
                'region',
                'website',
                'twitter',
                'linkedin',
                'facebook',
                'whatsapp',
                'opted_in',
                'opted_out'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->sendAjaxDataResponse("ABCD", 'Products retrieved successfully.');
    }

    public function getContactDataSet(Request $request){

        $input = $request->all();

        $total_count = DB::table('contact')->count();

        $order = $input['order'][0];
        $column = $this->columns[$order['column']];
        $sort = $order['dir'];


        $sql = sprintf(
                "SELECT c.id,
                        c.first_name,
                        c.middle_name,
                        c.last_name,
                        c.email_address,
                        c.date_of_birth,
                        c.company_name,
                        c.title,
                        c.mobile_phone,
                        c.work_phone,
                        c.other_phone,
                        c.address,
                        c.address1,
                        c.city,
                        c.state,
                        c.zip,
                        c.province,
                        c.country,
                        c.region,
                        c.website,
                        c.twitter,
                        c.linkedin,
                        c.facebook,
                        c.whatsapp,
                        c.opted_in,
                        c.opted_out,
                        c.id as 'actions'
                FROM    contact c
                ORDER BY c.%s %s
                LIMIT %s, %s",
                $column, $sort,
                $input['start'], $input['length']
            );

        $contact_data = DB::select($sql);
        $filtered_count = count($contact_data);

        if ($filtered_count == 0){
            return $this->sendAjaxDataResponse(json_decode(json_encode($contact_data)), $total_count, $total_count, 'No Data', $input);
        }else{
            return $this->sendAjaxDataResponse(json_decode(json_encode($contact_data)), $total_count, $total_count, 'Contact Data', $input);
        }
    }

}
