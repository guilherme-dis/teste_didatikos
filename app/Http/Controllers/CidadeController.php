<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function listAll()
    {
        $cidade = Cidade::get();
        return view('admin/cidade/listAll', compact('cidade'));
    }
    public function listById($id)
    {
        $cidade = Cidade::where('id', $id)->first();

        return view('admin/cidade/listAllById', compact('cidade'));
    }
}
