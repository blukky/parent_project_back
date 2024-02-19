<?php

use App\Http\Controllers\InstitutionType\CreateInstitutionTypeController;
use App\Http\Controllers\OrganizationType\CreateOrganizationTypeController;
use App\Http\Controllers\LegalEntity\GetLegalEntitiesController;
use App\Http\Controllers\LegalEntity\GetLegalEntityController;
use App\Http\Controllers\InstitutionType\GetInstitutionTypeController;
use App\Http\Controllers\InstitutionType\GetInstitutionTypesController;
use App\Http\Controllers\OrganizationType\GetOrganizationTypeController;
use App\Http\Controllers\OrganizationType\GetOrganizationTypesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("organizations")->group(function (){
    return [
        Route::get("/", GetOrganizationTypesController::class),
        Route::post("/", CreateOrganizationTypeController::class),
        Route::get("/{id:uuid}", GetOrganizationTypeController::class)
    ];
});


Route::prefix("institutions")->group(function (){
    return [
        Route::get("/", GetInstitutionTypesController::class),
        Route::post("/", CreateInstitutionTypeController::class),
        Route::get("/{id:uuid}", GetInstitutionTypeController::class)
    ];
});


Route::prefix("legal_entities")->group(function (){
    return [
        Route::get("/", GetLegalEntitiesController::class),
        Route::post("/", CreateInstitutionTypeController::class),
        Route::get("/{id}", GetLegalEntityController::class)
    ];
});

