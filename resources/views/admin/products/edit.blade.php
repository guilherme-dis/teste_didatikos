<?php
use App\Models\Cidade;$cidade=Cidade::get();
?>
<h1>Editar o Post<strong>{{$produto->title}}</strong></h1>


<form action="{{route('products.put',$produto->id)}}" method="post">

    @csrf
    @method('put')
    <!--TODO FAZER A EXPORTAÇÃO DO SELECT, PARA QUE APARECA A CIDADE DO PRODUTO-->
        <input type="text" name="name" id="name" value="{{$produto->name ?? old('name')}}">
        <input type="number" name="valor" id="valor" value="{{$produto->valor??old('valor')}}">
        <input type="number" name="qtd_estoque" id="qtd_estoque" value="{{$produto->qtd_estoque??old('qtd_estoque')}}">
        <select name="cidades_id">
            <!--TODO conseguir colocar o nome da cidade que já esta cadastrado-->

            @foreach ($cidade as $c)
                <option value='{{$c->id}}'>{{$c->nome}}</option>
            @endforeach

        </select>
        <button type="submit">Enviar</button>
</form>
