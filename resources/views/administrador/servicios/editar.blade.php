@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <section>
        <form method="POST" action="{{route('servicio.actualizar', $servicio)}}" >
            @csrf

            @method('PUT')
            @include('administrador.usuarios.components.formulario')
        </form>
    </section>

@endsection