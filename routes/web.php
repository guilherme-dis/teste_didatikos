<?php

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

Route::get('/products', [\App\Http\Controllers\ProdutoController::class, 'listAll']);
Route::get('/products/{id}', [\App\Http\Controllers\ProdutoController::class, 'listAllById']);
Route::get('/', function () {
    return view('welcome');
});
