<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_propietario';

    protected $table = 'propietarios';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'tipo',
        'cip',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'propietario_id', 'id_propietario');
    }
}