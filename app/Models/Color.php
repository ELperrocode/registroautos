<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Color extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_color';
    protected $fillable = [
        'nombre_color',
    ];

    public function colores (): HasMany
    {
        return $this->hasMany(Vehiculo::class);
    }


}
