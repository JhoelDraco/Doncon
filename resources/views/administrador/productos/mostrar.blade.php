@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')


<div class="container">
    <div class="custom-card1">
        <div class="product-info1">
            <label for="detalleProducto" class="product-label1">Codigo Del Producto:</label>
            <p class="product-value1">{{$producto->codigo}}</p>
        </div>
    </div>

    <div class="custom-card2">
        <div class="product-info2">
            <label for="detalleProducto" class="product-label2">Nombre del Producto:</label>
            <p class="product-value2">{{$producto->nombre}}</p>
        </div>
    </div>

    <div class="custom-card3">
        <div class="product-info3">
            <label for="detalleProducto" class="product-label3">Detalle del Producto:</label>
            <p class="product-value3">{{$producto->detalle}}</p>
        </div>
    </div>

    <div class="custom-card4">
        <div class="product-info4">
            <label for="detalleProducto" class="product-label4">Precio del Producto:</label>
            <p class="product-value4">{{$producto->precio}}</p>
        </div>
    </div>

    <div class="custom-card5">
        <div class="product-info5">
            <label for="detalleProducto" class="product-label5">Stock del Producto:</label>
            <p class="product-value5">{{$producto->stock}}</p>
        </div>
    </div>

    <div class="custom-card6">
        <div class="product-info6">
            <label for="detalleProducto" class="product-label6">Imagen del producto:</label>
            <img src="{{$producto->imagen}}" alt="Imagen del producto" class="product-image6">
        </div>
    </div>
</div>

    

    <a href="{{route('producto.index')}}">volver</a>

@endsection

