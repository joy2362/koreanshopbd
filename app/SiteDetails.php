<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteDetails extends Model
{
    protected $fillable = [
        'site_name', 'address','about', 'logo','phone_1', 'email','facebook_link','google_link','instagram_link','shiping_cost_inside_dhaka','shiping_cost_outside_dhaka'
    ];
}
