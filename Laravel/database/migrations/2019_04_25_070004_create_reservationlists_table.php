<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservationlists', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->time('starttime');
            $table->time('endtime');
            $table->string('court');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservationlists');
    }
}
