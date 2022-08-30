<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'comunas';

    protected $fillable = ['zona', 'numero', 'nombre','votosPermitidos', 'borrado'];


    
    public function persona() {
        return $this->hasOne(Persona::class,'idComuna','id');
    }
}
