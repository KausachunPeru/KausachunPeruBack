<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAyuda extends Model
{
    //
    protected $table = 'tipo_ayuda';

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
