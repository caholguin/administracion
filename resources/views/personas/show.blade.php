@extends('layouts/plantilla')

@section('contenido')
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" _msthash="2344056" _msttexthash="593021">Nueva persona</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('personas.store') }}" class="row g-3 " method="POST">
                        @csrf    

                        <div class="col-md-4">
                            <label for="tipoDocumento" class="form-label" _msthash="3667820" _msttexthash="76037">Tipo documento</label>
                            <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento"  value="{{$persona->tipoDocumento}}" disabled>    
                        
                        </div>

                        <div class="col-md-4">
                            <label for="documento" class="form-label" _msthash="3666832" _msttexthash="76193">Numero de documento</label>
                            <input type="number" class="form-control" id="documento" name="documento" value="{{ old('documento', $persona->documento) }}" disabled>                         
                        </div>

                        <div class="col-md-4">
                            <label for="lugarExpedicion" class="form-label" _msthash="3666832" _msttexthash="76193">Lugar expedición</label>
                            <input type="text" class="form-control" id="lugarExpedicion" name="lugarExpedicion" value="{{ $persona->lugarExpedicion }}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="fechaExpedicion" class="form-label" _msthash="3666832" _msttexthash="76193">Fecha de expedición</label>
                            <input type="date" class="form-control" id="fechaExpedicion" name="fechaExpedicion" value="{{ $persona->fechaExpedicion }}" disabled>                          
                        </div>

                        <div class="col-md-4">
                            <label for="fechaNacimiento" class="form-label" _msthash="3666832" _msttexthash="76193">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ $persona->fechaNacimiento }}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="nombres" class="form-label" _msthash="3666832" _msttexthash="76193">Nombre</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $persona->nombres }}" disabled>
                        </div>

                        <div class="col-md-4">
                            <label for="apellidos" class="form-label" _msthash="3666832" _msttexthash="76193">Apellido</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $persona->apellidos }}" disabled>                            
                        </div>

                        <div class="col-md-4">
                            <label for="direccionResidencia" class="form-label" _msthash="3666832" _msttexthash="76193">Dirección residencia </label>
                            <input type="text" class="form-control" id="direccionResidencia" name="direccionResidencia" value="{{ $persona->direccionResidencia }}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="lugarResidencia" class="form-label" _msthash="3666832" _msttexthash="76193">Lugar de residencia </label>
                            <input type="text" class="form-control" id="lugarResidencia" name="lugarResidencia" value="{{ $persona->lugarResidencia }}" disabled>
                           
                        </div>

                        <div class="col-md-4">
                            <label for="celular" class="form-label" _msthash="3666832" _msttexthash="76193">Celular</label>
                            <input type="number" class="form-control" id="celular" name="celular" value="{{ $persona->celular }}" disabled>
                        </div>

                        <div class="col-md-4">
                            <label for="otroTelefono" class="form-label" _msthash="3666832" _msttexthash="76193">Otro teléfono</label>
                            <input type="number" class="form-control" id="otroTelefono" name="otroTelefono" value="{{ $persona->otroTelefono }}" disabled>                            
                        </div>                    

                        <div class="col-md-4">
                            <label for="email" class="form-label" _msthash="3666832" _msttexthash="76193">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $persona->email }}" disabled>                           
                        </div>
                        
                        <div class="col-md-4">
                            <label for="sexo" class="form-label" _msthash="3667820" _msttexthash="76037">Sexo</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $persona->sexo }}" disabled>                        
                        </div>

                        <div class="col-md-4" disabled>
                            <label for="idComuna" class="form-label" _msthash="3667820" _msttexthash="76037">Comuna</label>
                            <input type="text" class="form-control" value="{{$persona->comuna->nombre}}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="idBarrio" class="form-label" _msthash="3667820" _msttexthash="76037">Barrio</label>
                            <input type="text" class="form-control" @if ($persona->barrio == '0')
                                value="No tiene"
                            @else
                                value="{{ $persona->barrio->nombre}}"
                            @endif  disabled>                          
                        </div>

                        <div class="col-md-4">
                            <label for="idAsociacion" class="form-label" _msthash="3667820" _msttexthash="76037">Asociación</label>
                            <input type="text" class="form-control" value="{{$persona->asociacion->descripcion}}" disabled>                           
                        </div>

                        <div class="col-md-4">
                            <label for="otraAsociacion" class="form-label" _msthash="3666832" _msttexthash="76193">Otra asociación</label>
                            <input type="text" class="form-control" id="otraAsociacion" name="otraAsociacion" value="{{ $persona->otraAsociacion }}" disabled>
                        </div>
                        
                        
                        <div class="col-md-4">
                            <label for="participacionPL" class="form-label" _msthash="3667820" _msttexthash="76037">Participación PL</label>
                            <input type="text" class="form-control" id="participacionPL" name="participacionPL" value="{{ $persona->participacionPL }}" disabled>                                                
                        </div>

                        <div class="col-md-4">
                            <label for="participacionPP" class="form-label" _msthash="3667820" _msttexthash="76037">Participación PP</label>
                            <input type="text" class="form-control" id="participacionPP" name="participacionPP"
                                @if ($persona->participacionPP == '1')
                                    value="Si"                                    
                                @else
                                    value="No"
                                @endif                          
                            disabled>                                                  
                        </div>

                        <div class="col-md-4">
                            <label for="votopp" class="form-label" _msthash="3667820" _msttexthash="76037">Voto PP</label>
                            <input type="text" class="form-control" id="votopp" name="votopp"
                                @if ($persona->votopp == '1')
                                    value="Si"                                
                                @else
                                    value="No"
                                @endif                          
                            disabled>                                                  
                        </div>
                        
                        <div class="col-md-4">
                            <label for="votocccp" class="form-label" _msthash="3667820" _msttexthash="76037">Voto CCCP</label>
                            <input type="text" class="form-control" id="votocccp" name="votocccp"
                                @if ($persona->votocccp == '1')
                                    value="Si"                                
                                @else
                                    value="No"
                                @endif                          
                            disabled>                                       
                        </div>
                      
                        <div class="col-md-4">
                            <label for="documentoValido" class="form-label" _msthash="3667820" _msttexthash="76037">Documento validado</label>
                            <input type="text" class="form-control" id="documentoValido" name="documentoValido"
                                @if ($persona->documentoValido == '1')
                                    value="Si"                                
                                @else
                                    value="No"
                                @endif                          
                            disabled>                               
                        </div>
                        
                        
                        <div class="col-md-4">
                            <label for="gruposPoblacion" class="form-label" _msthash="3667820" _msttexthash="76037">Grupo poblacional</label>                            
                            <input type="text" class="form-control" value="{{$persona->gruposPoblacion}}" disabled>
                              
                        </div>

                        <div class="col-md-4">
                            <label for="comunavotopp" class="form-label" _msthash="3666832" _msttexthash="76193">Comuna voto PP</label>
                            <input type="number" class="form-control" id="comunavotopp" name="comunavotopp" value="{{ $persona->comunavotopp }}" disabled>                          
                        </div>

                        <div class="col-md-4">
                            <label for="certificado" class="form-label" _msthash="3667820" _msttexthash="76037">Certificado</label>
                            <input type="text" class="form-control" id="certificado" name="certificado" value="{{ $persona->certificado }}" disabled>                             
                        </div>

                        <div class="col-md-4">
                            <label for="mensaje" class="form-label" _msthash="3667820" _msttexthash="76037">Mensaje</label>
                            <input type="text" class="form-control" id="mensaje" name="mensaje" value="{{ $persona->mensaje }}" disabled>                             
                        </div>
                        
                        <div class="col-md-4">
                            <label for="certificadocccp" class="form-label" _msthash="3667820" _msttexthash="76037">Certificado CCCP</label>
                            <input type="text" class="form-control" id="certificadocccp" name="certificadocccp" value="{{ $persona->certificadocccp }}" disabled>   
                        </div>
                        
                        <div class="col-md-4">
                            <label for="mensajecccp" class="form-label" _msthash="3667820" _msttexthash="76037">Mensaje CCCP</label>
                            <input type="text" class="form-control" id="certificadocccp" name="mensajecccp" value="{{ $persona->mensajecccp }}" disabled> 
                            @error('mensajecccp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-12">                           

                                <a href="{{route('personas.index')}}" class="btn btn-primary" _msthash="3768895"
                                _msttexthash="324311">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection


