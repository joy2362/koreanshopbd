<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'userId','order_Id','name','email','phone','amount','address','status','delivery_cost','delivery_date'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','userId');
    }
    public function order()
    {
        return $this->hasMany('App\orderDetails','id');
    }



}
