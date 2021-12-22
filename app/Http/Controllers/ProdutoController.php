<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function returnAll()//Devolve todos os produtos cadastrados no banco.
    {
        return Produto::latest()->paginate();
    }

    public function returnById($id)
    {
        return Produto::find($id);
    }


    public function delete($id)
    {
        Produto::find($id)->delete();
    }

    public function save(CreateUpdateProduto $request)
    {
        Produto::create($request->all());
    }

    public function put(CreateUpdateProduto $request,$id){
        Produto::find($id)->update($request->all());

    }
}
