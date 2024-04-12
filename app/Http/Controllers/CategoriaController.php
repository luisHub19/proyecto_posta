<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; // Cambio en el nombre del modelo

class CategoriaController extends Controller
{
    public function mostrarFormularioUpdate()
    {
        // Recuperar todas las categorías desde la base de datos
        $categorias = Categoria::all(); // Cambio en el nombre de la variable

        // Pasar las categorías a la vista
        return view('update', ['categorias' => $categorias]); // Cambio en el nombre de la variable
    }
}
