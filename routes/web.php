<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubCategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');
Route::get('/subcategorias/{id}', [SubCategoriaController::class, 'obtenerSubcategorias'])->name('subcategorias.obtener');
Route::get('/productos/{id}', [ProductoController::class, 'obtenerProductos'])->name('productos.obtener');
Route::get('/productos-detalle/{id}', [ProductoController::class, 'detalle'])->name('productos.detalle');