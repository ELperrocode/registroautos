<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tipo';
    protected $fillable = [
        'nombre_tipo',
    ];

}
