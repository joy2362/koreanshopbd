<?php

use Illuminate\Database\Seeder;
use  App\Admin;
use App\SiteDetails;
use App\AdminAccess;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name ='abdullah zahid';
        $admin->phone ='01780134797';
        $admin->email ='abdullahzahidjoy@gmail.com';
        $admin->avatar ='public\backend\img\joy2362.jpg';
        $admin->password =Hash::make('2362');
        $admin->save();

        $access = new AdminAccess();
        $access->user = $admin->id;
        $access->category = 1;
        $access->coupon = 1;
        $access->product = 1;
        $access->order = 1;
        $access->blog = 1;
        $access->site_setting = 1;
        $access->other = 1;
        $access->access = 1;
        $access->save();


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
