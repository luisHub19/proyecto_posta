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
         $notas = Nota::first(); // Cambio en el nombre de la variable

        // Pasar las categorías a la vista
        return view('nota', ['notas' => $notas]); // Cambio en el nombre de la variable
    }
    public function mostrarNoticiahome()
    {
        // Recuperar todas las categorías desde la base de datos
         $notas = Nota::first(); // Cambio en el nombre de la variable

        // Pasar las categorías a la vista
        return view('home', ['notas' => $notas]); // Cambio en el nombre de la variable
    }

    public function mostrarNoticiamue()
    {
        // Recuperar todas las categorías desde la base de datos
         $notas = Nota::first(); // Cambio en el nombre de la variable

        // Pasar las categorías a la vista
        return view('nota', ['notas' => $notas]); // Cambio en el nombre de la variable
    }
}
