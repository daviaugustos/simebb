<?php

namespace App\Http\Controllers\CoordEducacao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoordEducacaoController extends Controller
{
    public function index(){
        return view('CoordEducacao.home');
    }
}
