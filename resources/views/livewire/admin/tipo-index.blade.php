
<section>

    <table>
        <thead>
            <tr>
                <th>Tipo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <td>{{$tipo->tipo}}</td>
                 
                    <td><a href="{{route('tipo.mostrar', $tipo->id)}}">Mostrar</a></td>
                    <td><a href="{{route('tipo.editar', $tipo->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('tipo.eliminar', $tipo->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tipos->links() }}
</section>