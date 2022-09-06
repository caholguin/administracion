<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use App\Models\Dependencia;
use App\Models\ProyectoPP;
use App\Models\Tematica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return view('proyectospp.create', compact('comunas', 'tematicas', 'dependencias'));
    }


    public function store(Request $request)
    {        

        $request->validate([
            'comuna' => 'required',
            'nombre' => 'required',
            'lineaTematica' => 'required',
            'dependencia' => 'required',
            'valorTotal' => 'required',
            'posicion' => 'required',
            'imagen' => 'required|image',
            'urlpdf' => 'required|url',
            'descripcion' => 'required'
        ]);

        if ($request->file('imagen')) {
            $url = Storage::put('public/imagenes', $request->file('imagen'));
        }

        $proyecto = ProyectoPP::create([
            'comuna' => $request->comuna,
            'nombre' => $request->nombre,
            'lineaTematica' => $request->lineaTematica,
            'dependencia'  => $request->dependencia,
            'valorTotal'  => $request->valorTotal,
            'posicion' => $request->posicion,
            'imagen'  => $url,
            'urlpdf' => $request->urlpdf,
            'descripcion'  => $request->descripcion
        ]);

        return redirect()->route('proyectospp.index')
            ->with('info', 'Proyecto creado con éxito');
    }


    public function show($id)
    {
        $proyecto = ProyectoPP::find($id);
        $comunas = Comuna::all();
        $tematicas = Tematica::all();
        $dependencias = Dependencia::all();
        return view('proyectospp.show', compact('proyecto', 'comunas', 'tematicas', 'dependencias'));
    }


    public function edit($id)
    {
        $proyecto = ProyectoPP::find($id);
        $comunas = Comuna::all();
        $tematicas = Tematica::all();
        $dependencias = Dependencia::all();
        return view('proyectospp.edit', compact('proyecto', 'comunas', 'tematicas', 'dependencias'));
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
            // 'imagen' => 'required|image',
            'urlpdf' => 'required|url',
            'descripcion' => 'required'
        ]);

        $proyecto = ProyectoPP::find($id);

        if ($request->file('imagen')) {
            $url = Storage::put('public/imagenes', $request->file('imagen'));

            if ($proyecto->imagen) {
                Storage::delete($proyecto->imagen);


                $proyecto->comuna = $request->comuna;
                $proyecto->nombre = $request->nombre;
                $proyecto->lineaTematica = $request->lineaTematica;
                $proyecto->dependencia = $request->dependencia;
                $proyecto->valorTotal = $request->valorTotal;
                $proyecto->posicion = $request->posicion;
                $proyecto->imagen = $url;
                $proyecto->urlpdf = $request->urlpdf;
                $proyecto->descripcion = $request->descripcion;
                $proyecto->save();
            } else {

                $proyecto->comuna = $request->comuna;
                $proyecto->nombre = $request->nombre;
                $proyecto->lineaTematica = $request->lineaTematica;
                $proyecto->dependencia = $request->dependencia;
                $proyecto->valorTotal = $request->valorTotal;
                $proyecto->posicion = $request->posicion;
                /*  $proyecto->imagen = $request->imagen; */
                $proyecto->urlpdf = $request->urlpdf;
                $proyecto->descripcion = $request->descripcion;
                $proyecto->save();
            }
        }



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
        } else {
            $proyecto->update(['borrado' => 0]);
        }

        return redirect()->route('proyectospp.index')
            ->with('info', 'Cambio de estado realizado con éxito');
    }
}
