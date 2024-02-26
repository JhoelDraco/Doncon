<section>

    <table>
        <thead>
            <tr>
                <th>Rol</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{$rol->name}}</td>
                    
                    @can('admin.rol.mostrar')
                        <td><a href="{{route('rol.mostrar', $rol->id)}}">Mostrar</a></td>
                    @endcan
                    
                    @can('admin.rol.editar')
                        <td><a href="{{route('rol.editar', $rol->id)}}">Editar</a></td>
                    @endcan
                    
                    @can('admin.rol.eliminar')
                        <td>
                            <form method="POST" action="{{route('rol.eliminar', $rol->id)}}">
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