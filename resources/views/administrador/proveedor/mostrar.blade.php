@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'MostrarProveedor')

@section('content')


<div class="container">
    <div class="custom-card">
        <div class="product-info">
            <label>CI o Razon Social:</label>
            <p>{{$proveedor->cirs}}</p>
        </div>
    </div>

    <div class="custom-card">
        <div class="product-info">
            <label>Celular:</label>
            <p>{{$proveedor->celular}}</p>
        </div>
    </div>

    

    <a href="{{route('proveedor.index')}}">volver</a>

@endsection

