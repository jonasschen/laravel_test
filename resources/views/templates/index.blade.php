<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>5Hub - Laravel test</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        @stack('styles')
        <style>
            body{
                padding: 0 12px;
            }

            .menu {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="menu">
                <a href="{{ route('home') }}">Página inicial</a> |
                <a href="{{ route('players.index') }}">Cadastro de Jogadores</a> |
                <a href="{{ route('matches.index') }}">Cadastro de Partidas</a> |
                <a href="{{ route('report.matches') }}">Rel. Partidas Disputadas</a> |
                <a href="{{ route('report.lineups') }}">Rel. Escalações</a>
            </div>

            <div>
                @yield('content')
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" charset="utf-8"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    @stack('scripts')
</html>
