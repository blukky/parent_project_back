<?php

namespace App\Http\Controllers\OrganizationType;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationType\GetOrganizationTypeRequest;
use App\Http\Resources\OrganizationType\GetLegalEntityResponse;
use App\Models\OrganizationType;
use Ramsey\Uuid\Uuid;

class GetOrganizationTypeController extends Controller
{
    public function __invoke(GetOrganizationTypeRequest $request, $id): GetLegalEntityResponse
    {
        $organizationType = OrganizationType::findOrFail($id);
        return new GetLegalEntityResponse($organizationType);
    }
}
