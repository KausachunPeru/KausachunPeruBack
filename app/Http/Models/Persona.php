<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'persona';

    public $timestamps = false;

    protected $fillable = [
        'nombres','apellidos','dni','telefono','correo','cargo','idTipo','idProvincia'
    ];
}
