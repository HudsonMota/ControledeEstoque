@extends('layout.principal')
@section('conteudo')
    <div class="container">
        <h1>Listagem Módulos</h1>
        <div class="row" id="modules">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Produto</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Produtos') }}">Listar Produtos</a></li>
                        <li class="list-group-item"><a href="{{ route('Cadastrar Produto') }}">Cadastrar Produto</a></li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Categorias</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Categorias') }}">Listar Categorias</a></li>
                        <li class="list-group-item"><a href="{{ route('Cadastrar Categoria') }}">Cadastrar Categoria</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Destaques</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Destaques') }}">Listar Destaques</a></li>
                        <li class="list-group-item"><a href="{{ route('Listar GrupoProdutos') }}">Listar Grupo Produto</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Entrada</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Entradas') }}">Listar Entradas</a></li>
                        <li class="list-group-item"><a href="{{ route('Cadastrar Entrada') }}">Cadastrar Entrada</a></li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Saída</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Saidas') }}">Listar Saídas</a></li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Venda</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Vendas') }}">Listar Vendas</a></li>
                        <li class="list-group-item"><a href="{{ route('Cadastrar Venda') }}">Cadastrar Venda</a></li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Cliente</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Clientes') }}">Listar Clientes</a></li>
                        <li class="list-group-item"><a href="{{ route('Cadastrar Cliente') }}">Cadastrar Cliente</a></li>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2>Fornecedores</h2>
                    <div class="caption">
                        <li class="list-group-item"><a href="{{ route('Listar Fornecedores') }}">Listar Fornecedores</a>
                        </li>
                        <li class="list-group-item"><a href="{{ route('Cadastrar Fornecedor') }}">Cadastrar
                                Fornecedor</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .container {
            background-color: rgb(211, 211, 211);
        }

        #modules {
            background-color: rgb(112, 112, 112);
        }

        .thumbnail {
            margin-top: 20px;
        }

        h2 {
            margin-left: 8px;
        }

    </style>

@stop
