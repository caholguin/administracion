<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoPP extends Model
{
    use HasFactory;

    protected $table = 'proyectos_pp';

    protected $fillable = ['comuna', 'nombre', 'descripcion','lineaTematica', 'dependencia', 'valorTotal', 'urlpdf', 'posicion', 'imagen', 'proyectos_ppcol', 'borrado', 'escrutiniovotos'];

    public $timestamps = false;
}

