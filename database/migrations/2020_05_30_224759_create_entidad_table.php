<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('telefono');
            $table->string('correo');
            $table->string('paginaWeb');
            $table->string('logo');
            $table->date('fecha');
            $table->integer('idEstado')->unsigned();
            $table->integer('idContacto')->unsigned();

            $table->foreign('idEstado')->references('id')->on('estado')->onDelete('cascade');
            $table->foreign('idContacto')->references('id')->on('persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidad');
    }
}
