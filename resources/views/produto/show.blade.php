@extends('layouts.base')
@section('content')

{{-- menu --}}
@include('produto.partials.menu')

<h1>Produto: {{$produto->nome}}</h1>
<h1>Tipo: {{$produto->tipo->tipo}}</h1>
<p>Descrição {{ nl2br($produto->descricao) }}</p>

@if ($produto->observacoes)

    <p>
        {{!! nl2br($produto->observacoes) !!}}
    </p>

@endif



<table class="table">

    <h6>

        <a href="{{route('produto.createTamanho', ['id_produto'=>$produto->id_produto])}}">
            
            adicionar novo produto
        </a>

    </h6>

    <thead>
        <tr>
            <th>Ações</th>
            <th>Tamanho</th>
            <th>Preço</th>
            <th>obs</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($produto->tamanhos()->get() as $tamanho)




        <tr>
            <td><a href="#">Editar</a>

            <td>
                {{ $tamanho->tamanho->tamanho }}
            </td>

            <td>{{ $tamanho->preco}}</td>

            <td> {{ $tamanho->observacoes}} </td>
        </tr>
        @empty
        <td colspan="2"> Nenhum tamanho definido</td>
@endforelse
    </tbody>
</table>

@endsection

@section('scripts')


@endsection
