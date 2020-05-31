<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estado';

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
