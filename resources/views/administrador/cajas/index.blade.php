@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    @can('admin.caja.almacenar')
        <form method="POST" action="{{route('caja.almacenar')}}">
            @csrf

            <button type="submit">Agregar Caja</button>
            <a href="{{ route('caja.index') }}">Volver</a>
        </form> 
    @endcan
    
    @include('administrador.cajas.components.tabla')

@stop