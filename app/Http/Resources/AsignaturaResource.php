<?php

// app/Http/Resources/AsignaturaResource.php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AsignaturaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'creditos' => $this->creditos,
            'area_de_conocimiento' => $this->area_de_conocimiento,
            'electiva' => $this->electiva,
            'estudiantes' => EstudianteResource::collection($this->whenLoaded('estudiantes')),
            // Puedes agregar más campos o relaciones según sea necesario
        ];
    }
}
