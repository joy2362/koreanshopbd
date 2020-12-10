<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    protected $fillable = [
        'product_id','user_id','comment','rating'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
