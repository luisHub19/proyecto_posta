<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;

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
Route::get('/', function() {
    return view ('welcome');
});

Route::get('/update', function(){
    return view ('update');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/update', [CategoriaController::class, 'mostrarFormularioUpdate'])->name('update');

//Route::get('/update', [UsuarioController::class, 'mostrarFormularioUpdate'])->name('update');

Route::post('/update', [App\Http\Controllers\NoticiaController::class, 'guardar'])->name('update');


