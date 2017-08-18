<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated($usuarioRecemLogado)
    {
        $objetoUsuario = $this->buscaUsuarioLogado($usuarioRecemLogado);

        if($objetoUsuario->setor == 'COMUNICACAO') {
            return redirect('/comunicacao/home');
        } else if ($objetoUsuario->setor == 'COORDEDUCACAO'){
            return redirect('/coordeducacao/home');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Busca no banco o registro completo do usuário logado.
     *
     * @return User object
     */
    private function buscaUsuarioLogado($usuario){
        $usuarioBanco = DB::table('users')
            ->where('email', '=', $usuario->email)
            ->get();

        return $usuarioBanco[0];
    }
}
