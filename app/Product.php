<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'brand_id','product_name', 'product_code','product_quantity','skin_type_id','skin_concern_id','product_stock',
         'product_details','how_to_use','product_ingredient','selling_price','discount_price',
        'video_link','main_slider', 'flash_sale', 'img_1','img_2','img_3','status','trend'
    ];
    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand','brand_id');
    }
    public function skintype()
    {
        return $this->belongsTo('App\SkinType','skin_type_id');
    }
    public function skinconcern()
    {
        return $this->belongsTo('App\SkinConcern','skin_concern_id');
    }
}
