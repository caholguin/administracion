<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Asociacion;
use App\Models\Comuna;
use App\Models\Barrio;
use App\Models\GrupoPoblacion;
use Carbon\Carbon;
use App\Exports\PersonasExport;

use Maatwebsite\Excel\Facades\Excel;

class PersonaController extends Controller
{
   
    public function index()
    {
        return view('personas.index');
    }

    public function create()
    {
        $asociaciones = Asociacion::all();
        $comunas = Comuna::all();
        $barrios = Barrio::all();
        $gruposPoblacion = GrupoPoblacion::all();

        return view('personas.create',compact('asociaciones','comunas','barrios','gruposPoblacion'));
    }

   
    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'tipoDocumento' => 'required',
            'documento' => 'required',             
            'lugarExpedicion' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccionResidencia' => 'required',
            'lugarResidencia' => 'required',
            'celular' => 'required|max:10',
            'otroTelefono' => 'required|max:10',
            'email' => 'required',
            'sexo' => 'required',
            'otraAsociacion' => 'required',
            'participacionPL' => 'required',
            'participacionPP' => 'required',
            'fechaNacimiento' => 'required',
            'fechaExpedicion' => 'required',             
            'idComuna' => 'required',
            'idBarrio' => 'required',
            'idAsociacion' => 'required',
            'votopp' => 'required',
            'votocccp' => 'required',             
            'documentoValido' => 'required',           
            'gruposPoblacion' => 'required',
            'comunavotopp' => 'required',
            'certificado' => 'required',
            'mensaje' => 'required',
            'certificadocccp' => 'required',
            'mensajecccp' => 'required',
        ]);     
     
        if ($request->contrasena) {

            $persona = Persona::create([
                'tipoDocumento' =>            $request->tipoDocumento,
                'documento' =>                $request->documento,
                'contrasena' =>               bcrypt($request->contrasena),
                'lugarExpedicion' =>          $request->lugarExpedicion,
                'nombres' =>                  $request->nombres,
                'apellidos' =>                $request->apellidos,
                'direccionResidencia' =>      $request->direccionResidencia,
                'lugarResidencia' =>          $request->lugarResidencia,
                'celular' =>                  $request->celular,
                'otroTelefono' =>             $request->otroTelefono,
                'email' =>                    $request->email,
                'sexo' =>                     $request->sexo,
                'otraAsociacion' =>           $request->otraAsociacion,
                'participacionPL' =>          $request->participacionPL,
                'participacionPP' =>          $request->participacionPP,
                'fechaNacimiento' =>          $request->fechaNacimiento,
                'fechaExpedicion' =>          $request->fechaExpedicion,
                'fechaAceptacionTerminos' =>  Carbon::now(),
                'fechaRegistro' =>            Carbon::now(),
                'idComuna' =>                 $request->idComuna,
                'idBarrio' =>                 $request->idBarrio,
                'idAsociacion' =>             $request->idAsociacion,
                'votopp' =>                   $request->votopp,
                'votocccp' =>                 $request->votocccp,                
                'documentoValido' =>          $request->documentoValido,
                'estado' =>                   'REGISTRADO',
                'gruposPoblacion' =>          $request->gruposPoblacion,
                'comunavotopp' =>             $request->comunavotopp,
                'certificado' =>              $request->certificado,
                'mensaje' =>                  $request->mensaje,
                'certificadocccp' =>          $request->certificadocccp,
                'mensajecccp' =>              $request->mensajecccp,
            ]); 

        } else{

            $persona = Persona::create([
                'tipoDocumento' =>            $request->tipoDocumento,
                'documento' =>                $request->documento,
                'lugarExpedicion' =>          $request->lugarExpedicion,
                'nombres' =>                  $request->nombres,
                'apellidos' =>                $request->apellidos,
                'direccionResidencia' =>      $request->direccionResidencia,
                'lugarResidencia' =>          $request->lugarResidencia,
                'celular' =>                  $request->celular,
                'otroTelefono' =>             $request->otroTelefono,
                'email' =>                    $request->email,
                'sexo' =>                     $request->sexo,
                'otraAsociacion' =>           $request->otraAsociacion,
                'participacionPL' =>          $request->participacionPL,
                'participacionPP' =>          $request->participacionPP,
                'fechaNacimiento' =>          $request->fechaNacimiento,
                'fechaExpedicion' =>          $request->fechaExpedicion,
                'fechaAceptacionTerminos' =>  Carbon::now(),
                'fechaRegistro' =>            Carbon::now(),
                'idComuna' =>                 $request->idComuna,
                'idBarrio' =>                 $request->idBarrio,
                'idAsociacion' =>             $request->idAsociacion,
                'votopp' =>                   $request->votopp,
                'votocccp' =>                 $request->votocccp,                
                'documentoValido' =>          $request->documentoValido,
                'estado' =>                   'REGISTRADO',
                'gruposPoblacion' =>          $request->gruposPoblacion,
                'comunavotopp' =>             $request->comunavotopp,
                'certificado' =>              $request->certificado,
                'mensaje' =>                  $request->mensaje,
                'certificadocccp' =>          $request->certificadocccp,
                'mensajecccp' =>              $request->mensajecccp,
            ]); 
        }
             

        return redirect()->route('personas.index')->with('info', 'Persona registrada con éxito'); 
      
    }

   
    public function show(Persona $persona)
    {
       // ¿return $persona;
        $asociaciones = Asociacion::all();
        $comunas = Comuna::all();
        $barrios = Barrio::all();
        $gruposPoblacion = GrupoPoblacion::all();
        return view('personas.show', compact('persona','asociaciones','comunas','barrios','gruposPoblacion'));
    }

    
    public function edit(Persona $persona)
    {
        $asociaciones = Asociacion::all();
        $comunas = Comuna::all();
        $barrios = Barrio::all();
        $gruposPoblacion = GrupoPoblacion::all();
        return view('personas.edit', compact('persona','asociaciones','comunas','barrios','gruposPoblacion'));
    }

   
    public function update(Request $request, Persona $persona)
    {
       // return $request->all();

        $request->validate([
            'tipoDocumento' => 'required',
            'documento' => 'required',             
            'lugarExpedicion' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccionResidencia' => 'required',
            'lugarResidencia' => 'required',
            'celular' => 'required',
            'otroTelefono' => 'required',
            'email' => 'required',
            'sexo' => 'required',
            'otraAsociacion' => 'required',
            'participacionPL' => 'required',
            'participacionPP' => 'required',
            'fechaNacimiento' => 'required',
            'fechaExpedicion' => 'required',             
            'idComuna' => 'required',
            'idBarrio' => 'required',
            'idAsociacion' => 'required',
            'votopp' => 'required',
            'votocccp' => 'required',             
            'documentoValido' => 'required',           
            'gruposPoblacion' => 'required',
            'comunavotopp' => 'required',
            'certificado' => 'required',
            'mensaje' => 'required',
            'certificadocccp' => 'required',
            'mensajecccp' => 'required',
        ]);     
     
        if ($request->contrasena) {

            $persona->update([
                'tipoDocumento' =>            $request->tipoDocumento,
                'documento' =>                $request->documento,
                'contrasena' =>               bcrypt($request->contrasena),
                'lugarExpedicion' =>          $request->lugarExpedicion,
                'nombres' =>                  $request->nombres,
                'apellidos' =>                $request->apellidos,
                'direccionResidencia' =>      $request->direccionResidencia,
                'lugarResidencia' =>          $request->lugarResidencia,
                'celular' =>                  $request->celular,
                'otroTelefono' =>             $request->otroTelefono,
                'email' =>                    $request->email,
                'sexo' =>                     $request->sexo,
                'otraAsociacion' =>           $request->otraAsociacion,
                'participacionPL' =>          $request->participacionPL,
                'participacionPP' =>          $request->participacionPP,
                'fechaNacimiento' =>          $request->fechaNacimiento,
                'fechaExpedicion' =>          $request->fechaExpedicion,
                'fechaAceptacionTerminos' =>  Carbon::now(),
                'fechaRegistro' =>            Carbon::now(),
                'idComuna' =>                 $request->idComuna,
                'idBarrio' =>                 $request->idBarrio,
                'idAsociacion' =>             $request->idAsociacion,
                'votopp' =>                   $request->votopp,
                'votocccp' =>                 $request->votocccp,                
                'documentoValido' =>          $request->documentoValido,
                'estado' =>                   'REGISTRADO',
                'gruposPoblacion' =>          $request->gruposPoblacion,
                'comunavotopp' =>             $request->comunavotopp,
                'certificado' =>              $request->certificado,
                'mensaje' =>                  $request->mensaje,
                'certificadocccp' =>          $request->certificadocccp,
                'mensajecccp' =>              $request->mensajecccp,
            ]); 
        } else{

            $persona->update([
                'tipoDocumento' =>            $request->tipoDocumento,
                'documento' =>                $request->documento,              
                'lugarExpedicion' =>          $request->lugarExpedicion,
                'nombres' =>                  $request->nombres,
                'apellidos' =>                $request->apellidos,
                'direccionResidencia' =>      $request->direccionResidencia,
                'lugarResidencia' =>          $request->lugarResidencia,
                'celular' =>                  $request->celular,
                'otroTelefono' =>             $request->otroTelefono,
                'email' =>                    $request->email,
                'sexo' =>                     $request->sexo,
                'otraAsociacion' =>           $request->otraAsociacion,
                'participacionPL' =>          $request->participacionPL,
                'participacionPP' =>          $request->participacionPP,
                'fechaNacimiento' =>          $request->fechaNacimiento,
                'fechaExpedicion' =>          $request->fechaExpedicion,
                'fechaAceptacionTerminos' =>  Carbon::now(),
                'fechaRegistro' =>            Carbon::now(),
                'idComuna' =>                 $request->idComuna,
                'idBarrio' =>                 $request->idBarrio,
                'idAsociacion' =>             $request->idAsociacion,
                'votopp' =>                   $request->votopp,
                'votocccp' =>                 $request->votocccp,                
                'documentoValido' =>          $request->documentoValido,
                'estado' =>                   'REGISTRADO',
                'gruposPoblacion' =>          $request->gruposPoblacion,
                'comunavotopp' =>             $request->comunavotopp,
                'certificado' =>              $request->certificado,
                'mensaje' =>                  $request->mensaje,
                'certificadocccp' =>          $request->certificadocccp,
                'mensajecccp' =>              $request->mensajecccp,
            ]); 
        }

        return redirect()->route('personas.index')->with('info', 'Persona actualizada con éxito'); 
    }

   
    public function destroy($id)
    {
        //
    }

    public function cambiarEstado(Persona $persona)
    {
        //return $proyecto;//->habilitado;

        if ($persona->borrado == 0) {
            $persona->update(['borrado' => 1]);
        }else{
            $persona->update(['borrado' => 0]);
        }

        return redirect()->route('personas.index')
        ->with('info', 'Cambio de estado realizado con éxito'); 
  
    }

    public function reporte(){
       


       intval($personas = Persona::count());
       intval($hombres = Persona::where('sexo', 'Masculino')->count());
       intval($mujeres = Persona::where('sexo', 'Femenino')->count());
       
        $puntos = [ intval($hombres), intval($mujeres),intval($personas) ];    
      

        return view( 'personas.reporte', compact('hombres','mujeres','personas'));
        
    }

    public function fileExport() 
    {
       $data = Persona::select(
       'id',
       'tipoDocumento',
       'documento',       
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
       'gruposPoblacion',
       'comunavotopp',
       'certificado',
       'mensaje',
       'certificadocccp',
       'mensajecccp')->get();
        return Excel::download(new PersonasExport($data), 'personas.xlsx');
    }    
}
