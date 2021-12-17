<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
   public function listAll(){
      $products=Produto::get();
      //dd($products);

        return view('admin/products/listAll',compact('products'));
   }
   public function listAllById($id){
       $product=Produto::where('id',$id)->first();
       //dd($product);
       return view('admin/products/listAllById',compact('product'));
   }
}
