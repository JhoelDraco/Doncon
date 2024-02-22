@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <form method="POST" action="{{route('cliente.actualizar', $cliente)}}" >
            @csrf

            @method('PUT')
            @include('administrador.clientes.components.formulario')
        </form>
    </section>

@endsection