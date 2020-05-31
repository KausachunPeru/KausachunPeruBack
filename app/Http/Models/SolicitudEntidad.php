<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudEntidad extends Model
{
    //
    protected $table = 'solicitud_entidad';

    public $timestamps = false;

    protected $fillable = [
        'detalle','comentario','fecha','idEstado','idTipo','idEntidad'
    ];
}
