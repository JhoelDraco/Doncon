
<section>

    <table>
        <thead>
            <tr>
                <th>Marca</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($marcas as $marca)
                <tr>
                    <td>{{$marca->marca}}</td>
                 
                    <td><a href="{{route('marca.mostrar', $marca->id)}}">Mostrar</a></td>
                    <td><a href="{{route('marca.editar', $marca->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('marca.eliminar', $marca->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $marcas->links() }}
</section>