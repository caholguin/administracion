<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;

    protected $table = "barrios";

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nombre',
        'borrado',
        'idComuna',
    ];

    public function persona() {
        return $this->hasOne(Barrio::class,'id','idBarrio');
    }
}
