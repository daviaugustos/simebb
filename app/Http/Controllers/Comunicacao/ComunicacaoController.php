<?php

namespace App\Http\Controllers\Comunicacao;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

class ComunicacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewGerenciarUsuarios(){
        $usuariosCadastrados = User::all();

        $viewBag = [
            "usuariosCadastrados" => $usuariosCadastrados,
        ];
        return view('Comunicacao.gerenciar-usuarios', $viewBag);
    }

    public function index(){
        return view('Comunicacao.home');
    }

}
