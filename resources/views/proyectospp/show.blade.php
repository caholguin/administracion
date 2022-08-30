@extends('layouts/plantilla')

@section('contenido')
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" _msthash="2344056" _msttexthash="593021">Ver proyecto</h3>
                </div>
                <div class="card-body">
                    <form action="" class="row g-3 " method="POST">                      
                        @csrf
                        <div class="col-md-4">
                            <label for="comuna" class="form-label" _msthash="3667820" _msttexthash="76037">Comuna</label>
                            <input type="text" class="form-control" id="comuna" name="comuna" value="{{ $proyecto->comuna }}" disabled>     
                        </div>

                        <div class="col-md-4">
                            <label for="nombre" class="form-label" _msthash="3666832" _msttexthash="76193">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre }}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="lineaTematica" class="form-label" _msthash="3667820" _msttexthash="76037">Tematica</label>
                            <input type="text" class="form-control" id="lineaTematica" name="lineaTematica" value="{{ $proyecto->lineaTematica }}" disabled>                            
                        </div>

                        <div class="col-md-4">
                            <label for="dependencia" class="form-label" _msthash="3667820" _msttexthash="76037">Dependencia</label>
                            <input type="text" class="form-control" id="dependencia" name="dependencia" value="{{ $proyecto->dependencia }}" disabled>     
                        </div>

                        <div class="col-md-4">
                            <label for="valorTotal" class="form-label" _msthash="3666832" _msttexthash="76193">Valor total</label>
                            <input type="number" class="form-control" id="valorTotal" name="valorTotal" value="{{ $proyecto->valorTotal }}" disabled>
                        </div>

                        <div class="col-md-4">
                            <label for="posicion" class="form-label" _msthash="3666832" _msttexthash="76193">Posición</label>
                            <input type="number" class="form-control" id="posicion" name="posicion" value="{{ $proyecto->posicion }}" disabled>
                        </div>

                        <div class="col-md-4">
                            <label for="imagen" class="form-label" _msthash="3666832" _msttexthash="76193">Imagen</label>
                            <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $proyecto->imagen }}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="urlpdf" class="form-label" _msthash="3666832" _msttexthash="76193">Url
                                PDF</label>
                            <input type="text" class="form-control" id="urlpdf" name="urlpdf" value="{{ $proyecto->urlpdf }}" disabled>
                            
                        </div>

                        <div class="col-md-4">
                            <label for="descripcion" class="form-label" _msthash="3667079"
                                _msttexthash="112346">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Área de texto de ejemplo requerida"
                                _mstplaceholder="853047"  disabled >{{  $proyecto->descripcion }}
                            </textarea>
                          
                        </div>


                        <div class="col-12">
                           {{--  <button class="btn btn-primary" type="submit" _msthash="3768895"
                                _msttexthash="324311">Guardar</button> --}}

                            <a href="{{ route('proyectospp.index') }}" class="btn btn-primary" _msthash="3768895"
                                _msttexthash="324311">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
