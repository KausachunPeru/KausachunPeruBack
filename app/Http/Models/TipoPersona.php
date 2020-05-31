<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    //
    protected $table = 'tipo_persona';

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
