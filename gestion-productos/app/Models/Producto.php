<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /*Indica que son Campos que se pueden rellenar*/
     protected $fillable = [
        'nombre',
        'descripcion',
        'precio_unitario',
        'cantidad',
        'categoria',
    ];

}
