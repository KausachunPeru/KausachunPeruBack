<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudCampensinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_campensino', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('detalle');
            $table->string('comentario');
            $table->date('fecha');
            $table->integer('idEstado')->unsigned();
            $table->integer('idTipo')->unsigned();
            $table->integer('idPersona')->unsigned();

            $table->foreign('idEstado')->references('id')->on('estado')->onDelete('cascade');
            $table->foreign('idTipo')->references('id')->on('tipo_ayuda')->onDelete('cascade');
            $table->foreign('idPersona')->references('id')->on('persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_campensino');
    }
}
