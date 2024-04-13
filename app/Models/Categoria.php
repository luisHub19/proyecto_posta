<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'idcategoria'; // Nombre de la clave primaria

    public $timestamps = false; // Desactiva los campos de timestamp created_at y updated_at si no los tienes en la tabla

    // Aquí puedes agregar relaciones o métodos personalizados según tus necesidades
}
