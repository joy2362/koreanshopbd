<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminAccess extends Model
{
    protected $fillable = [
        'user','category','coupon','product','order','blog','site_setting','other','access'
    ];
}
