<?php

namespace App\Models\Personas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Profesor extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'documento',
        'nombres',
        'telefono',
        'email',
        'direccion',
        'ciudad',
    ];
}
