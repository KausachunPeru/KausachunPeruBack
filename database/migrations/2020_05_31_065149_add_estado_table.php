<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\Estado;

class AddEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $estado = new Estado();
        $estado->nombre = "Aprobado";
        $estado->save();

        $estado = new Estado();
        $estado->nombre = "Rechazado";
        $estado->save();

        $estado = new Estado();
        $estado->nombre = "Pendiente";
        $estado->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
