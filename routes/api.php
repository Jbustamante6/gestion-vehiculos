<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ItinerarioController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::post('/vehiculos', [VehiculoController::class, 'store']);
    Route::get('/vehiculos', [VehiculoController::class, 'index']);
    Route::get('/vehiculos/showAdapter/{id}', [VehiculoController::class, 'showAdapter']);
    Route::post('/paquete/procesar', [PaqueteController::class, 'process']);
    Route::post('/itinerarios', [ItinerarioController::class, 'store']);
    Route::get('/itinerarios', [ItinerarioController::class, 'index']);
});