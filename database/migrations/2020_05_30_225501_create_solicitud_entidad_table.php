<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudEntidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_entidad', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('detalle');
            $table->string('comentario');
            $table->date('fecha');
            $table->integer('idEstado')->unsigned();
            $table->integer('idTipo')->unsigned();
            $table->integer('idEntidad')->unsigned();

            $table->foreign('idEstado')->references('id')->on('estado')->onDelete('NO ACTION');
            $table->foreign('idTipo')->references('id')->on('tipo_propuesta')->onDelete('NO ACTION');
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
        Schema::dropIfExists('solicitud_entidad');
    }
}
