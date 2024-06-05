<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    // la tabla asociada al modelo Producto
    // si no se especifica, Laravel asume que la tabla se llama 'productos'
    // lo asume por defecto en base al nombre del modelo en plural
    protected $fillable = ['nombre', 'descripcion', 'precio', 'imagen'];
    use HasFactory;
}
