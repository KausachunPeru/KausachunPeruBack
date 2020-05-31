<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('telefono');
            $table->string('correo');
            $table->string('cargo')->nullable();
            $table->integer('idTipo')->unsigned()->nullable();
            $table->integer('idProvincia')->unsigned()->nullable();

            $table->foreign('idTipo')->references('id')->on('tipo_persona')->onDelete('cascade');
            $table->foreign('idProvincia')->references('id')->on('provincia')->onDelete('cascade');
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
        Schema::dropIfExists('persona');
    }
}
