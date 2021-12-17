<?php
use App\Models\Cidade;$cidade=Cidade::get();
?>
<form action="{{ route('Products.save') }}" method="post">
    @csrf
    <input type="text" name="name" id="name">
    <input type="number" name="valor" id="valor">
    <input type="number" name="qtd_estoque" id="qtd_estoque">
    <select name="cidades_id">

        @foreach ($cidade as $c)
            <option value='{{$c->id}}'>{{$c->nome}}</option>
        @endforeach

    </select>
    <button type="submit">Enviar</button>
</form>




