<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = ['patients_name','contact_no','blood_group','required_date','doctors_name','hospital_details','comments'];   
}