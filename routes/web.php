<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactosController;

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
    return view('inicio');
})->name("inicio");

Route::prefix('categorias')->group(function () {
   Route::get('/', [CategoriaController::class, 'index'])->name('categoria.index');
   Route::get('/agregar', [CategoriaController::class, 'create'])->name('categoria.create');
   Route::get('/editar/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');
   Route::get('/eliminar/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
   Route::post('/guardar', [CategoriaController::class, 'store'])->name('categoria.store');
   Route::put('/actualizar/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
   Route::delete('/destruir/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
});


Route::prefix('contactos')->group(function () {
    Route::get('/', [ContactosController::class, 'index'])->name('contacto.index');
    Route::get('/agregar', [ContactosController::class, 'create'])->name('contacto.create');
    Route::get('/editar/{id}', [ContactosController::class, 'edit'])->name('contacto.edit');
    Route::get('/eliminar/{id}', [ContactosController::class, 'show'])->name('contacto.show');
    Route::post('/guardar', [ContactosController::class, 'store'])->name('contacto.store');
    Route::put('/actualizar/{id}', [ContactosController::class, 'update'])->name('contacto.update');
    Route::delete('/destruir/{id}', [ContactosController::class, 'destroy'])->name('contacto.destroy');
 });
