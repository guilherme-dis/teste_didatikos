<h1>Produto</h1>
<p>{{$product->name}}</p>

<form action="{{route('products.destroy',$product->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button>
</form>

