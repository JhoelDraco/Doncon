@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <form method="POST" action="{{route('producto.actualizar', $producto)}}" >
            @csrf

            @method('PUT')
            @include('administrador.productos.components.formulario')
        </form>
    </section>

@endsection