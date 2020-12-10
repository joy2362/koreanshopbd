<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('address');
            $table->string('logo');
            $table->string('phone_1');
            $table->text('about');
            $table->string('email');
            $table->string('facebook_link');
            $table->string('google_link');
            $table->string('instagram_link');
            $table->integer('shiping_cost_inside_dhaka');
            $table->integer('shiping_cost_outside_dhaka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_details');
    }
}
