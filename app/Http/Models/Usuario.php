<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuario';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'password',
    ];
}
