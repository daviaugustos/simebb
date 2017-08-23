@extends('layouts.menu-boilerplate')

@section('conteudo')
    @parent
    @section('tituloPagina', 'TITULO DA PAGINA NO SISTEMA')
    @section('tituloGuia', 'Título da guia')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Informações gerais
                        <small>Descrição</small>
                    </h2>
                    <br />
                </div>
                <div class="body">
                    Corpo da página
                </div>
            </div>
        </div>
    </div>
@stop