<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.simplo7.net/static/17741/configuracao/favicon.png" type="image/x-icon"
        rel="shortcut icon" />
    <!-- <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"> -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/personal.css"> -->

    <meta name="viewport" content="width=device-width">

    <title>Controle de Estoque</title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid" id="container">
            <div class="navbar-header" style="background-color: rgb(0, 0, 238);">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('Pagina inicial') }}" style="color: white;">Controle de
                    Estoque</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Produtos') }}" id="menuStyle">Listar Produtos</a></li>
                            <li><a href="{{ route('Cadastrar Produto') }}" id="menuStyle">Cadastrar Produto</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Categorias <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Categorias') }}" id="menuStyle">Listar Categorias</a></li>
                            <li><a href="{{ route('Cadastrar Categoria') }}" id="menuStyle">Cadastrar Categoria</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Destaques <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Destaques') }}" id="menuStyle">Listar Destaques</a></li>
                            <li><a href="{{ route('Listar GrupoProdutos') }}" id="menuStyle">Listar Grupo Produtos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Entradas <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Entradas') }}" id="menuStyle">Listar Entradas</a></li>
                            <li><a href="{{ route('Cadastrar Entrada') }}" id="menuStyle">Cadastrar Entrada</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Saídas <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Saidas') }}" id="menuStyle">Listar Saídas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Vendas <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Vendas') }}" id="menuStyle" id="menuStyle">Listar
                                    Vendas</a></li>
                            <li><a href="{{ route('Cadastrar Venda') }}" id="menuStyle" id="menuStyle">Cadastrar
                                    Venda</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Clientes') }}" id="menuStyle" id="menuStyle">Listar
                                    Clientes</a></li>
                            <li><a href="{{ route('Cadastrar Cliente') }}" id="menuStyle" id="menuStyle">Cadastrar
                                    Cliente</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropStyle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Fornecedores <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropMenuStyle">
                            <li><a href="{{ route('Listar Fornecedores') }}" id="menuStyle">Listar Fornecedores</a>
                            </li>
                            <li><a href="{{ route('Cadastrar Fornecedor') }}" id="menuStyle">Cadastrar Fornecedor</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
    @yield('conteudo')

    <footer class="bs-footer" role="contentinfo">
        <div class="container">
            <p>Controle de Estoque &copy; &nbsp; - &nbsp; 2020 </p>
        </div>

    </footer>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/date-uk.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
</body>

</html>

<style>
    #container {
        background-color: blue;
    }

    #dropList:hover {
        background-color: red;
    }

    #dropStyle {
        color: white;
    }

    #dropStyle:hover {
        background-color: rgb(0, 0, 207);
    }

    #dropMenuStyle {
        background-color: blue;
    }

    #dropMenuStyle:hover {
        background-color: blue;
    }

    #menuStyle {
        background-color: blue;
        color: white;
    }

    #menuStyle:hover {
        background-color: rgb(0, 0, 207);
    }

</style>
