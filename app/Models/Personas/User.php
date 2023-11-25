<?php

namespace App\Models\Personas;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = [
        'documento',
        'nombres',
        'telefono',
        'email',
        'direccion',
        'ciudad',
        'semestre',
    ];
}