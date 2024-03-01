@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'editarMoneda')

@section('content')

    <section>
        <form method="POST" action="{{route('moneda.actualizar',$moneda)}}" >
            @csrf

            @method('PUT')
            @include('administrador.moneda.componentes.formulario')
        </form>
    </section>
@endsection