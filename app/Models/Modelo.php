<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Modelo extends Model
{
    use HasFactory;

     protected $primaryKey = 'id_modelo';

     protected $fillable = [
        'nombre_modelo',
        'marca_id',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id', 'id_marca');
    }
}
