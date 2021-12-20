<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateCidade;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function listAll()
    {
        
        return Cidade::get();
    }

    public function listById($id)
    {
        $cidade = Cidade::where('id', $id)->first();

        return view('admin/cidade/listAllById', compact('cidade'));
    }

    public function create()
    {
        return view('admin/cidade/create');
    }

    public function save(CreateUpdateCidade $request)
    {
        Cidade::create($request->all());
        return redirect()->route('cidade.listAll');
    }

}
