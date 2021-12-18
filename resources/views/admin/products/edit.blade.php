<h1>Editar o Post<strong>{{$produto->title}}</strong></h1>
<form action="{{route('products.put',$produto->id)}}" method="post">
    @method('put')
    @include('admin.products._partials.form')
</form>
