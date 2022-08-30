<div>
    
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="card-title" _msthash="2344056" _msttexthash="593021">Proyectos</h3>
        </div>

        <div class="card-body">
            <div class="row mb-4">
                <div class="col-10 ">
                    <a class="btn btn-primary" href="{{ route('proyectospp.create') }}">Nuevo</a>
                </div>
                <div class="col mt-2">
                    <input wire:model="search" class="form-control" type="text" placeholder="Buscar proyecto...">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                    <thead>
                        <tr>
                            <th _msthash="682773" _msttexthash="76193">Comuna</th>
                            <th _msthash="682903" _msttexthash="112346">Nombre</th>
                            {{-- <th _msthash="683033" _msttexthash="137553">descripcion</th> --}}
                            <th _msthash="683163" _msttexthash="224783">LineaTematica</th>
                            <th _msthash="683293" _msttexthash="77194">Dependencia</th>
                            <th _msthash="683423" _msttexthash="385671">Valor Total</th>
                            <th _msthash="683423" _msttexthash="385671">Url pdf</th>
                            <th _msthash="683423" _msttexthash="385671">Posicion</th>                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proyectos as $proyecto)
                            <tr>
                                <td _msthash="690235" _msttexthash="57057">{{ $proyecto->comuna }}</td>
                                <td _msthash="690365" _msttexthash="58422">{{ $proyecto->nombre }}</td>
                                {{-- <td _msthash="690495" _msttexthash="575224">{{$proyecto->descripcion}}</td> --}}
                                <td _msthash="690625" _msttexthash="73892">{{ $proyecto->lineaTematica }}</td>
                                <td _msthash="690755" _msttexthash="82290">{{ $proyecto->dependencia }}</td>
                                <td _msthash="690885" _msttexthash="491946">{{ number_format($proyecto->valorTotal) }}
                                </td>
                                <td _msthash="690885" _msttexthash="491946">{{ $proyecto->urlpdf }}</td>
                                <td _msthash="690885" _msttexthash="491946">{{ $proyecto->posicion }}</td>                                
                                <td class="d-flex my-xl-auto right-content">                                   
                                    <a href="{{ route('proyectospp.edit', $proyecto->id) }}"
                                        class="btn btn-primary btn-icon me-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <a href="{{ route('proyectospp.show', $proyecto->id) }}"
                                        class="btn btn-info btn-icon me-2">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    
                                    <a href="{{ route('proyectospp.cambiarEstado', $proyecto) }}"
                                        title="{{ $proyecto->borrado == 0 ? 'Borrar' : 'Restablecer' }}"
                                        type="button"
                                        class="btn btn-sm {{ $proyecto->borrado == 0 ? 'btn-danger' : 'btn-warning' }}
                                        btn-icon me-2"><i
                                            class="typcn {{ $proyecto->borrado == 0 ? 'fa-solid fa-trash' : 'fa-solid fa-arrow-rotate-right' }}"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer">
            {{ $proyectos->links() }}
        </div>
    </div>
</div>
