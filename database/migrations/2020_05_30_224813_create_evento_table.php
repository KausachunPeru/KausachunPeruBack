<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('direccion');
            $table->string('imagen');
            $table->string('link');
            $table->date('fechaFin');
            $table->date('fechaIni');
            $table->integer('idEstado')->unsigned();
            $table->integer('idProvincia')->unsigned();
            $table->integer('idEntidad')->unsigned();

            $table->foreign('idEstado')->references('id')->on('estado')->onDelete('NO ACTION');
            $table->foreign('idProvincia')->references('id')->on('provincia')->onDelete('NO ACTION');
            $table->foreign('idEntidad')->references('id')->on('entidad')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
