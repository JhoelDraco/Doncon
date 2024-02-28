@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'Edición de Empleado')

@section('content')

    <section>
        <form method="POST" action="{{route('empleado.actualizar', $empleado)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Llena automáticamente los campos del formulario con los datos del empleado -->
            <div>
                <label for="nombre1">Nombre 1:</label>
                <input name="nombre1" type="text" value="{{ $empleado->nombre1 }}">
            </div>

            <div>
                <label for="nombre2">Nombre 2:</label>
                <input name="nombre2" type="text" value="{{ $empleado->nombre2 }}">
            </div>

            <div>
                <label for="apellido1">Apellido 1:</label>
                <input name="apellido1" type="text" value="{{ $empleado->apellido1 }}">
            </div>

            <div>
                <label for="apellido2">Apellido 2:</label>
                <input name="apellido2" type="text" value="{{ $empleado->apellido2 }}">
            </div>

            <div>
                <label for="area">Area:</label>
                <input name="area" type="text" value="{{ $empleado->area }}">
            </div>


            <div>
                <button type="submit">Aceptar</button>
                <a href="{{ route('empleado.index') }}">Volver</a>
            </div>
        </form> 
    </section>

@endsection
