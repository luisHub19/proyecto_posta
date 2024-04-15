<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $noticias = app('App\Http\Controllers\NoticiaController')->obtenerNoticias();
        return response()->json($noticias);
    }
}
