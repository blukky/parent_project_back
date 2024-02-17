<?php

namespace App\Http\Resources\LegalEntity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetLegalEntitiesResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "include_at" => $this->include_at,
            "full_name" => $this->full_name,
            "short_name" => $this->short_name,
            "brand_name" => $this->brand_name,
            "short_name_illegal" => $this->short_name_illegal,
            "organization_type" => $this->organization_type ? $this->organization_type->name: null,
            "institution_type" => $this->institution_type ?  $this->institution_type->name : null,
            "iin" => $this->iin,
            "kpp" => $this->kpp,
            "registration_at" => $this->registration_at
        ];
    }
}
