<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InternResource extends JsonResource
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
            'pseudo_name' => $this->pseudo_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'university' => $this->university,
            'year_of_study' => $this->year_of_study,
            'resume' => $this->resume,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
