@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')


<div class="container">
    <div class="custom-card">
        <div class="product-info">
            <label for="detalleProducto" class="product-label">Codigo Del Producto:</label>
            <p class="product-value">{{$producto->codigo}}</p>
        </div>
    </div>

    <div class="custom-card">
        <div class="product-info">
            <label for="detalleProducto" class="product-label">Nombre del Producto:</label>
            <p class="product-value">{{$producto->nombre}}</p>
        </div>
    </div>

    <div class="custom-card3">
        <div class="product-info">
            <label for="detalleProducto" class="product-label">Detalle del Producto:</label>
            <p class="product-value">{{$producto->detalle}}</p>
        </div>
    </div>

    <div class="custom-card">
        <div class="product-info">
            <label for="detalleProducto" class="product-label">Precio del Producto:</label>
            <p class="product-value">{{$producto->precio}}</p>
        </div>
    </div>

    <div class="custom-card">
        <div class="product-info">
            <label for="detalleProducto" class="product-label">Stock del Producto:</label>
            <p class="product-value">{{$producto->stock}}</p>
        </div>
    </div>

    <div class="custom-card">
        <div class="product-info">
            <label for="detalleProducto" class="product-label">Imagen del producto:</label>
            <img src="{{$producto->imagen}}" alt="Imagen del producto" class="product-image">
        </div>
    </div>
</div>

    

    <a href="{{route('producto.index')}}">volver</a>

@endsection

