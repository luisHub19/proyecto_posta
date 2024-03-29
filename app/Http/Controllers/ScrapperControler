<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ScraperController extends Controller
{
    public function scrap()
    {
        $client = new Client();

        //envia una solicitud get a la url y guarda la respuesta en la variable response
        $response = $client->request('GET', 'https://www.jornada.com.mx/noticia/2024/03/12/politica/presenta-galvez-ante-alumnos-del-iteso-sus-propuestas-de-campana-6217');

        $htmlContent = $response->getBody()->getContents(); // obtiene el contenido HTML de la respuesta y lo guarda en htmlContent

        $soup = BeautifulSoup($htmlContent, "html.parser"); // esto es para analizar una secuencia de simbolos como texto para entenderlo y extraer la informacion importante

        $titulo = $soup.find("title").text; // extraer el título

        $imagen = $soup.find("img", class_="imagen-noticia").get("src"); // extraer la imagen

        $texto = $soup.find("div", class_="texto-noticia").text; // extraer el texto de la noticia

        // crear array JSON
        $json_data = [
            "titulo" => $titulo,
            "imagen" => $imagen,
            "texto" => $texto,
        ];

        // Guardar el JSON en un archivo
        file_put_contents("noticias.json", json_encode($json_data));

        return response()->json("Información scrapeada y guardada en noticias.json");
    }
}