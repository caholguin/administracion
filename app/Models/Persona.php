<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'tipoDocumento',
        'documento',
        'contrasena',
        'lugarExpedicion',
        'nombres', 
        'apellidos', 
        'direccionResidencia', 
        'lugarResidencia', 
        'celular', 
        'otroTelefono', 
        'email', 
        'sexo',
        'otraAsociacion', 
        'participacionPL',
        'participacionPP',
        'fechaNacimiento',
        'fechaExpedicion',
        'fechaAceptacionTerminos',
        'fechaRegistro',
        'idComuna',
        'idBarrio',
        'idAsociacion',
        'votopp',
        'votocccp',
        'estado',
        'documentoValido',
        'borrado',
        'gruposPoblacion',
        'comunavotopp',
        'certificado',
        'mensaje',
        'certificadocccp',
        'mensajecccp'
    ];

    public $timestamps = false;


    public function comuna() {
        return $this->hasOne(Comuna::class,'id','idComuna');
    }

    
    public function barrio() {
        return $this->hasOne(Barrio::class,'id','idBarrio');
    }

    public function asociacion() {
        return $this->hasOne(Asociacion::class,'id','idAsociacion');
    }

    
}

