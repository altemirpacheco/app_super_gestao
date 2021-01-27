<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            'f1' => 'fornecedor 1',
            'f2' => 'fornecedor 1',
            'f3' => 'fornecedor 1',
            'f4' => 'fornecedor 1',
            'f5' => 'fornecedor 1',
            'f6' => 'fornecedor 1',
            'f7' => 'fornecedor 1',
            'f8' => 'fornecedor 1',
            'f9' => 'fornecedor 1',
            'f10' => 'fornecedor 1',
            'f11' => 'fornecedor 1'
        ];
        // $fornecedores = [];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
