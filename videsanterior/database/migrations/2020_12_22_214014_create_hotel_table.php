<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->string('idEstablecimiento',10);
            $table->string('nombre', 10);
            $table->enum('categoria',['2 Estrellas', '3 Estrellas', '4 Estrellas', '5 Estrellas']);
            $table->tinyInteger('numHabitaciones');
            $table->tinyInteger('plazas');
            $table->tinyInteger('empTemp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel');
    }
}
