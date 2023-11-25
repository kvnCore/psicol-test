<?php

// app/Personas/Asignatura/Asignatura.php

namespace App\Personas\Asignatura;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asignatura extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'creditos',
        'area_de_conocimiento',
        'electiva',
    ];

    public function estudiantes(): HasMany
    {
        return $this->hasMany(Estudiante::class);
    }
}
