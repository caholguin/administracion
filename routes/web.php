<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    
    Route::resource('proyectospp', ProyectoController::class)->names('proyectospp');

    Route::resource('personas', PersonaController::class)->names('personas');

    Route::get('/proyectospp/{proyecto}/cambiarEstado/', [ProyectoController::class, 'cambiarEstado'])->name('proyectospp.cambiarEstado');

    Route::get('/personas/{persona}/cambiarEstado/', [PersonaController::class, 'cambiarEstado'])->name('personas.cambiarEstado');   
    
    Route::get('reporte/personas/', [PersonaController::class, 'reporte'])->name('personas.reporte');

    Route::get('file-export', [PersonaController::class, 'fileExport'])->name('file-export');

});

