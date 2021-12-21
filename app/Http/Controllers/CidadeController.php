<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateCidade;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function returnAll()
    {
        return $cidade = Cidade::get();
    }

    public function returnById($id)
    {
        return Cidade::where('id', $id)->first();
    }

    public function create()
    {
        return view('admin/cidade/create');
    }

    public function save(CreateUpdateCidade $request)
    {
        Cidade::create($request->all());
    }

}
