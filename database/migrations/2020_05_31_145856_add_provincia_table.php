<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\Provincia;

class AddProvinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $provincia = new Provincia();
        $provincia->nombre = "Amazonas";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Ancash";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Apurímac";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Arequipa";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Ayacucho";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Cusco";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Huancavelica";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Ica";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Junín";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "La Libertad";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Lambayeque";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Lima";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Loreto";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Madre de Dios";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Moquegua";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Piura";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Puno";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "San Martín";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Tacna";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Tumbes";
        $provincia->save();

        $provincia = new Provincia();
        $provincia->nombre = "Ucayali";
        $provincia->save();
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
