<?php

namespace App\Http\Resources\Director;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetDirector extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
