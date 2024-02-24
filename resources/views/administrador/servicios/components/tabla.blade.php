<section>

    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descripcion</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>{{$servicio->tipo}}</td>
                    <td>{{$servicio->descripcion}}</td>
                    <td><a href="{{route('servicio.mostrar', $servicio->id)}}">Mostrar</a></td>
                    <td><a href="{{route('servicio.editar', $servicio->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('servicio.eliminar', $servicio->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $servicios->links() }}
</section>