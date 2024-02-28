@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionTipo')

@section('content')

    <section>
        <form method="POST" action="{{route('tipo.actualizar', $tipo)}}" >
            @csrf

            @method('PUT')
            @include('administrador.tipo.componentes.formulario')
        </form>
    </section>

@endsection