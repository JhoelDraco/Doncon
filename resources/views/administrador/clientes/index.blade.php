@extends('adminlte::page')

@section('css')
    
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    <a href="{{route('cliente.crear')}}">añadir cliente</a>
    
    @include('administrador.clientes.components.tabla')

@stop