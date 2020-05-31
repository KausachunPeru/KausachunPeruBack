<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPropuesta extends Model
{
    //
    protected $table = 'tipo_propuesta';

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
