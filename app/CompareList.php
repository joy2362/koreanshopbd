<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompareList extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uId','productId'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product','productId');
    }

}
