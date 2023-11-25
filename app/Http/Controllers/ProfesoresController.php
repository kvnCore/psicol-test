<?php

// app/Http/Controllers/ProfesoresController.php

use App\Models\Personas\Profesor;
use App\Http\Resources\ProfesorResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfesoresController extends Controller
{
    // Métodos del controlador

    public function index()
    {
        $profesores = Profesor::all();
        return ProfesorResource::collection($profesores);
    }

    public function store(Request $request)
    {
        $request->validate([
            'documento' => 'required|string',
            'nombres' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email|unique:profesores,email',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
        ]);

        $profesor = Profesor::create($request->all());

        return new ProfesorResource($profesor);
    }

    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return new ProfesorResource($profesor);
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);

        $request->validate([
            'documento' => 'required|string',
            'nombres' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email|unique:profesores,email,' . $profesor->id,
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
        ]);

        $profesor->update($request->all());

        return new ProfesorResource($profesor);
    }

    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();

        return response()->json(['message' => 'El profesor ha sido eliminado correctamente'], 200);
    }
}
