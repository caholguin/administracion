<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoPoblacion extends Model
{
    use HasFactory;

    protected $table = "grupospoblacion";

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'descripcion',
        'borrado',
    ];

 
}
