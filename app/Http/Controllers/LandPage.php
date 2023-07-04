<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandPage extends Controller
{
    public function index() {
        return view('land_page');
    }
}
