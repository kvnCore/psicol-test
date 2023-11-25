<?php

// app/Http/Resources/ProfesorResource.php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfesorResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'documento' => $this->documento,
            'nombres' => $this->nombres,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'direccion' => $this->direccion,
            'ciudad' => $this->ciudad,
            
        ];
    }
}

