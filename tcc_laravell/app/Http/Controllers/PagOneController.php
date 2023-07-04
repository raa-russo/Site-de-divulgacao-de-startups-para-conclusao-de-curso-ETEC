<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagOneController extends Controller
{
    public function index() {
        return view('perfil_empresa');
    }
}
