<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('business_name')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('address')->nullable();
            $table->string('GST')->nullable();
            $table->string('PAN')->nullable();
            $table->string('notes')->nullable();
            $table->string('truck_number')->nullable();
            $table->string('consigment_number')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
