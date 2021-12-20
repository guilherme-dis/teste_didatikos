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
Route::get('/products/create',[ProdutoController::class,'create'])->name('products.create');//Para auxiliar no cadastro enquanto não tem o vue
Route::get('/products/edit/{id}',[ProdutoController::class,'edit'])->name('procucts.edit');

Route::delete('/products/{id}',[ProdutoController::class,'destroy'])->name("products.destroy");
Route::post('/products',[ProdutoController::class,'save'])->name('Products.save');//Salva um produto
Route::get('/products', [ProdutoController::class, 'listAll'])->name('products.listall');//Lista todos os produtos
Route::get('/products/{id}', [ProdutoController::class, 'listById'])->name('products.listbyid');//Lista um produto por id
Route::put('products/{id}',[ProdutoController::class,'updade'])->name('products.put');

//CIDADE
Route::get('/cidades/create',[CidadeController::class,'create'])->name('cidade.create');//Cadastrar cidades
Route::get('/cidades',[CidadeController::class,'listAll'])->name("cidade.listAll");//Lista todas as cidades cadastradas
Route::get('/cidades/{id}',[CidadeController::class,'listById'])->name("cidade.listById");//Lista uma cidade por id
Route::post('/cidades',[CidadeController::class,'save'])->name('cidade.save');//cadastro de cidade

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
