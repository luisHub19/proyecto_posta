<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\newsController;

Route::get('/home', HomeController::class) ->name ('home');
Route::get('/secciones/{seccion}', [SeccionController::class, 'seccion']) ->name ('seccion');
Route::get('/secciones', [SeccionController::class, 'secciones']) ->name ('secciones');
Route::get('home/nota', [SeccionController::class, 'nota']) ->name ('noticia');
Route::get('/news', [newsController::class, 'index']) ->name ('news');