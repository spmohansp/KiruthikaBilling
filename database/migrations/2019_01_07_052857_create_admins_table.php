<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('logo')->nullable();
            $table->string('logo_text')->nullable();
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('bill_prefix')->nullable();
            $table->string('bill_start_number')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('gst')->nullable();
            $table->string('pan')->nullable();
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
        Schema::drop('admins');
    }
}
