@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'Edición de Producto')

@section('content')

    <section>
        <form method="POST" action="{{ route('producto.actualizar', $producto) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Llena automáticamente los campos del formulario con los datos del producto -->
            <div>
                <label for="codigoProducto">Codigo:</label>
                <input name="codigo" type="text" value="{{ $producto->codigo }}">
            </div>

            <div>
                <label for="nombreProducto">Nombre:</label>
                <input name="nombre" type="text" value="{{ $producto->nombre }}">
            </div>

            <div>
                <label for="detalleProducto">Detalle:</label>
                <input name="detalle" type="text" value="{{ $producto->detalle }}">
            </div>

            <div>
                <label for="precioProducto">Precio del producto:</label>
                <input name="precio" type="number" value="{{ $producto->precio }}">
            </div>

            <div>
                <label for="stockProducto">Stock del producto:</label>
                <input name="stock" type="number" value="{{ $producto->stock }}">
            </div>


            <div>
                <button type="submit">Aceptar</button>
                <a href="{{ route('producto.index') }}">Volver</a>
            </div>
        </form> 
    </section>

@endsection
