@extends('layouts.menu-boilerplate')

@section('conteudo')
    @parent
    @section('tituloPagina', 'ACESSO AO SISTEMA')

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
            <div class="body">
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Setor</th>
                            <th>Nome</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuariosCadastrados as $usuario)
                            <tr>
                                <th scope="row">{{$usuario["setor"]}}</th>
                                <td>{{$usuario["name"]}}</td>
                                <td>{{$usuario["email"]}}</td>
                                {{--  <td><a href=""><i class="material-icons">mode_edit</i> Alterar</a></td>  --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            </div>
        </div>
    </div>
    
@stop