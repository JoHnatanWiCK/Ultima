<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'cliente'])->name('cliente');
Route::get('/menu', [App\Http\Controllers\ClienteController::class, 'menu'])->name('menu');
Route::get('/ordenar', [App\Http\Controllers\ClienteController::class, 'menu'])->name('ordenar');


Route::get('/crear', [App\Http\Controllers\DishController::class, 'create']);
Route::post('/plato/crear', [App\Http\Controllers\DishController::class, 'store'])->name('plato.store');
Route::get('/index',[App\Http\Controllers\DishController::class,'index'])->name('dish.index');
Route::get('show/{dish}',[App\Http\Controllers\DishController::class,'show'])->name('dish.show');
Route::get('edit/{dish}', [App\Http\Controllers\DishController::class, 'edit'])->name('dish.editar');
Route::put('update/{dish}',[App\Http\Controllers\DishController::class,'update'])->name('dish.update');
Route::delete('destroy/{dish}',[App\Http\Controllers\DishController::class,'destroy'])->name('dish.destroy');

Route::get('/indexC',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('/crearC', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/plato/crearC', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('showc/{category}',[App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
Route::get('editc/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.editar');
Route::put('updatec/{category}',[App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::delete('destroyc/{category}',[App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');


Route::get('/indexM',[App\Http\Controllers\tableController::class,'index'])->name('table.index');
Route::get('/crearM', [App\Http\Controllers\tableController::class, 'create']);
Route::post('/plato/crearM', [App\Http\Controllers\tableController::class, 'store'])->name('table.store');
Route::get('showM/{table}',[App\Http\Controllers\tableController::class,'show'])->name('table.show');
Route::get('editM/{table}', [App\Http\Controllers\tableController::class, 'edit'])->name('table.editar');
Route::put('updateM/{table}',[App\Http\Controllers\tableController::class,'update'])->name('table.update');
Route::delete('destroyM/{table}',[App\Http\Controllers\tableController::class,'destroy'])->name('table.destroy');