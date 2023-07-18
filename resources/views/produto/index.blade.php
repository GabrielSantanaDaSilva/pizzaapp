@extends('layouts.base')
@section('content')
    <h1>Cargos</h1>

<table class="table">

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
                    <a class="btn btn-secondary" href="{{ route('cargo.edit', ['id'=>$cargo->id_cargo]) }}">
                        Editar
                    </a>
                    <a class="btn btn-primary" href="{{ route('cargo.show', ['id'=>$cargo->id_cargo]) }}">
                        Ver</a>
                    <a class="btn btn-success" href="{{ route('cargo.destroy', ['id'=>$cargo->id_cargo]) }}">
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
@endsection

@section('scripts')


@endsection
