@extends('adminlte::page')

@section('css')
    
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    @can('admin.rol.crear')
        <a href="{{route('rol.crear')}}">Agregar Rol</a>
    @endcan
    
    @include('administrador.roles.components.tabla')

@stop