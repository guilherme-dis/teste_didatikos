<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products/create',[ProdutoController::class,'create'])->name('products.create');//Para auxiliar no cadastro enquanto não tem o vue

Route::post('/products',[ProdutoController::class,'save'])->name('Products.save');//Salva um produto
Route::get('/products', [ProdutoController::class, 'listAll'])->name('products.listall');//Lista todos os produtos
Route::get('/products/{id}', [ProdutoController::class, 'listAllById'])->name('products.listbyid');//Lista um produto por id

Route::get('/', function () {
    return view('welcome');
});
