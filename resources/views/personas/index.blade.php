@extends('layouts/plantilla')

@section('contenido')

@if (session('info'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
        <span class="alert-inner--text" _msthash="1460381" _msttexthash="1753440"><strong _istranslated="1">{{session('info')}}</strong> </span>
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Cerrar" _mstaria-label="76414">
            <span aria-hidden="true" _msthash="2039440" _msttexthash="19565">×</span>
        </button>
    </div>
       
@endif

@livewire('persona-index')

@endsection