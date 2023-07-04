<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaPrincipal extends Controller
{
    public function index() {
        return view('pagina_principal');
    }
}
