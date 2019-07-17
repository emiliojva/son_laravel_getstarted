<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function cadastrar()
    {
        $variavel1 = "Teste Var Controllers";
        return view('aula12.cliente.cadastrar',compact(['variavel1']));
    }

}
