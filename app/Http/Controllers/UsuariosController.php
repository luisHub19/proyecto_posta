<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo de usuario si no lo has hecho

class UsuarioController extends Controller
{
    public function mostrarFormularioUpdate()
    {
        $usuarios = User::all();
        return view('update', ['usuarios' => $usuarios]);
    }
}