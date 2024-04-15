<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nota;

class NotaController extends Controller
{
    public function mostrarNoticiaNoticiaC()
    {
        // Recuperar todas las categorías desde la base de datos
         $notas = Nota::all(); // Cambio en el nombre de la variable
         $notasSlice = $notas->slice(1);
        // Pasar las categorías a la vista
        return view('nota', ['notas' => $notas]); // Cambio en el nombre de la variable
    }
    public function mostrarNoticiahome()
{
    // Recuperar todas las notas desde la base de datos
    $notas = Nota::get();

    // Pasar las notas a la vista
    return view('home', ['notas' => $notas]);
}



    public function mostrarNoticiamue()
    {
        $notas = App\Models\Noticia::orderBy('created_at', 'desc')->take(3)->get();
        // Recuperar todas las categorías desde la base de datos
         //$notas = Nota::all(); // Cambio en el nombre de la variable
         
        // Pasar las categorías a la vista
        return view('nota', ['notas' => $notas]); // Cambio en el nombre de la variable
    }
}
