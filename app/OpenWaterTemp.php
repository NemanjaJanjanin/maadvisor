<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenWaterTemp extends Model
{
    protected $table = 'openwater_tmp';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','first_name','last_name','email_address', 'company_name', 'title', 'mobile_phone'
    ];
}
