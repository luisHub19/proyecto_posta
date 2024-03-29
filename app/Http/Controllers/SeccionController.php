<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionController extends Controller
{
    public function seccion($seccion){
        return view('seccion', compact('seccion'));
    }
    public function secciones(){
        return view('notas.secciones');
    }
    public function nota(){
        return view('notas.nota');
    }
}
