<section>
    
    <table>
        <thead>
            <tr>
                <th>Nombre Moneda</th>
                <th>Moneda Entrante</th>
                <th>Tipo Cambio</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($monedas as $moneda)
            <tr>
                <td>{{$moneda->nombre_moneda}}</td>
                <td>{{$moneda->moneda_entrante}}</td>
                <td>{{$moneda->tipo_cambio}}</td>
                <td><a href="{{route('moneda.mostrar', $moneda->id)}}">Mostrar</a></td>
                <td><a href="{{route('moneda.editar', $moneda->id)}}">Editar</a></td>
                <td>
                    <form method="POST" action="{{route('moneda.eliminar', $moneda->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    {{ $monedas->links() }}
</section>