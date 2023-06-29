<table>

    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Cargo</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($cargos as $cargo )


            <tr>
                <td>
                    <a href="{{ route('cargo.edit', ['id'=>$cargo->id_cargo]) }}">
                        Editar
                    </a>
                    <a href="{{ route('cargo.destroy', ['id'=>$cargo->id_cargo]) }}">
                        Excluir
                    </a>
                </td>
                <td>
                    {{$cargo->id_cargo}}
                </td>
                <td>
                    {{$cargo->cargo}}
                </td>
            </tr>
            @endforeach
        </tbody>


</table>
