<h1>Todos os produtos cadastrados</h1>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif
@foreach ($products as $p)
    <p>{{$p->name}}</p>
@endforeach
<hr>
{{$products->links()}}
