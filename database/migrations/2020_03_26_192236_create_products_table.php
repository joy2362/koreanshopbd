<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_quantity');
            $table->integer('skin_type_id');
            $table->integer('skin_concern_id');
            $table->integer('product_stock');
            $table->longText('product_details');
            $table->longText('how_to_use');
            $table->longText('product_ingredient');
            $table->integer('selling_price');
            $table->integer('discount_price')->nullable();
            $table->string('video_link')->nullable();
            $table->boolean('main_slider')->nullable();
            $table->boolean('flash_sale')->nullable();
            $table->boolean('trend')->nullable();
            $table->string('img_1');
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('products');
    }
}
