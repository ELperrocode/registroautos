<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehiculo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_vehiculo';

    protected $fillable = [
        'placa',
        'marca_id',
        'modelo_id',
        'color_id',
        'tipo_vehiculo_id',
        'anio',
        'numero_motor',
        'numero_chasis',
    ];


    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id', 'id_marca');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id', 'id_modelo');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id_color');
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id', 'id_tipo');
    }
}
