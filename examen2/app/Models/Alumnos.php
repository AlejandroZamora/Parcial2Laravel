<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumnos extends Model
{
    use HasFactory;

    protected $table='alumnos';

    protected $fillable=[
            'carnet',
            'nombre',
            'apellidos',
            'telefono',
            'correo',
            'direccion',
            'municipioId'
    ];

    public function municipio(): BelongsTo {
        return $this->belongsTo(Municipios::class, 'municipioId', 'id');
    }
}
