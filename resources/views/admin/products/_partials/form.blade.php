<?php
use App\Models\Cidade;$cidade=Cidade::get();
?>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach</ul>
@endif
@csrf
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
