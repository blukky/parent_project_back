<?php

namespace App\Http\Controllers\LegalEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\LegalEntity\GetLegalEntitiesRequest;
use App\Http\Requests\LegalEntity\GetLegalEntityRequest;
use App\Http\Resources\LegalEntity\GetLegalEntitiesResponse;
use App\Models\LegalEntity;

class GetLegalEntitiesController extends Controller
{
    public function __invoke(GetLegalEntitiesRequest $request)
    {
        $data = $request->validated();
        return [
                "count" => LegalEntity::count(),
                "data" => GetLegalEntitiesResponse::collection(
                    LegalEntity::query()->skip($data["offset"])->take($data["limit"])->get())
            ];
    }
}
