<?php

use Illuminate\Database\Seeder;
use  App\Admin;
use App\SiteDetails;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        'name'=>'abdullah zahid',
        'phone'=>'01780134797',
        'email'=>'abdullahzahidjoy@gmail.com',
        'avatar'=>'public\backend\img\joy2362.jpg',
        'password'=>Hash::make('2362'),
    ]);
        SiteDetails::create([
            'site_name'=>'KoreanShop',
            'address'=>'ishurdi',
            'about'=>'Korean Shop Bangladesh is all set to bring 100% authentic and the best of Korean Skincare products for Bangladeshi People at a reasonable price.',
            'logo'=>'public/media/sitelogo/koreanshopbd.png',
            'phone_1'=>'01794790598',
            'email'=>'Koreanshopbangladesh@gmail.com',
            'facebook_link'=>'Koreanshopbangladesh@gmail.com',
            'google_link'=>'Koreanshopbangladesh@gmail.com',
            'instagram_link'=>'Koreanshopbangladesh@gmail.com',
            'shiping_cost_inside_dhaka'=>'100',
            'shiping_cost_outside_dhaka'=>'150',
        ]);
    }
}
