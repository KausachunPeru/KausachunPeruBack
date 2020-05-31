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

    public function estado()
    {
        return $this->belongsTo('App\Http\Models\Estado','idEstado','id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Http\Models\TipoPropuesta','idTipo','id');
    }

    public function entidad()
    {
        return $this->belongsTo('App\Http\Models\Entidad','idEntidad','id');
    }
}
