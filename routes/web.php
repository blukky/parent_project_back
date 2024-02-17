<?php

use App\Http\Controllers\LegalEntity\CreateOrganizationTypeController;
use App\Http\Controllers\OrganizationType\GetOrganizationTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix("organizations")->group(function (){
    return [
        Route::get("/", GetOrganizationTypeController::class)
    ];
});



