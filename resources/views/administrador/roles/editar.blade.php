@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <section>
        <form method="POST" action="{{route('rol.actualizar', $rol)}}" >
            @csrf

            @method('PUT')
           
            @include('administrador.roles.components.formulario')

        </form>
    </section>

@endsection