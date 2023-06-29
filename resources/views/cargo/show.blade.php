@extends('layouts.base')
@section('content')


<h1>cargo: {{$cargo->cargo}}</h1>


<table>
    <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#">Editar</a>
                <a href="#">Ver</a></td>
            <td>
                ---
            </td>
        </tr>
    </tbody>
</table>

@endsection

@section('scripts')


@endsection
