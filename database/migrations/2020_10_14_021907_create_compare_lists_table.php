<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompareListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compare_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uId');
            $table->bigInteger('productId');
            $table->softDeletes();
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
        Schema::table('compare_lists', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
