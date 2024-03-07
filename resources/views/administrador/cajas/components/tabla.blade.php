<section>

    <table>
        <thead>
            <tr>
                <th>Numero de Caja</th>
                <th>Estado de Caja</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($cajas as $caja)
                <tr>
                    <td>{{$caja->id}}</td>
                    <td>@if($caja->estado == 0) Apagado @else Encendido @endif</td>

                    @can('admin.caja.activar')
                        <td>
                            @if ($caja->estado == true)
                                <form method="POST" action="{{route('caja.desactivar', $caja->id)}}">
                                    @csrf

                                    @method('PUT')
                                    <button type="submit">Desactivar</button>
                                </form>
                            @else
                                <form method="POST" action="{{route('caja.activar', $caja->id)}}">
                                    @csrf

                                    @method('PUT')
                                    <button type="submit">Activar</button>
                                </form>
                            @endif    
                        </td>
                    @endcan
                                    
                    @can('admin.caja.eliminar')
                        <td>
                            <form method="POST" action="{{route('caja.eliminar', $caja->id)}}">
                                @csrf

                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    @endcan
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</section>