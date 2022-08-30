<div>
    
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="card-title" _msthash="2344056" _msttexthash="593021">Personas</h3>
        </div>

        <div class="card-body">
            <div class="row mb-4">
                <div class="col-10 ">
                    <a class="btn btn-primary" href="{{ route('personas.create') }}">Nuevo</a>
                    <a class="btn btn-success" href="{{ route('file-export') }}">Exportar datos</a>
                </div>
                <div class="col mt-2">
                    <input wire:model="search" class="form-control" type="text" placeholder="Buscar persona...">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                    <thead>
                        <tr>
                            <th _msthash="682773" _msttexthash="76193">Tido documento</th>
                            <th _msthash="682903" _msttexthash="112346">Documento</th>                           
                            <th _msthash="683163" _msttexthash="224783">Lugar expedición</th>
                            <th _msthash="683293" _msttexthash="77194">Nombres</th>
                            <th _msthash="683423" _msttexthash="385671">Apellidos</th>
                            <th _msthash="683423" _msttexthash="385671">Dirección</th>
                            <th _msthash="683423" _msttexthash="385671">Celular</th>    
                            <th _msthash="683423" _msttexthash="385671">Correo</th>    
                            <th>Acciones</th>                        
                            
                        </tr>
                    </thead>
                    <tbody>                       
                        @foreach ($personas as $persona)
                            <tr>
                                <td _msthash="690235" _msttexthash="57057">{{ $persona->tipoDocumento }}</td>
                                <td _msthash="690365" _msttexthash="58422">{{ $persona->documento }}</td>                                
                                <td _msthash="690625" _msttexthash="73892">{{ $persona->lugarExpedicion }}</td>
                                <td _msthash="690755" _msttexthash="82290">{{ $persona->nombres }}</td>
                                <td _msthash="690885" _msttexthash="491946">{{ $persona->apellidos }}
                                </td>
                                <td _msthash="690885" _msttexthash="491946">{{ $persona->direccionResidencia }}</td>
                                <td _msthash="690885" _msttexthash="491946">{{ $persona->celular }}</td>                                
                                <td _msthash="690885" _msttexthash="491946">{{ $persona->email }}</td> 
                                                               
                                <td class="d-flex my-xl-auto right-content">                                   
                                    <a href="{{ route('personas.edit', $persona->id) }}"
                                        class="btn btn-primary btn-icon me-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <a href="{{ route('personas.show', $persona) }}"
                                        class="btn btn-info btn-icon me-2">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    
                                   <a href="{{ route('personas.cambiarEstado', $persona) }}"
                                        title="{{ $persona->borrado == 0 ? 'Borrar' : 'Restablecer' }}"
                                        type="button"
                                        class="btn btn-sm {{ $persona->borrado == 0 ? 'btn-danger' : 'btn-warning' }}
                                        btn-icon me-2"><i
                                            class="typcn {{ $persona->borrado == 0 ? 'fa-solid fa-trash' : 'fa-solid fa-arrow-rotate-right' }}"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer">
            {{ $personas->links() }}
        </div>
    </div>
</div>
