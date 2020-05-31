<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudCampesino extends Model
{
    //
    protected $table = 'solicitud_campensino';

    public $timestamps = false;

    protected $fillable = [
        'detalle','comentario','fecha','idEstado','idTipo','idPersona'
    ];
}
