<?php
// app/Http/Controllers/AsignaturasController.php

namespace App\Http\Controllers;

use App\Personas\Asignatura\Asignatura;
use App\Http\Resources\AsignaturaResource;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return AsignaturaResource::collection($asignaturas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'creditos' => 'required|integer',
            'area_de_conocimiento' => 'required|string',
            'electiva' => 'required|boolean',
        ]);

        $asignatura = Asignatura::create($request->all());

        return new AsignaturaResource($asignatura);
    }

    public function show($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        return new AsignaturaResource($asignatura);
    }
}
