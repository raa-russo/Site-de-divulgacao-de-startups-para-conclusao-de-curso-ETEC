<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginEmpresa;

class LoginEmpresaController extends Controller
{
    public function index() {
        return view('login_Empresa');
    }
    public function store(Request $request) {
        $login_empresa = new LoginEmpresa();
        // echo json_encode($request->all()); comentar control k ctlc , descomentar ctl k ctl u.
        $login_empresa->email = $request->email;
        $login_empresa->senha = $request->senha;
        $login_empresa->telefone = $request->telefone;
        $login_empresa->cnpj = $request->cnpj;
        $login_empresa->area_atuacao = $request->area_atuacao;
        $login_empresa->endereco = $request->endereco;
        $login_empresa->save();
        return view('login_Empresa_Investidor');
        
    }
}
