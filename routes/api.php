<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//PRODUTO
Route::post('/products',[ProdutoController::class,'save'])->name('Products.save');//Salva um produto
Route::delete('/products/{id}',[ProdutoController::class,'delete'])->name("products.delete");//Deleta um item
Route::get('/products', [ProdutoController::class, 'returnAll'])->name('products.returnAll');//Devolve todos os Produtos cadastrados.
Route::get('/products/{id}', [ProdutoController::class, 'returnById'])->name('products.returnById');//Devolve um elemento por id
Route::put('products/{id}',[ProdutoController::class,'put'])->name('products.put');

//CIDADE
Route::get('/cities',[CidadeController::class,'returnAll'])->name("cidade.returnAll");//Devolve todas as cidades
Route::get('/cities/{id}',[CidadeController::class,'returnById'])->name("cidade.returnById");//Devolve uma cidade por id
Route::post('/cities',[CidadeController::class,'save'])->name('cidade.save');//cadastro de cidade

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
