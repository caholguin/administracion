<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use App\Models\Dependencia;
use App\Models\ProyectoPP;
use App\Models\Tematica;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
   
    public function index()
    {
        return view('proyectospp.index');
    }

    
    public function create()
    {
        $comunas = Comuna::all();
        $tematicas = Tematica::all();
        $dependencias = Dependencia::all();

        return view('proyectospp.create',compact('comunas','tematicas','dependencias'));
    }

    
    public function store(Request $request)
    {
       // return $request->all();

        $request->validate([
           'comuna' => 'required',
           'nombre' => 'required',
           'lineaTematica' => 'required',
           'dependencia' => 'required',
           'valorTotal' => 'required',
           'posicion' => 'required',
           'imagen' => 'required',
           'urlpdf' => 'required',
           'descripcion' => 'required'
        ]);

        $proyecto = ProyectoPP::create($request->all());

        return redirect()->route('proyectospp.index')
            ->with('info', 'Proyecto creado con éxito');
    }

    
    public function show($id)
    {
        $proyecto = ProyectoPP::find($id);
        $comunas = Comuna::all();
        $tematicas = Tematica::all();
        $dependencias = Dependencia::all();
        return view('proyectospp.show', compact('proyecto','comunas','tematicas','dependencias'));
    }

    
    public function edit($id)
    {
        $proyecto = ProyectoPP::find($id);
        $comunas = Comuna::all();
        $tematicas = Tematica::all();
        $dependencias = Dependencia::all();
        return view('proyectospp.edit', compact('proyecto','comunas','tematicas','dependencias'));
    }
   

    
    public function update(Request $request, $id)
    {
       //return $request->all();
        $request->validate([
            'comuna' => 'required',
            'nombre' => 'required',
            'lineaTematica' => 'required',
            'dependencia' => 'required',
            'valorTotal' => 'required',
            'posicion' => 'required',
            'imagen' => 'required',
            'urlpdf' => 'required',
            'descripcion' => 'required'
        ]);

        $proyecto = ProyectoPP::find($id);


        $proyecto->comuna = $request->comuna;    
        $proyecto->nombre = $request->nombre;
        $proyecto->lineaTematica = $request->lineaTematica;             
        $proyecto->dependencia = $request->dependencia;  
        $proyecto->valorTotal = $request->valorTotal;
        $proyecto->posicion = $request->posicion;
        $proyecto->imagen = $request->imagen;
        $proyecto->urlpdf = $request->urlpdf;
        $proyecto->descripcion = $request->descripcion;
       $proyecto->save();

        return redirect()->route('proyectospp.index')
            ->with('info', 'Proyecto actualizado con éxito');
    }

    
    /* public function destroy($id)
    {
        $proyecto = ProyectoPP::find($id);

        if ($proyecto->borrado == true) {
            $proyecto->borrado = false;
        } else {
            $proyecto->borrado = true;
        }

        $proyecto->save();

        return redirect()->route('proyectospp.index')
            ->with('info', 'Cambio de estado realizado con éxito');
    } */

    public function cambiarEstado(ProyectoPP $proyecto)
    {
        //return $proyecto;//->habilitado;

        if ($proyecto->borrado == 0) {
            $proyecto->update(['borrado' => 1]);
        }else{
            $proyecto->update(['borrado' => 0]);
        }

        return redirect()->route('proyectospp.index')
        ->with('info', 'Cambio de estado realizado con éxito'); 
  
    }
}
