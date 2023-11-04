<?php

use App\Http\Controllers\RegistroNacimientoController;
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

//API-lista
Route::get("index",[RegistroNacimientoController::class,"index"])->name("api-getAll");
//API-guardar utilizamos la funcion que ya teniamos de guardar
Route::put('create', [RegistroNacimientoController::class, 'create'])->name('api-saveZom');
