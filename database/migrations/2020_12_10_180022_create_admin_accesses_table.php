<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_accesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user');
            $table->boolean('category')->default('0');
            $table->boolean('coupon')->default('0');
            $table->boolean('product')->default('0');
            $table->boolean('order')->default('0');
            $table->boolean('blog')->default('0');
            $table->boolean('site_setting')->default('0');
            $table->boolean('other')->default('0');
            $table->boolean('access')->default('0');
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
        Schema::dropIfExists('admin_accesses');
    }
}
