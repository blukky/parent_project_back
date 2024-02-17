<?php

namespace App\Http\Controllers\OrganizationType;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationType\CreateOrganizationTypeRequest;
use App\Http\Resources\OrganizationType\CreateOrganizationTypeResponse;
use App\Models\OrganizationType;
use Ramsey\Uuid\Uuid;

class CreateOrganizationTypeController extends Controller
{
    public function __invoke(CreateOrganizationTypeRequest $request )
    {
        $data = $request->validationData();
        $organizationType = OrganizationType::create([
            "name" => $data["name"]
        ]);
        return new CreateOrganizationTypeResponse( $organizationType );
    }
}
