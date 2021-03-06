<?php

use App\Http\Controllers\API\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pacientes', [PatientController::class, 'index']);
Route::post('pacientes', [PatientController::class, 'store']);
Route::get('pacientes/{paciente}', [PatientController::class, 'show']);
Route::put('pacientes/{paciente}', [PatientController::class, 'update']);
Route::delete('pacientes/{paciente}', [PatientController::class, 'destroy']);