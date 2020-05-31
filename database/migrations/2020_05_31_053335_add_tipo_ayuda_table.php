<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\TipoAyuda;

class AddTipoAyudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $type = new TipoAyuda();
        $type->nombre = "Asesoramiento comercial y/o Técnico";
        $type->save();

        $type = new TipoAyuda();
        $type->nombre = "Financiamiento con intereses preferenciales";
        $type->save();

        $type = new TipoAyuda();
        $type->nombre = "Medios para distribución";
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
