<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        // Decodificar el JSON proporcionado
        $json = '{
            "headers": {},
            "original": [
                {
                    "idnoticia": 1,
                    "titulo": "ofdgtriow|",
                    "pie_de_imagen": "ewigewpin",
                    "fecha": null,
                    "descripcion": "jhfvi",
                    "clicks": null,
                    "autor": "ñewjfw",
                    "imagen": "idwgtjweko|",
                    "region_idregion": null,
                    "usuarios_idusuarios": null,
                    "updated_at": "2024-04-12T18:37:50.000000Z",
                    "created_at": "2024-04-12T18:37:50.000000Z"
                }
                // Aquí agregar más noticias si es necesario
            ]
        }';

        $data = json_decode($json, true);

        // Filtrar los datos para el formato deseado
        $noticias = [];
        foreach ($data['original'] as $noticia) {
            $noticias[] = [
                'idnoticia' => $noticia['idnoticia'],
                'titulo' => $noticia['titulo'],
                'imagen' => $noticia['imagen']
            ];
        }

        // Devolver los datos en formato JSON
        return response()->json($noticias);
    }
}
