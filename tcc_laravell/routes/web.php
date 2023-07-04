<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagOneController;
use App\Http\Controllers\PaginaPrincipal;
use App\Http\Controllers\LandPage;
use App\Http\Controllers\Login;
use App\Http\Controllers\LoginEmpresaController;
use App\Http\Controllers\LoginInvestidorController;
use App\Http\Controllers\ResultadoPesquisa;
use App\Http\Controllers\PerfilUsuario;
use App\Http\Controllers\LoginEmpresa_Investidor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('perfil_empresa', [PagOneController::class, 'index']); 
Route::get('pagina_principal', [PaginaPrincipal::class, 'index']); 
Route::get('land_page', [LandPage::class, 'index']); 
Route::get('login', [Login::class, 'index']); 
Route::get('login_Empresa', [LoginEmpresaController::class, 'index']); 
Route::get('login_investidor', [LoginInvestidorController::class, 'index']); 

Route::get('resultado_pesquisa', [ResultadoPesquisa::class, 'index']); 
Route::get('/resultado_pesquisa/{resultado}', [ResultadoPesquisa::class, 'show'])->name('resultado.show');

Route::get('perfil_usuario', [PerfilUsuario::class, 'index']); 
Route::get('login_Empresa_Investidor', [LoginEmpresa_Investidor::class, 'index']); 
   
Route::post('login_Empresa', [LoginEmpresaController::class, 'store']); 
Route::post('login_investidor', [LoginInvestidorController::class, 'store']); 