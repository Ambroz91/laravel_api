<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FirmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'nip' => $this->nip,
            'address' => $this->address,
            'city' => $this->city,
            'postal' => $this->postal,
            'employees' => $this->worker
        ];
    }
}
