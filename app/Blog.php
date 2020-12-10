<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id' ,'post_title', 'post_details','post_img'
    ];
    public function category()
    {
        return $this->belongsTo('App\PostCategory','category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Admin','author');
    }
}
