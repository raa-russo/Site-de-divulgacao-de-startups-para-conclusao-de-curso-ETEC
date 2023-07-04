<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultadoPesquisa extends Controller
{
    public function index() {
        $resultado_pesquisa = [
            'Apple' => [
                'nome' => 'Apple',
                'dataFundacao' => '1 de abril de 1976',
                'imagemPerfil' => 'apple',
                'sede' => 'Cupertino, California, EUA',
                'areaAtuacao' => 'Moda',
                'categorias' => [
                    'tecnologia', 'enovação', 'empreendorismo',
                ],
                'avaliacao' => 5,
            ],
            'Rolex' => [
                'nome' => 'Rolex',
                'dataFundacao' => '1 de abril de 1976',
                'imagemPerfil' => 'rolex',
                'sede' => 'Cupertino, California, EUA',
                'areaAtuacao' => 'Moda',
                'categorias' => [
                    'moda', 'luxo', 
                ],
                'avaliacao' => 4.5,
            ],
            'Lacoste' => [
                'nome' => 'Lacoste',
                'dataFundacao' => '1 de abril de 1976',
                'imagemPerfil' => 'lacoste',
                'sede' => 'Cupertino, California, EUA',
                'areaAtuacao' => 'Moda',
                'categorias' => [
                    'moda', 'luxo',
                ],
                'avaliacao' => 5,
            ],
        ];

        return view('resultado_pesquisa')->with('resultado_pesquisa', $resultado_pesquisa);
    }

    public function show($resultado_pesquisa)
    {
    }
}
