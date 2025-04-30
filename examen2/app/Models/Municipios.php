<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipios extends Model
{
    use HasFactory;

    protected $table = 'municipios';

    protected $fillable = [
        'descripcion',
        'departamentoId'
    ];

    public function departamento(): BelongsTo{
        return $this->belongsTo(Departamentos::class, 'departamentoId', 'id');
    }

    public function alumnos(): HasMany{
        return $this -> hasMany(Alumnos::class, 'municipioId', 'id');
    }

}
