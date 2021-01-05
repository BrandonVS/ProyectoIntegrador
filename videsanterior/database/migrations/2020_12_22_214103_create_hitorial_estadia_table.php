<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHitorialEstadiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitorial_estadia', function (Blueprint $table) {
            $table->string('idEstadia',10);
            $table->string('idEstablecimiento',10);
            $table->date('fecha');
            $table->tinyInteger('checkIn');
            $table->tinyInteger('checkOut');
            $table->tinyInteger('pernotaciones');
            $table->tinyInteger('habitOcupadas');
            $table->double('ventaNeta',6,2);
            $table->string('tipoTarifa',20);
            $table->double('prom_tarifa',6,2);
            $table->double('tarPer',6,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hitorial_estadia');
    }
}
