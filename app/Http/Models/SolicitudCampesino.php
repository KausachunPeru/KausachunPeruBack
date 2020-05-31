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

    public function estado()
    {
        return $this->belongsTo('App\Http\Models\Estado','idEstado','id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Http\Models\TipoAyuda','idTipo','id');
    }

    public function persona()
    {
        return $this->belongsTo('App\Http\Models\Persona','idPersona','id');
    }
}
