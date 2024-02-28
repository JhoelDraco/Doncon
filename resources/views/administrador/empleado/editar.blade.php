@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionEmpleado')

@section('content')

    <section>
        <form method="POST" action="{{route('empleado.actualizar', $empleado)}}" >
            @csrf

            @method('PUT')
            @include('administrador.empleado.componentes.formulario')
        </form>
    </section>

@endsection