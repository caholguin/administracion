<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociacion extends Model
{
    use HasFactory;
    
    protected $table = "asociaciones";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'descripcion',
        'borrado',
    ];

    public function persona() {
        return $this->hasOne(Asociacion::class,'id','idAsociacion');
    }
}
