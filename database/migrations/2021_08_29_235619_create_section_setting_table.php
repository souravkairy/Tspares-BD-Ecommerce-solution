<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_setting', function (Blueprint $table) {
            $table->id();
            $table->string('sec1Text')->nullable();
            $table->string('sec1catName')->nullable();
            $table->string('sec1Image')->nullable();
            $table->string('sec1BtnLink')->nullable();
            $table->string('sec2Text')->nullable();
            $table->string('sec2Image')->nullable();
            $table->string('sec2BtnLink')->nullable();
            $table->string('sec2Heading')->nullable();
            $table->string('sec3Text')->nullable();
            $table->string('sec3Image')->nullable();
            $table->string('sec3BtnLink')->nullable();
            $table->string('sec4Heading')->nullable();
            $table->string('sec4Text')->nullable();
            $table->string('sec4Image')->nullable();
            $table->string('sec4BtnLink')->nullable();
            $table->string('sec5Heading')->nullable();
            $table->string('sec5Text')->nullable();
            $table->string('sec5Image')->nullable();
            $table->string('sec5BtnLink')->nullable();
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
        Schema::dropIfExists('section_setting');
    }
}
