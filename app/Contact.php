<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attorney extends Model
{
	protected $table = 'contact';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'id',
		'first_name',
		'middle_name',
		'last_name',
		'company_name',
		'title',
		'contact_role',
		'email_address',
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
		'account_name',
		'assistant_name',
		'assistant_email',
		'date_of_birth',
		'notes',
		'opted_in',
		'opted_out',
		'industry',
		'subsector',
		'other_subsector',
		'ip_address',
		'openwater_id',
		'cvent_id',
		'zoho_id',
		'outlook_id',
		'firm_type',
		'firm_type_other',
		'person_type',
		'from_where',
		'created_at',
		'updated_at',
    ];
}
