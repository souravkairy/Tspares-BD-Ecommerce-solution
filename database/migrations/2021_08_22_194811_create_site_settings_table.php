<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('siteLogo')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkdein')->nullable();
            $table->string('youtube')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('shipping_crg')->nullable();
            $table->string('androidAppLink')->nullable();
            $table->string('iosAppLink')->nullable();
            $table->string('address')->nullable();
            $table->string('bankDetails')->nullable();
            $table->string('susTextOne')->nullable();
            $table->longtext('susTextDescOne')->nullable();
            $table->string('susTextTwo')->nullable();
            $table->longtext('susTextDescTwo')->nullable();
            $table->string('susTexthree')->nullable();
            $table->longtext('susTextDescThree')->nullable();
            $table->string('susImage')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
}
