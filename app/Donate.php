<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable = ['name','contact_no','email','address','blood_group','comments'];
    public $table = 'donate';

}