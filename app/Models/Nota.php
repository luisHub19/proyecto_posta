<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'noticia'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'idnoticia';

    protected $fillable = [
        'titulo', 'pie_de_imagen', 'fecha', 'descripcion', 'clicks', 'autor', 'imagen', 'region_idregion', 'usuarios_idusuarios'
    ];

    // Aquí puedes agregar relaciones si es necesario
}
