<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listAll()
    {
        $products = Produto::latest()->paginate();
        //dd($products);

        return view('admin/products/listAll', compact('products'));
    }

    public function listById($id)
    {
        //$product = Produto::where('id', $id)->first();

        if (!$product = Produto::find($id)) {
            return redirect()->route('products.listall');
        }
        return view('admin/products/listAllById', compact('product'));
    }

    public function create()
    {
        return view('admin/products/create');
    }

    public function save(CreateUpdateProduto $request)
    {
        Produto::create($request->all());
        return redirect()->route('products.listall');
    }

    public function destroy($id)
    {
        if (!$produto = Produto::find($id))
            return redirect()->route('products.listAll');
        $produto->delete();
        //TODO fazer essa mensagem abaixo para todos
        return redirect()->route('products.listall')->with('message',"Post deletado");
    }
    public function edit($id){
        if(!$produto=Produto::find($id)){
            return redirect()->route('products.listAll');
        }
        return view('admin.products.edit',compact('produto'));
    }

    public function updade(CreateUpdateProduto $request,$id){
        if(!$produto=Produto::find($id)){
            return redirect()->route('products.listAll');
        }
        $produto->update($request->all());
        return redirect()->route('products.listall');
    }
}
