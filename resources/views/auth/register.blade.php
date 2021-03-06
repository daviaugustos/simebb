@extends('layouts.menu-boilerplate')

@section('conteudo')
    @parent
    @section('tituloPagina', 'ACESSO AO SISTEMA')
    @section('tituloGuia', 'SIMEBB - Adicionar usuário')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            <div class="header">
                <h2>
                    Informações gerais
                    <small>Por padrão, usuários ativos são exibidos primariamente</small>
                </h2>
            </div>
            <div class="body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('salvarUsuario') }}">
                    {{ csrf_field() }}

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="nome" class="form-label">Nome do usuário</label>
                            <input id="name" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="senha" class="form-label">Senha</label>
                            <input id="password" type="password" class="form-control" name="senha" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="password-confirm" class="form-label">Confirmar senha</label>
                            <input id="password-confirm" type="password" class="form-control" name="senha_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="setor">
                                <option value="COORDEDUCACAO">Coordenadoria da educação</option>
                                <option value="ESCOLA">Escola Estadual</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                            <button type="submit" class="btn bg-red btn-block btn-lg waves-effect">Cadastrar</button>
                        </div>
                    </div>
                    <br />
                    <br />
                </form>
            </div> 
            </div>
        </div>
    </div>
    
@stop