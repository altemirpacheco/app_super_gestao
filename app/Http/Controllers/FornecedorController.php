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
            'f11' => 'fornecedor 1',
            'f12' => [
                'nome' => 'Nome 1',
                'status' => 'N',
                'cnpj' => null
            ],

            0 => [
                'nome' => 'Nome 2',
                'status' => 'N',
                'cnpj' => null
            ]
        ];
        // $fornecedores = [];

        $testeUnless = [
            0 => [
                'nome' => 'Nome 1',
                'status' => 'N',
                'cnpj' => null
            ]
        ];

        // Operador condicional ternário
        // condição ? se for verdadeiro : se for falso;
        // pode haver um cadeamento de condições, por exemplo:
        // condição ? se for verdadeiro : (se for falso - condição ? se for verdadeiro : se for falso);

        // $msg = isset($testeUnless[0]['cnpj']) ? 'Cnpj foi informado' : 'Cnpj não foi informado';
        // echo $msg;
        // $msg2  = ($testeUnless[0]['cnpj'] == null) ? '<br>Cnpj está vazio' : '<br>Cnpj não está vazio';
        // echo $msg2;

        $testeSeVariavelExiste = 'Teste';

        return view('app.fornecedor.index', compact('fornecedores', 'testeUnless', 'testeSeVariavelExiste'));
    }
}
