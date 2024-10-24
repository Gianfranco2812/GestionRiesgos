<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoActivoController;
use App\Http\Controllers\EstrategiaController;
use App\Http\Controllers\ControlesController;
use App\Http\Controllers\AmenazaController;
use App\Http\Controllers\MitigacionController;
use App\Http\Controllers\ProcesoController;


Route::get('/', function () {
    return view('index');
});



//RUTAS TIPOS DE ACTIVO---------------------------------------------------------------------------------------
Route::get('tipos-activo', [TipoActivoController::class, 'index'])->name('tipos-activo.index');
Route::get('tipos-activo/create', [TipoActivoController::class, 'create'])->name('tipos-activo.create');
Route::post('tipos-activo', [TipoActivoController::class, 'store'])->name('tipos-activo.store');
Route::get('tipos-activo/{id}/edit', [TipoActivoController::class, 'edit'])->name('tipos-activo.edit');
Route::put('tipos-activo/{id}', [TipoActivoController::class, 'update'])->name('tipos-activo.update');
Route::delete('tipos-activo/{id}', [TipoActivoController::class, 'destroy'])->name('tipos-activo.destroy');
//------------------------------------------------------------------------------------------------------------



Route::get('/estrategias', [EstrategiaController::class, 'index'])->name('estrategias.index'); // Mostrar lista de estrategias
Route::get('/estrategias/create', [EstrategiaController::class, 'create'])->name('estrategias.create'); // Mostrar formulario de creación
Route::post('/estrategias', [EstrategiaController::class, 'store'])->name('estrategias.store'); // Almacenar nueva estrategia
Route::get('/estrategias/{id}/edit', [EstrategiaController::class, 'edit'])->name('estrategias.edit'); // Mostrar formulario de edición
Route::put('/estrategias/{id}', [EstrategiaController::class, 'update'])->name('estrategias.update'); // Actualizar estrategia
Route::delete('/estrategias/{id}', [EstrategiaController::class, 'destroy'])->name('estrategias.destroy'); // Eliminar estrategia


Route::get('/controles', [ControlesController::class, 'index'])->name('controles.index');
Route::get('/controles/create', [ControlesController::class, 'create'])->name('controles.create');
Route::post('/controles', [ControlesController::class, 'store'])->name('controles.store');
Route::get('/controles/{idcontrol}', [ControlesController::class, 'show'])->name('controles.show');
Route::get('/controles/{idcontrol}/edit', [ControlesController::class, 'edit'])->name('controles.edit');
Route::put('/controles/{idcontrol}', [ControlesController::class, 'update'])->name('controles.update');
Route::delete('/controles/{idcontrol}', [ControlesController::class, 'destroy'])->name('controles.destroy');



Route::get('/amenazas', [AmenazaController::class, 'index'])->name('amenazas.index');
Route::get('/amenazas/create', [AmenazaController::class, 'create'])->name('amenazas.create');
Route::post('/amenazas', [AmenazaController::class, 'store'])->name('amenazas.store');
Route::get('/amenazas/{idamenaza}', [AmenazaController::class, 'show'])->name('amenazas.show');
Route::get('/amenazas/{idamenaza}/edit', [AmenazaController::class, 'edit'])->name('amenazas.edit');
Route::put('/amenazas/{idamenaza}', [AmenazaController::class, 'update'])->name('amenazas.update');
Route::delete('/amenazas/{idamenaza}', [AmenazaController::class, 'destroy'])->name('amenazas.destroy');



Route::get('/mitigaciones', [MitigacionController::class, 'index'])->name('mitigaciones.index'); // Mostrar lista de mitigaciones
Route::get('/mitigaciones/create', [MitigacionController::class, 'create'])->name('mitigaciones.create'); // Formulario para crear nueva mitigación
Route::post('/mitigaciones', [MitigacionController::class, 'store'])->name('mitigaciones.store'); // Guardar nueva mitigación
Route::get('/mitigaciones/{id}/edit', [MitigacionController::class, 'edit'])->name('mitigaciones.edit'); // Formulario para editar una mitigación
Route::put('/mitigaciones/{id}', [MitigacionController::class, 'update'])->name('mitigaciones.update'); // Actualizar una mitigación
Route::get('/mitigaciones/{id}', [MitigacionController::class, 'show'])->name('mitigaciones.show'); // Ver detalles de una mitigación
Route::delete('/mitigaciones/{id}', [MitigacionController::class, 'destroy'])->name('mitigaciones.destroy'); // Eliminar una mitigación



Route::get('/procesos', [ProcesoController::class, 'index'])->name('procesos.index'); // Mostrar lista de procesos
Route::get('/procesos/create', [ProcesoController::class, 'create'])->name('procesos.create'); // Formulario para crear nuevo proceso
Route::post('/procesos', [ProcesoController::class, 'store'])->name('procesos.store'); // Guardar nuevo proceso
Route::get('/procesos/{id}/edit', [ProcesoController::class, 'edit'])->name('procesos.edit'); // Formulario para editar un proceso
Route::put('/procesos/{id}', [ProcesoController::class, 'update'])->name('procesos.update'); // Actualizar un proceso
Route::get('/procesos/{id}', [ProcesoController::class, 'show'])->name('procesos.show'); // Ver detalles de un proceso
Route::delete('/procesos/{id}', [ProcesoController::class, 'destroy'])->name('procesos.destroy'); // Eliminar un proceso
