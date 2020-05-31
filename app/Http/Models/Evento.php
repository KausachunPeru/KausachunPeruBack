<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table = 'evento';

    public $timestamps = false;

    protected $fillable = [
        'nombre','descripcion','direccion','imagen','link','fechaFin','fechaIni','idEstado','idProvincia', 'idEntidad'
    ];
}
