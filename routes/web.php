<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\CategoriaController;


Route::get('/update', function(){
    return view ('update');
});


Route::get('/home', HomeController::class) ->name ('home');
Route::get('/secciones/{seccion}', [SeccionController::class, 'seccion']) ->name ('seccion');
Route::get('/secciones', [SeccionController::class, 'secciones']) ->name ('secciones');
Route::get('home/nota', [SeccionController::class, 'nota']) ->name ('noticia');
Route::get('/news', [newsController::class, 'index']) ->name ('news');
Route::get('/update', [CategoriaController::class, 'mostrarFormularioUpdate'])->name('update');
Route::get('/home', [ 'mostrarNoticiaNoticiaC()'])->name('home');
Route::get('/home', [App\Http\Controllers\NotaController::class, 'mostrarNoticiahome'])->name('home');
Route::get('/nota', [App\Http\Controllers\NotaController::class, 'mostrarNoticiaNoticiaC'])->name('nota');
//Route::get('home/nota', [App\Http\Controllers\NotaController::class, 'mostrarNoticiaNoticiaC'])->name('nota');

Route::post('/update', [App\Http\Controllers\NoticiaController::class, 'guardar'])->name('update');