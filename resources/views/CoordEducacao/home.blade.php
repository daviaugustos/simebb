@extends('layouts.menu-boilerplate')

@section('conteudo')
    @parent
    @section('tituloPagina', 'PÁGINA INICIAL')
    @section('tituloGuia', 'SIMEBB - Coordenadoria da Educação')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Informações gerais
                        <small>Por padrão, usuários ativos são exibidos primariamente</small>
                    </h2>
                    <br />
                    <a href="{{route('viewAdicionarUsuario')}}">
                        <button type="button" class="btn btn-primary waves-effect" >
                            <i class="material-icons">person_add</i>
                            <span>Cadastrar usuário</span>
                        </button>
                    </a>
                </div>
                <div class="body">teste
                </div>
            </div>
        </div>
    </div>
@stop