@extends('layouts.body-assets')

@section('pagina')
<div style="margin: 0 0 0 0; background-color: #00BCD4;">
    <div class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);"><b>SIMEBB</b></a>
                <small>Descrição do sistema</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_in" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="msg">Informe seu login</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Senha" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink">
                                <label for="remember">Manter conectado</label>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Entrar</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6 align-right">
                                <a href="forgot-password.html">Esqueceu sua senha?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customScripts')
    @parent

    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js')}}"></script>
    <script src="{{ asset('pages/examples/sign-in.js')}}"></script>

@endsection