<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function guardar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:45',
            'imagen' => 'required|string|max:45',
            'pie_de_imagen' => 'nullable|string|max:45',
            'descripcion' => 'nullable|string',
            'autor' => 'required|string|max:45',
            'region_idregion' => 'required|integer',
           // 'usuarios_idusuarios' => 'required|integer',
        ]);

        // Guardar la noticia en la base de datos
        $noticia = new Noticia();
        $noticia->titulo = $request->titulo;
        $noticia->imagen = $request->imagen;
        $noticia->pie_de_imagen = $request->pie_de_imagen;
        $noticia->descripcion = $request->descripcion;
        $noticia->autor = $request->autor;
        $noticia->region_idregion = $request->region_idregion;
        //$noticia->usuarios_idusuarios = $request->usuarios_idusuarios;
        $noticia->save();
        $noticia->categorias()->attach($request->categorias);
        // Redireccionar a alguna vista o página
        return redirect()->route('home');
    }
}
