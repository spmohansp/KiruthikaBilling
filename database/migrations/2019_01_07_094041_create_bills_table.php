<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('invoice');
            $table->string('date');
            $table->string('FREIGHT')->nullable();
            $table->string('HEIGHT_CASE')->nullable();
            $table->string('HOLTING')->nullable();
            $table->string('UNLOADING_CHARGES')->nullable();
            $table->string('TOTAL')->nullable();
            $table->string('ADVANCE')->nullable();
            $table->string('PENDING')->nullable();
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
        Schema::dropIfExists('bills');
    }
}
