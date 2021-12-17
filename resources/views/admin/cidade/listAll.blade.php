<h1>Todos as cidades cadastrados</h1>

@foreach ($cidade as $c)
    <p>{{$c->nome}}</p>
@endforeach
