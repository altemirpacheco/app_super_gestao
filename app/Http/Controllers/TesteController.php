<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        // echo 'Parametro 1: ' . $p1 . '<br>';
        // echo 'Parametro 2: ' . $p2;
        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]); // Passando parâmetros pelo método de array associativo
        // return view('site.teste', compact('p1', 'p2')); // Passando parâmetros pelo método compact
        return view('site.teste')->with('p1', $p1)->with('p2', $p2); // Passando parâmetros pelo método with. O primeiro parametro é a variavel que vai ser usada na view e o segundo é o que vai ser encaminhado
    }
}
