<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    //
    protected $table = 'entidad';

    public $timestamps = false;

    protected $fillable = [
        'nombre','descripcion','telefono','correo','paginaWeb','logo','fecha','idEstado','idContacto'
    ];
}
