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
use App\Contact;



class AttorneyProfileController extends BaseController
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
    public function index($id)
    {
        $attorney = Attorney::find($id);

        return view('attorney/attorney_profile')->with('attorney', $attorney);
    }

    public function showAddForm()
    {
        return view('attorney/attorney_add_form');
    }

    /**
    * store attorney data
    **/
    public function store(Request $request){
        $input = $request->all();
        $input['birthday']          = (!empty($input['birthday']) ? date('Y-m-d',strtotime($input['birthday'])) : null);
        $input['admitted_at_1']     = (!empty($input['admitted_at_1']) ? date('Y-m-d',strtotime($input['admitted_at_1'])) : null);
        $input['admitted_at_2']     = (!empty($input['admitted_at_2']) ? date('Y-m-d',strtotime($input['admitted_at_2'])) : null);
        $input['member_since']      = (!empty($input['member_since']) ? date('Y-m-d',strtotime($input['member_since'])) : null);
        $input['effective_date']    = (!empty($input['effective_date']) ? date('Y-m-d',strtotime($input['effective_date'])) : null);
        $input['effective_date2']   = (!empty($input['effective_date2']) ? date('Y-m-d',strtotime($input['effective_date2'])) : null);
        $input['effective_date3']   = (!empty($input['effective_date3']) ? date('Y-m-d',strtotime($input['effective_date3'])) : null);

        $profile = Attorney::create($input);

        return redirect('/search_all');
    }

    /**
    * update attorney data
    **/
    public function update(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'id' => 'required'
        ]);

        if($validator->fails()){
            Session::flash('popup_identity', $input['id']);
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $profile = Attorney::find($input['id']);

        if (is_null($profile)) {
            return $this->sendError('No Record', "There is no record.");
        }

        $profile->id                = $input['id'];
        $profile->first_name        = $input['first_name'];
        $profile->middle_name       = $input['middle_name'];
        $profile->last_name         = $input['last_name'];
        $profile->full_name         = $input['full_name'];
        $profile->salutation        = $input['salutation'];
        $profile->prefix            = $input['prefix'];
        $profile->suffix            = $input['suffix'];
        $profile->birthday          = (!empty($input['birthday']) ? date('Y-m-d',strtotime($input['birthday'])) : null);
        $profile->email             = $input['email'];
        $profile->address1          = $input['address1'];
        $profile->address2          = $input['address2'];
        $profile->address3          = $input['address3'];
        $profile->city              = $input['city'];
        $profile->city2             = $input['city2'];
        $profile->state             = $input['state'];
        $profile->state2            = $input['state2'];
        $profile->county            = $input['county'];
        $profile->counties          = $input['counties'];
        $profile->country           = $input['country'];
        $profile->district          = $input['district'];
        $profile->zipcode           = $input['zipcode'];
        $profile->zipcode2          = $input['zipcode2'];
        $profile->phone             = $input['phone'];
        $profile->toll_free         = $input['toll_free'];
        $profile->fax               = $input['fax'];
        $profile->website           = $input['website'];
        $profile->source_url        = $input['source_url'];
        $profile->admitted_at_1     = (!empty($input['admitted_at_1']) ? date('Y-m-d',strtotime($input['admitted_at_1'])) : null);
        $profile->admitted_at_2     = (!empty($input['admitted_at_2']) ? date('Y-m-d',strtotime($input['admitted_at_2'])) : null);
        $profile->description       = $input['description'];
        $profile->business_name     = $input['business_name'];
        $profile->business_phone    = $input['business_phone'];
        $profile->education         = $input['education'];
        $profile->graduated_at      = $input['graduated_at'];
        $profile->undergraduated_school = $input['undergraduated_school'];
        $profile->member_class      = $input['member_class'];
        $profile->member_status     = $input['member_status'];
        // $profile->is_public         = $input['is_public'];
        $profile->bar_number        = $input['bar_number'];
        $profile->registration_number = $input['registration_number'];
        $profile->bpr_number        = $input['bpr_number'];
        $profile->wsba_number       = $input['wsba_number'];
        $profile->overseers_number  = $input['overseers_number'];
        $profile->practice_area     = $input['practice_area'];
        $profile->practice_states   = $input['practice_states'];
        $profile->practice_countries = $input['practice_countries'];
        $profile->focus_area        = $input['focus_area'];
        $profile->languages         = $input['languages'];
        $profile->languages_law_office = $input['languages_law_office'];
        $profile->profession        = $input['profession'];
        $profile->bar_info          = $input['bar_info'];
        $profile->rating            = $input['rating'];
        $profile->image_url         = $input['image_url'];
        // $profile->is_premium        = $input['is_premium'];
        // $profile->review_counts     = $input['review_counts'];
        $profile->review_url        = $input['review_url'];
        $profile->endorsements_url  = $input['endorsements_url'];
        $profile->contributions_count = $input['contributions_count'];
        $profile->contributions_url = $input['contributions_url'];
        $profile->fee_payment_type  = $input['fee_payment_type'];
        $profile->contact_info2     = $input['contact_info2'];
        $profile->contact_info3     = $input['contact_info3'];
        $profile->contact_info4     = $input['contact_info4'];
        $profile->facebook          = $input['facebook'];
        $profile->twitter           = $input['twitter'];
        $profile->google_plus       = $input['google_plus'];
        $profile->linkedin          = $input['linkedin'];
        $profile->social_tools_url1 = $input['social_tools_url1'];
        $profile->social_tools_url2 = $input['social_tools_url2'];
        $profile->social_tools_url3 = $input['social_tools_url3'];
        $profile->social_tools_url4 = $input['social_tools_url4'];
        $profile->about_me_url      = $input['about_me_url'];
        $profile->client_reviews    = $input['client_reviews'];
        $profile->endorsements_count = $input['endorsements_count'];
        $profile->peer_endorsements_url = $input['peer_endorsements_url'];
        $profile->peer_endorsements_comment = $input['peer_endorsements_comment'];
        $profile->license           = $input['license'];
        $profile->work_experience   = $input['work_experience'];
        $profile->awards            = $input['awards'];
        $profile->associations      = $input['associations'];
        $profile->contribution      = $input['contribution'];
        $profile->cases             = $input['cases'];
        $profile->cases_url         = $input['cases_url'];
        $profile->publications      = $input['publications'];
        $profile->speaking_engagements = $input['speaking_engagements'];
        $profile->section_membership = $input['section_membership'];
        $profile->other_jurisdictions = $input['other_jurisdictions'];
        // $profile->professional_liability_insurance = $input['professional_liability_insurance'];
        $profile->history           = $input['history'];
        $profile->certified_speciality = $input['certified_speciality'];
        $profile->disciplinary_related_action = $input['disciplinary_related_action'];
        $profile->administrative_action = $input['administrative_action'];
        $profile->position_held     = $input['position_held'];
        $profile->reason_for_suspension = $input['reason_for_suspension'];
        // $profile->eligibility       = $input['eligibility'];
        $profile->judicial_position = $input['judicial_position'];
        $profile->firm_size         = $input['firm_size'];
        $profile->committees        = $input['committees'];
        $profile->advanced_degree   = $input['advanced_degree'];
        $profile->services          = $input['services'];
        $profile->federal_courts    = $input['federal_courts'];
        $profile->employer          = $input['employer'];
        $profile->paris             = $input['paris'];
        $profile->board_district    = $input['board_district'];
        $profile->judical_district  = $input['judical_district'];
        $profile->member_since      = (!empty($input['member_since']) ? date('Y-m-d',strtotime($input['member_since'])) : null);
        $profile->effective_date    = (!empty($input['effective_date']) ? date('Y-m-d',strtotime($input['effective_date'])) : null);
        $profile->case_number       = $input['case_number'];
        $profile->disciplinary_related_action2 = $input['disciplinary_related_action2'];
        $profile->effective_date2   = (!empty($input['effective_date2']) ? date('Y-m-d',strtotime($input['effective_date2'])) : null);
        $profile->case_number2      = $input['case_number2'];
        $profile->disciplinary_related_action3 = $input['disciplinary_related_action3'];
        $profile->effective_date3   = (!empty($input['effective_date3']) ? date('Y-m-d',strtotime($input['effective_date3'])) : null);
        $profile->case_number3      = $input['case_number3'];
        $profile->appellate_division_department = $input['appellate_division_department'];
        $profile->circuit_court     = $input['circuit_court'];
        $profile->locations         = $input['locations'];
        $profile->information_release = $input['information_release'];
        $profile->name_used         = $input['name_used'];
        $profile->tdd               = $input['tdd'];
        // $profile->has_insurance     = $input['has_insurance'];
        $profile->public_discipline = $input['public_discipline'];
        $profile->social_volunteer_organization = $input['social_volunteer_organization'];

        $profile->save();

        Session::flash('success', 'Profile has been updated successfully!');
        return Redirect::back();
    }

}

?>
