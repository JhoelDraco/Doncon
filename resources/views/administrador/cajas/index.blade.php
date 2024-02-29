@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    <form method="POST" action="{{route('caja.almacenar')}}">
        @csrf

        <button type="submit">Agregar Caja</button>
    </form>
    
    @include('administrador.cajas.components.tabla')

@stop