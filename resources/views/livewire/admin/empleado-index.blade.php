
<section>

    <table>
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Area</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->nombre1}} {{$empleado->nombre2}}</td>
                    <td>{{$empleado->apellido1}} {{$empleado->apellido2}}</td>
                    <td>{{$empleado->area}}</td>
                 
                    <td><a href="{{route('empleado.mostrar', $empleado->id)}}">Mostrar</a></td>
                    <td><a href="{{route('empleado.editar', $empleado->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('empleado.eliminar', $empleado->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $empleados->links() }}
</section>