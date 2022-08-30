@extends('layouts/plantilla')

@section('contenido')
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" _msthash="2344056" _msttexthash="593021">Nueva persona</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('personas.update',$persona) }}" class="row g-3 " method="POST">
                        @csrf    
                        @method('PUT')

                        <div class="col-md-4">
                            <label for="tipoDocumento" class="form-label" _msthash="3667820" _msttexthash="76037">Tipo documento</label>
                            <select class="form-select border" id="tipoDocumento" name="tipoDocumento" >
                                {{-- value="{{$comuna->id}}" @if ($comuna->id == $persona->idComuna) selected @endif --}}
                                <option selected  value="{{$persona->tipoDocumento}}" _msthash="680472" _msttexthash="101647">
                                    @if ($persona->tipoDocumento == 'CC')
                                        Cédula de ciudadanía
                                    @elseif ($persona->tipoDocumento == 'CE')
                                        Cédula de extranjería
                                    @elseif ($persona->tipoDocumento == 'TI')
                                        Tarjeta de identidad
                                    @elseif ($persona->tipoDocumento == 'PS')
                                        Pasaporte
                                    @endif                                
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="CC">Cédula de ciudadanía</option>
                                <option _msthash="680472" _msttexthash="101647" value="CE">Cédula de Extranjería</option>
                                <option _msthash="680472" _msttexthash="101647" value="TI">Tarjeta de Identidad</option>
                                <option _msthash="680472" _msttexthash="101647" value="PS">Pasaporte</option>
                            
                            </select>

                            @error('tipoDocumento')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="documento" class="form-label" _msthash="3666832" _msttexthash="76193">Numero de documento</label>
                            <input type="number" class="form-control" id="documento" name="documento" value="{{ old('documento',$persona->documento) }}">

                            @error('documento')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="documento" class="form-label" _msthash="3666832" _msttexthash="76193">Lugar expedición</label>
                            <input type="text" class="form-control" id="lugarExpedicion" name="lugarExpedicion" value="{{ old('lugarExpedicion',$persona->lugarExpedicion) }}">

                            @error('lugarExpedicion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="fechaExpedicion" class="form-label" _msthash="3666832" _msttexthash="76193">Fecha de expedición</label>
                            <input type="date" class="form-control" id="fechaExpedicion" name="fechaExpedicion" value="{{ old('fechaExpedicion',$persona->fechaExpedicion) }}">

                            @error('fechaExpedicion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="fechaNacimiento" class="form-label" _msthash="3666832" _msttexthash="76193">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ old('fechaNacimiento',$persona->fechaNacimiento) }}">

                            @error('fechaNacimiento')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="nombres" class="form-label" _msthash="3666832" _msttexthash="76193">Nombre</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres',$persona->nombres) }}">

                            @error('nombres')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="apellidos" class="form-label" _msthash="3666832" _msttexthash="76193">Apellido</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos',$persona->apellidos) }}">

                            @error('apellidos')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="direccionResidencia" class="form-label" _msthash="3666832" _msttexthash="76193">Dirección residencia </label>
                            <input type="text" class="form-control" id="direccionResidencia" name="direccionResidencia" value="{{ old('direccionResidencia', $persona->direccionResidencia) }}">

                            @error('direccionResidencia')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="lugarResidencia" class="form-label" _msthash="3666832" _msttexthash="76193">Lugar de residencia </label>
                            <input type="text" class="form-control" id="lugarResidencia" name="lugarResidencia" value="{{ old('lugarResidencia',$persona->lugarResidencia) }}">

                            @error('lugarResidencia')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="celular" class="form-label" _msthash="3666832" _msttexthash="76193">Celular</label>
                            <input type="number" class="form-control" id="celular" name="celular" value="{{ old('celular',$persona->celular) }}">

                            @error('celular')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="otroTelefono" class="form-label" _msthash="3666832" _msttexthash="76193">Otro teléfono</label>
                            <input type="number" class="form-control" id="otroTelefono" name="otroTelefono" value="{{ old('otroTelefono',$persona->otroTelefono) }}">

                            @error('otroTelefono')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>                   

                        <div class="col-md-4">
                            <label for="email" class="form-label" _msthash="3666832" _msttexthash="76193">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$persona->email) }}">

                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="contrasena" class="form-label" _msthash="3666832" _msttexthash="76193">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" value="{{ old('contrasena') }}">                         
                        </div>

                        
                        <div class="col-md-4">
                            <label for="sexo" class="form-label" _msthash="3667820" _msttexthash="76037">Sexo</label>
                            <select class="form-select border" id="sexo" name="sexo">
                                <option selected  value="{{$persona->sexo}}" _msthash="680472" _msttexthash="101647">
                                    @if ($persona->sexo == 'Femenino')Femenino @elseif($persona->sexo == 'Masculino') Masculino @endif                                
                                </option>                           
                                <option _msthash="680472" _msttexthash="101647" value="Femenino">Femenino</option>
                                <option _msthash="680472" _msttexthash="101647" value="Masculino">Masculino</option>
                            </select>

                            @error('sexo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="idComuna" class="form-label" _msthash="3667820" _msttexthash="76037">Comuna</label>
                            <select class="form-select border" id="idComuna" name="idComuna">
                                <option  disabled="" value="" _msthash="680472"
                                    _msttexthash="101647">Elige la comuna...</option>
                                @foreach ($comunas as $comuna)
                                    <option _msthash="680654" _msttexthash="14352" value="{{$comuna->id}}" @if ($comuna->id == $persona->idComuna) selected @endif>
                                        {{ $comuna->nombre }}</option>
                                @endforeach
                            </select>

                            @error('idComuna')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="idBarrio" class="form-label" _msthash="3667820" _msttexthash="76037">Barrio</label>
                            <select class="form-select border" id="idBarrio" name="idBarrio">
                                <option selected="" disabled="" value="" _msthash="680472"
                                    _msttexthash="101647">Elige el barrio ...</option>
                                @foreach ($barrios as $barrio)
                                    <option _msthash="680654" _msttexthash="14352" value="{{$barrio->id}}" @if ($barrio->id == $persona->idBarrio) selected @endif>
                                        {{ $barrio->nombre }}</option>
                                @endforeach
                            </select>

                            @error('idBarrio')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="idAsociacion" class="form-label" _msthash="3667820" _msttexthash="76037">Asociación</label>
                            <select class="form-select border" id="idAsociacion" name="idAsociacion">
                                <option selected="" disabled="" value="" _msthash="680472"
                                    _msttexthash="101647">Elige la asociación...</option>
                                @foreach ($asociaciones as $asociacion)
                                    <option _msthash="680654" _msttexthash="14352" value="{{$asociacion->id}}" @if ($asociacion->id == $persona->idAsociacion) selected @endif">
                                        {{ $asociacion->descripcion }}</option>
                                @endforeach
                            </select>

                            @error('idAsociacion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="otraAsociacion" class="form-label" _msthash="3666832" _msttexthash="76193">Otra asociación</label>
                            <input type="text" class="form-control" id="otraAsociacion" name="otraAsociacion" value="{{ old('otraAsociacion',$persona->otraAsociacion) }}">

                            @error('otraAsociacion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        <div class="col-md-4">
                            <label for="participacionPL" class="form-label" _msthash="3667820" _msttexthash="76037">Participación PL</label>
                            <select class="form-select border" id="participacionPL" name="participacionPL">
                                <option selected  value="{{$persona->participacionPL}}" _msthash="680472" _msttexthash="101647">
                                    @if ($persona->participacionPL == 'SI') Si @elseif($persona->participacionPL == 'NO') No @endif                                
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="SI">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="NO">No</option>        
                            </select>

                            @error('participacionPL')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="participacionPP" class="form-label" _msthash="3667820" _msttexthash="76037">Participación PP</label>
                            <select class="form-select border" id="participacionPP" name="participacionPP">
                                <option selected value="{{$persona->participacionPP}}" _msthash="680472" _msttexthash="101647" >
                                    @if ($persona->participacionPP == 1) Si @elseif($persona->participacionPP == 0) No @endif   </option>

                                   
                                <option _msthash="680472" _msttexthash="101647" value="1">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="0">No</option>        
                            </select>

                            @error('participacionPP')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="votopp" class="form-label" _msthash="3667820" _msttexthash="76037">Voto PP</label>
                            <select class="form-select border" id="votopp" name="votopp">
                                <option selected value="{{$persona->votopp}}" _msthash="680472" _msttexthash="101647">
                                    @if ($persona->votopp == 1) Si @elseif($persona->votopp == 0) No @endif
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="1">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="0">No</option>        
                            </select>

                            @error('votopp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        <div class="col-md-4">
                            <label for="votocccp" class="form-label" _msthash="3667820" _msttexthash="76037">Voto CCCP</label>
                            <select class="form-select border" id="votocccp" name="votocccp">
                                <option selected value="{{$persona->votocccp}}" _msthash="680472" _msttexthash="101647" value="" >
                                    @if ($persona->votocccp == 1) Si @elseif($persona->votocccp == 0) No @endif    
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="1">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="0">No</option>        
                            </select>

                            @error('votocccp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                      

                        <div class="col-md-4">
                            <label for="documentoValido" class="form-label" _msthash="3667820" _msttexthash="76037">Documento validado</label>
                            <select class="form-select border" id="documentoValido" name="documentoValido">
                                <option selected value="{{$persona->documentoValido}}" _msthash="680472" _msttexthash="101647" value="" >
                                    @if ($persona->documentoValido == 1) Si @elseif($persona->documentoValido == 0) No @endif 
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="1">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="0">No</option>        
                            </select>

                            @error('documentoValido')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="gruposPoblacion" class="form-label" _msthash="3667820" _msttexthash="76037">Grupo poblacional</label>
                            <select class="form-select border" id="gruposPoblacion" name="gruposPoblacion">
                                <option selected value="" _msthash="680472" _msttexthash="101647" value="" >Elige el grupo poblacional...</option>
                                @foreach ($gruposPoblacion as $grupo)
                                <option _msthash="680654" _msttexthash="14352" value="{{$grupo->descripcion}}" @if ($grupo->descripcion == $persona->gruposPoblacion) selected @endif>
                                    {{ $grupo->descripcion }}</option>
                            @endforeach
                            
                            </select>

                            @error('gruposPoblacion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="comunavotopp" class="form-label" _msthash="3666832" _msttexthash="76193">Comuna voto PP</label>
                            <input type="number" class="form-control" id="comunavotopp" name="comunavotopp" value="{{ old('comunavotopp',$persona->comunavotopp) }}">

                            @error('comunavotopp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="certificado" class="form-label" _msthash="3667820" _msttexthash="76037">Certificado</label>
                            <select class="form-select border" id="certificado" name="certificado">
                                <option selected value="{{$persona->certificado}}" _msthash="680472" _msttexthash="101647"  >
                                    @if ($persona->certificado == 'SI') Si @elseif($persona->documentoValido == 'NO VALIDO') No valido @endif 
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="SI">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="NO VALIDO">No valido</option>        
                            </select>

                            @error('certificado')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="mensaje" class="form-label" _msthash="3667820" _msttexthash="76037">Mensaje</label>
                            <select class="form-select border" id="mensaje" name="mensaje">
                                <option selected value="{{$persona->mensaje}}" _msthash="680472" _msttexthash="101647"  >
                                    @if ($persona->mensaje == 'SI') Si @elseif($persona->mensaje == 'NO VALIDO') No valido @endif
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="SI">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="NO VALIDO">No valido</option>        
                            </select>

                            @error('mensaje')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="certificadocccp" class="form-label" _msthash="3667820" _msttexthash="76037">Certificado CCCP</label>
                            <select class="form-select border" id="certificadocccp" name="certificadocccp">
                                <option selected  value="{{$persona->certificadocccp}}" _msthash="680472" _msttexthash="101647" >
                                    @if ($persona->certificadocccp == 'SI') Si @elseif($persona->certificadocccp == 'NO VALIDO') No valido @endif
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="SI">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="NO">No</option>        
                            </select>

                            @error('certificadocccp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="mensajecccp" class="form-label" _msthash="3667820" _msttexthash="76037">Mensaje CCCP</label>
                            <select class="form-select border" id="mensajecccp" name="mensajecccp">
                                <option selected value="{{$persona->mensajecccp}}" _msthash="680472" _msttexthash="101647"  >
                                    @if ($persona->mensajecccp == 'SI') Si @elseif($persona->mensajecccp == 'NO') No @endif
                                </option>
                                <option _msthash="680472" _msttexthash="101647" value="SI">Si</option>
                                <option _msthash="680472" _msttexthash="101647" value="NO">No</option>        
                            </select>

                            @error('mensajecccp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" _msthash="3768895"
                                _msttexthash="324311">Guardar</button>

                                <a href="{{route('personas.index')}}" class="btn btn-secondary" _msthash="3768895"
                                _msttexthash="324311">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection


