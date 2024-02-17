<?php

namespace App\Http\Controllers\LegalEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\LegalEntity\GetLegalEntityRequest;
use App\Http\Resources\LegalEntity\GetLegalEntityResponse;
use App\Models\LegalEntity;

class GetLegalEntityController extends Controller
{
    public function __invoke(GetLegalEntityRequest $request, $id)
    {


        $legal_entity = LegalEntity::findOrFail($id);

        dd($legal_entity->organization_type->name);

        return new GetLegalEntityResponse($legal_entity);
    }
}
