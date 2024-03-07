<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservacion', function () {
    return view('reservacion');
});

Route::get('/admin', function () {
    return view('admin');
});

// Rutas para el controlador CategoriaController

// LISTAR LAS CATEGORIAS
Route::get('/list_categoria', [CategoriaController::class, 'index'])->name('index');

// CREAR CATEGORIA === FORMULARIO
Route::get('/crear_categoria', [CategoriaController::class, 'categoria_create'])->name('categoria_create');


// RUTA PARA GUARDAR LA CATEGORIA === DB
Route::post('/create_categoria', [CategoriaController::class, 'store'])->name('create_categoria');

// VISTA PARA EDITAR 
Route::get('/update_categoria/{category}',[CategoriaController::class,'update_categoria'])->name('update_categoria');

// RUTA PARA EDITAR UNA CATEGORIA 
Route::put('/update/{category}', [CategoriaController::class, 'update'])->name('update');

// MODIFICAR EL ESTADO DE LA CATEGORIA
Route::put('/update_status/{category}', [CategoriaController::class, 'updateStatus'])->name('update_status');
