<?php

use App\Http\Controllers\LeccionController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\UserController;
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



Route::group([
    'middleware' => 'api',
    'prefix' => 'leccion'
], function ($router) {
    Route::get('/{id}', [LeccionController::class, 'index']);
    Route::get('/{id}/preguntas', [LeccionController::class, 'get_leccion_preguntas']);
    Route::get('/', [LeccionController::class, 'index']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'user'
], function ($router) {
    Route::post('/', [UserController::class, 'login']);
});


