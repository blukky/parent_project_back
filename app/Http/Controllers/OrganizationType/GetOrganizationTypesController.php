<?php

namespace App\Http\Controllers\OrganizationType;

use App\Http\Controllers\Controller;
use App\Http\Filters\OrganizationTypeFilter;
use App\Http\Requests\OrganizationType\GetOrganizationTypesRequest;
use App\Http\Resources\OrganizationType\GetOrganizationTypesResponse;
use App\Models\OrganizationType;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetOrganizationTypesController extends Controller
{
    public function __invoke(GetOrganizationTypesRequest $request)
    {
        $data = $request->validated();
        $query = OrganizationType::query();
        $filter = app()->make(OrganizationTypeFilter::class, ["queryParams" => array_filter($data)]);
        $organizationTypes = OrganizationType::filter($filter)->get();

        return GetOrganizationTypesResponse::collection($organizationTypes);
    }
}
