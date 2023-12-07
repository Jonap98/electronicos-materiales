<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Responsivas\ResponsivasController;
use App\Http\Controllers\Catalogos\DispositivosController;
use App\Http\Controllers\Catalogos\AreasController;
use App\Http\Controllers\Catalogos\TiposController;
use App\Http\Controllers\Catalogos\ProcesosController;
use App\Http\Controllers\Catalogos\ModelosController;
use App\Http\Controllers\Checklist\ChecklistController;
use App\Http\Controllers\auth\AuthController;

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



// =====================================================================
// Auth
// =====================================================================
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('usuarios', [AuthController::class, 'getUsers'])->name('usuarios');
Route::post('usuarios/update', [AuthController::class, 'update'])->name('usuarios.update');

// ===============================================================================
// Catálogos
// ===============================================================================
// Dispositivos
Route::get('catalogos/dispositivos', [DispositivosController::class, 'index'])->name('catalogos.areas');
Route::get('catalogos/dispositivos/assetnames', [DispositivosController::class, 'getAssetNames'])->name('catalogos.areas.assetnames');
Route::post('catalogos/dispositivos/store', [DispositivosController::class, 'store'])->name('catalogos.areas.store');

// Áreas
Route::get('catalogos/areas', [AreasController::class, 'index'])->name('catalogos.areas');
Route::post('catalogos/areas/store', [AreasController::class, 'store'])->name('catalogos.areas.store');

// Tipos
Route::get('catalogos/tipos', [TiposController::class, 'index'])->name('catalogos.tipos');

// Procesos
Route::get('catalogos/procesos', [ProcesosController::class, 'index'])->name('catalogos.procesos');

// Modelos
Route::get('catalogos/modelos', [ModelosController::class, 'index'])->name('catalogos.modelos');
Route::post('catalogos/modelos/store', [ModelosController::class, 'store'])->name('catalogos.modelos.store');

// ===============================================================================
// Responsivas
// ===============================================================================
Route::get('responsivas', [ResponsivasController::class, 'index'])->name('responsivas');


// ===============================================================================
// Checklist
// ===============================================================================
// Registrar
Route::get('checklist', [ChecklistController::class, 'index'])->name('checklist');
Route::post('checklist/store', [ChecklistController::class, 'store'])->name('checklist/store');
