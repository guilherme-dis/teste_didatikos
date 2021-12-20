<?php

use App\Models\Cidade;

$cidade = Cidade::get();
?>


<h1>Cadastro Produto</h1>
<form action="{{ route('Products.save') }}" method="post">
    @csrf

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{$produto->name ?? old('name')}}" required>
    <label for="valor">Valor do produto;</label>

    <input type="number" name="valor" id="valor" value="{{$produto->valor??old('valor')}}" required>
    <label for="qtd_estoque">Quantidade em estoque:</label>
    <input type="number" name="qtd_estoque" id="qtd_estoque" value="{{$produto->qtd_estoque??old('qtd_estoque')}}"
           required>
    <label for="cidades_id">Selecione a cidade</label>

    <select name="cidades_id" required>

        @foreach ($cidade as $c)
            <option value='{{$c->id}}'>{{$c->nome}}</option>
        @endforeach

    </select>
    <button type="submit">Enviar</button>


</form>




