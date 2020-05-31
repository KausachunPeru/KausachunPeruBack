<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\TipoPropuesta;

class AddTipoPropuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $type = new TipoPropuesta();
        $type->nombre = "Propuesta nueva";
        $type->save();

        $type = new TipoPropuesta();
        $type->nombre = "Entidad de apoyo";
        $type->save();

        $type = new TipoPropuesta();
        $type->nombre = "Programa existente";
        $type->save();

        $type = new TipoPropuesta();
        $type->nombre = "Mejora";
        $type->save();

        $type = new TipoPropuesta();
        $type->nombre = "Otros";
        $type->save();
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
