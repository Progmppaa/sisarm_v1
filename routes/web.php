<?php

use Illuminate\Support\Facades\Route;
// Principales
Route::get('/', function () { return redirect ('login');});

Route::get('/home', [App\Http\Controllers\Principal::class, 'index'])->name('inicio');

// Route::get('/home', function () {
//     return view ('/principal/inicio');
// })->name('inicio');

// Extras
Route::get('/extras/armas', [App\Http\Controllers\Principal::class, 'armas'])->name('armas');
Route::get('/extras/dependencias', [App\Http\Controllers\Principal::class, 'dependencias'])->name('dependencias');
Route::get('/extras/personas', [App\Http\Controllers\Principal::class, 'personal'])->name('personas');
Route::get('/extras/estados', [App\Http\Controllers\EstadosController::class, 'index'])->name('estados');
// Administracion
Route::get('/administracion/personal', [App\Http\Controllers\PersonasController::class, 'index'])->name('personal');
Route::post('/administracion/personal/store', [App\Http\Controllers\PersonasController::class, 'store'])->name('personal-store');
Route::post('/administracion/personal/edit/{id}', [App\Http\Controllers\PersonasController::class, 'update'])->name('personal-edit');
Route::get('/administracion/personal/delete/{id}', [App\Http\Controllers\PersonasController::class, 'destroy'])->name('personal-destroy');
Route::get('/administracion/OrdenPublico', [App\Http\Controllers\OrdenPublicosController::class, 'index'])->name('OrdenPublico');
Route::get('/administracion/municiones', [App\Http\Controllers\MunicionesController::class, 'index'])->name('municiones');
Route::get('/administracion/optronicos', [App\Http\Controllers\OptronicosController::class, 'index'])->name('optronicos');

Route::get('/grado', [App\Http\Controllers\GradoMilitarController::class, 'index'])->name('grado');


// Material de guerra
Route::get('/tramites/material_de_guerra', [App\Http\Controllers\MovimientoDeMaterialController::class, 'index'])->name('material');
Route::post('/tramites/material_de_guerra/store', [App\Http\Controllers\MovimientoDeMaterialController::class, 'store'])->name('material-store');
Route::post('/tramites/material_de_guerra/edit/{id}', [App\Http\Controllers\MovimientoDeMaterialController::class, 'update'])->name('material-edit');
Route::get('/tramites/material_de_guerra/delete/{id}', [App\Http\Controllers\MovimientoDeMaterialController::class, 'destroy'])->name('material-destroy');
// Comando de Zona
Route::get('/administracion/comandos_de_zona', [App\Http\Controllers\ComandoDeZonaController::class, 'index'])->name('comandos');
Route::post('/administracion/comandos_de_zona/store', [App\Http\Controllers\ComandoDeZonaController::class, 'store'])->name('comando-store');
Route::post('/administracion/comandos_de_zona/edit/{id}', [App\Http\Controllers\ComandoDeZonaController::class, 'update'])->name('comando-edit');
Route::get('/administracion/comandos_de_zona/delete/{id}', [App\Http\Controllers\ComandoDeZonaController::class, 'destroy'])->name('comando-destroy');
// Destacamento
Route::get('/administracion/destacamentos', [App\Http\Controllers\DestacamentoController::class, 'index'])->name('destacamento');
Route::post('/administracion/destacamentos/store', [App\Http\Controllers\DestacamentoController::class, 'store'])->name('destacamento-store');
Route::post('/administracion/destacamentos/edit/{id}', [App\Http\Controllers\DestacamentoController::class, 'update'])->name('destacamento-edit');
Route::get('/administracion/destacamentos/delete/{id}', [App\Http\Controllers\DestacamentoController::class, 'destroy'])->name('destacamento-destroy');
// Compañia
Route::get('/administracion/companias', [App\Http\Controllers\CompaniaController::class, 'index'])->name('companias');
Route::post('/administracion/compania/store', [App\Http\Controllers\CompaniaController::class, 'store'])->name('compania-store');
Route::post('/administracion/compania/edit/{id}', [App\Http\Controllers\CompaniaController::class, 'update'])->name('compania-edit');
Route::get('/administracion/compania/delete/{id}', [App\Http\Controllers\CompaniaController::class, 'destroy'])->name('compania-destroy');
// Armamento
Route::get('/administracion/armamento', [App\Http\Controllers\ArmasController::class, 'index'])->name('armamento');
Route::post('/administracion/armamento/store', [App\Http\Controllers\ArmasController::class, 'store'])->name('armamento-store');
Route::post('/administracion/armamento/edit/{id}', [App\Http\Controllers\ArmasController::class, 'update'])->name('armamento-edit');
Route::get('/administracion/armamento/delete/{id}', [App\Http\Controllers\ArmasController::class, 'destroy'])->name('armamento-destroy');

// INVENTARIOS
// Armamento
Route::get('/inventario/armamento', [App\Http\Controllers\InventarioArmasController::class, 'index'])->name('inv-armamento');
Route::post('/inventario/armamento/store', [App\Http\Controllers\InventarioArmasController::class, 'store'])->name('inv-armamento-store');
Route::post('/inventario/armamento/edit', [App\Http\Controllers\InventarioArmasController::class, 'update'])->name('inv-armamento-edit');
Route::post('/inventario/armamento/delete', [App\Http\Controllers\InventarioArmasController::class, 'destroy'])->name('inv-armamento-destroy');

// municiones
Route::get('/inventario/municiones', [App\Http\Controllers\InventarioArmasController::class, 'index'])->name('inv-municiones');
Route::post('/inventario/municiones/store', [App\Http\Controllers\InventarioArmasController::class, 'store'])->name('inv-municiones-store');
Route::post('/inventario/municiones/edit', [App\Http\Controllers\InventarioArmasController::class, 'update'])->name('inv-municiones-edit');
Route::post('/inventario/municiones/delete', [App\Http\Controllers\InventarioArmasController::class, 'destroy'])->name('inv-municiones-destroy');

// Explisivos
Route::get('/inventario/explisivos', [App\Http\Controllers\InventarioArmasController::class, 'index'])->name('inv-explosivos');
Route::post('/inventario/explisivos/store', [App\Http\Controllers\InventarioArmasController::class, 'store'])->name('inv-explosivos-store');
Route::post('/inventario/explisivos/edit', [App\Http\Controllers\InventarioArmasController::class, 'update'])->name('inv-explosivos-edit');
Route::post('/inventario/explisivos/delete', [App\Http\Controllers\InventarioArmasController::class, 'destroy'])->name('inv-explosivos-destroy');
Auth::routes();