<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marca extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_marca';

    protected $fillable = [
        'nombre_marca',
    ];
    
    public function modelos()
    {
        return $this->hasMany(Modelo::class, 'marca_id', 'id_marca');
    }
}
