<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

class AdminController extends Controller
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
        return view('Admin.gerenciar-usuarios', $viewBag);
    }


}
