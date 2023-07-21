
<div class="row">
<ul>
<div class="col-6">
    <li class="nav-link">
        <a class="btn btn-primary" href="{{ route('produto.index' ) }}">
            todos os proodutos
        </a>
    </li>
</div>
<div class="col-6">
    <li class="nav-link">
        <a class="btn btn-primary" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">
            Editar
        </a>
    </li>
</div>
</ul>
</div>
