<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderDetails extends Model
{
      protected $fillable = [
        'userId','product_id','quantity','unit_price','total_price','order_Id'
      ];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }

}
