<?php
// app/Http/Controllers/UsersController.php

use App\Models\Personas\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    // Métodos del controlador

    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function store(Request $request)
    {
        $request->validate([
            'documento' => 'required|string',
            'nombres' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'semestre' => 'required|string',
        ]);

        $user = User::create($request->all());

        return new UserResource($user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'documento' => 'required|string',
            'nombres' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'semestre' => 'required|string',
        ]);

        $user->update($request->all());

        return new UserResource($user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'El usuario ha sido eliminado correctamente'], 200);
    }
}
