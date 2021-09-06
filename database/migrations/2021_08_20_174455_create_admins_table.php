<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type');
            $table->enum('user_role', ['super_admin', 'admin', 'moderator'])->nullable();
            $table->string('products')->nullable();
            $table->string('sales')->nullable();
            $table->string('flash_sales')->nullable();
            $table->string('coupons')->nullable();
            $table->string('page_content_setting')->nullable();
            $table->string('users')->nullable();
            $table->string('role')->nullable();
            $table->string('settings')->nullable();
            $table->string('pages')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
