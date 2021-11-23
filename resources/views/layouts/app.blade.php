<!DOCTYPE html>
<html lang="{{ date_default_timezone_set('America/Fortaleza') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: rgb(0, 0, 255);">

            {{-- Container --}}
            <div class="container col-md-12" style="background-color: rgb(0, 67, 255);">

                <div class="row">

                    {{-- Logo --}}
                    <div class="col" id="btnAuth1">
                        <a class="btn btn-light navbar-brand" id="Auth" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    {{-- Botões --}}
                    <div class="col" id="btnAuth2">
                        <ul class="navbar-nav" id="Auth">
                            @if (Auth::guest())
                                <a id="button" href="{{ route('login') }}" class="btn btn-primary nav-link">Login</a>
                                <a id="button" href="{{ route('register') }}"
                                    class="btn btn-success nav-link">Register</a>
                            @else
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

        </nav>

        {{-- Corpo da Página --}}
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

<style>
    .container {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    #btnAuth1 {
        justify-content: flex-start;
        margin-left: 20px;
    }

    .btn-light {}

    #btnAuth2 {
        display: flex;
        justify-content: flex-end;
        margin-right: 20px;
    }

    #button {
        color: white;
        font-size: 17px;
        text-decoration: none;
    }

    #Auth {
        font: bolder;
        font-size: 36px;
        color: white;
        text-decoration: none;
    }

</style>
