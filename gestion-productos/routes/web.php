<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

/*Productos*/
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

/*Formulario para crear productos*/
Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.create');

/*Guarda un nuevo producto*/
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

/*Formulario paara crear productos*/
Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name('productos.edit');

/*Actualiza el producto*/
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

/*Elimina un producto*/
Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
