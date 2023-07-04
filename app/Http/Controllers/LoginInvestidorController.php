<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginInvestidor;

class LoginInvestidorController extends Controller
{
    public function index() {
        return view('login_investidor');
    }


    public function store(Request $request) {
        $login_investidor = new LoginInvestidor();
        // echo json_encode($request->all()); 
        $login_investidor->email = $request->email;
        $login_investidor->senha = $request->senha;
        $login_investidor->telefone = $request->telefone;
        $login_investidor->cpf = $request->cpf;
        $login_investidor->rg = $request->rg;
        $login_investidor->ocupacao = $request->ocupacao;
        $login_investidor->endereco = $request->endereco;
        $login_investidor->save();
        return view('login_Empresa_Investidor');
        
    }
}