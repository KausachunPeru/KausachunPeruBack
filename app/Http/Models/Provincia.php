<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $table = 'provincia';

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
