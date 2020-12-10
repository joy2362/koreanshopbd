<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Coupon extends Model
{
    protected $fillable = [
        'code', 'discount','status','amount','limit','used','newsletter'
    ];

}
