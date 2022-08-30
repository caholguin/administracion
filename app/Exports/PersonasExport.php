<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PersonasExport implements FromCollection,WithHeadings
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
        // return  Dato::all();
    }


    public function headings(): array
    {
        return [
            'Id',
            'Tipo Documento',
            'Documento',
            'Lugar Expedicion',
            'Nombres',
            'Apellidos',
            'Direccion Residencia',
            'Lugar Residencia',
            'Celular',
            'Otro Telefono',
            'Email',
            'Sexo',
            'Otra Asociacion',
            'ParticipacionPL',
            'ParticipacionPP',
            'FechaNacimiento',
            'FechaExpedicion',
            'FechaAceptacionTerminos',
            'FechaRegistro',
            'Comuna',
            'Barrio',
            'Asociacion',
            'Votopp',
            'Votocccp',
            'Estado',
            'Documento Valido',
            'Grupos Poblacion',
            'Comunavotopp',
            'Certificado',
            'Mensaje',
            'Certificadocccp',
            'Mensajecccp'
        ];
    }
}
