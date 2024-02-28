@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <form method="POST" action="{{route('cliente.actualizar', $cliente->id)}}" >
            @csrf

            @method('PUT')
            @if($cliente->tipo == "E")
                @include('administrador.clientes.components.formulario_empresa')
            @else
                @include('administrador.clientes.components.formulario_persona')
            @endif
        </form>
    </section>

@endsection