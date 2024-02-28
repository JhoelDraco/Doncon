@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <form method="POST" action="{{route('personal.actualizar', $personal)}}" >
            @csrf

            @method('PUT')
            @include('administrador.personal.componentes.formulario')
        </form>
    </section>

@endsection