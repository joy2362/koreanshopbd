<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    protected $fillable = [
        'product_id', 'title','description','description'
    ];
    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
