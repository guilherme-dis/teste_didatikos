<h1>Todos os produtos cadastrados</h1>

@foreach ($products as $p)
    <p>{{$p->name}}</p>
@endforeach
