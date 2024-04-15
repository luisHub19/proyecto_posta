<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'idnoticia'; // Nombre de la clave primaria

    protected $fillable = [
        'titulo', 'imagen', 'pie_de_imagen', 'descripcion', 'autor', 'region_idregion'
    ];

    // Relación con categorías
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_has_noticia', 'noticia_idnoticia', 'categoria_idcategoria');
    }



}
