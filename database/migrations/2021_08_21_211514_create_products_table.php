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
            $table->increments('id');
            $table->string('p_name');
            $table->string('p_name_arabic')->nullable();
            $table->longText('p_desc');
            $table->longText('p_desc_arabic')->nullable();
            $table->string('p_category_id');
            $table->string('p_sub_category_id')->nullable();
            $table->string('p_price');
            $table->string('p_o_price')->nullable();
            $table->string('p_brand_id');
            $table->string('p_o_p_s_date')->nullable();
            $table->string('p_o_p_e_date')->nullable();
            $table->string('p_stock')->nullable();
            $table->string('p_size')->nullable();
            $table->string('p_featured')->nullable();
            $table->string('p_flash_sell')->nullable();
            $table->string('status');
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
