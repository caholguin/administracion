@extends('layouts/plantilla')

@section('contenido')
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" _msthash="2344056" _msttexthash="593021">Nuevo proyecto</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('proyectospp.store') }}" class="row g-3 " method="POST">
                        @csrf
                        <div class="col-md-4">
                            <label for="comuna" class="form-label" _msthash="3667820" _msttexthash="76037">Comuna</label>
                            <select class="form-select border" id="comuna" name="comuna">
                                <option selected="" disabled="" value="" _msthash="680472"
                                    _msttexthash="101647">Elegir...</option>
                                @foreach ($comunas as $comuna)
                                    <option _msthash="680654" _msttexthash="14352" value="{{ $comuna->numero }}">
                                        {{ $comuna->nombre }}</option>
                                @endforeach
                            </select>

                            @error('comuna')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="nombre" class="form-label" _msthash="3666832" _msttexthash="76193">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ old('nombre') }}">

                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="lineaTematica" class="form-label" _msthash="3667820"
                                _msttexthash="76037">Tematica</label>
                            <select class="form-select border" id="lineaTematica" name="lineaTematica">
                                <option selected="" disabled="" value="" _msthash="680472"
                                    _msttexthash="101647">Elegir...</option>
                                @foreach ($tematicas as $tematica)
                                    <option _msthash="680654" _msttexthash="14352" value="{{ $tematica->EJE_NOMBRE }}">
                                        {{ $tematica->EJE_NOMBRE }}</option>
                                @endforeach
                            </select>

                            @error('lineaTematica')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="dependencia" class="form-label" _msthash="3667820"
                                _msttexthash="76037">Dependencia</label>
                            <select class="form-select border" id="dependencia" name="dependencia">
                                <option selected="" disabled="" value="" _msthash="680472"
                                    _msttexthash="101647">Elegir...</option>
                                @foreach ($dependencias as $dependencia)
                                    <option _msthash="680654" _msttexthash="14352" value="{{ $dependencia->nombre }}">
                                        {{ $dependencia->nombre }}</option>
                                @endforeach
                            </select>

                            @error('dependencia')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="valorTotal" class="form-label" _msthash="3666832" _msttexthash="76193">Valor
                                total</label>
                            <input type="number" class="form-control" id="valorTotal" name="valorTotal">

                            @error('valorTotal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="posicion" class="form-label" _msthash="3666832"
                                _msttexthash="76193">Posición</label>
                            <input type="number" class="form-control" id="posicion" name="posicion" value="{{ old('posicion') }}">

                            @error('posicion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="imagen" class="form-label" _msthash="3666832" _msttexthash="76193">URL Imagen</label>
                            <input type="text" class="form-control" id="imagen" name="imagen" value="{{ old('imagen') }}">

                            @error('imagen')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="urlpdf" class="form-label" _msthash="3666832" _msttexthash="76193">Url
                                PDF</label>
                            <input type="text" class="form-control" id="urlpdf" name="urlpdf" value="{{ old('urlpdf') }}">

                            @error('urlpdf')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="descripcion" class="form-label" _msthash="3667079"
                                _msttexthash="112346">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Área de texto de ejemplo requerida"
                                _mstplaceholder="853047">{{ old('descripcion') }}</textarea>

                            @error('descripcion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" _msthash="3768895"
                                _msttexthash="324311">Guardar</button>

                                <a href="{{route('proyectospp.index')}}" class="btn btn-secondary" _msthash="3768895"
                                _msttexthash="324311">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
